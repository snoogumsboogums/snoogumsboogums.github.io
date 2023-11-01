<?php
session_start();
require "koneksi.php";

if (isset($_POST["submit"])) {
    $username = strtolower($_POST["username"]);
    $email = strtolower($_POST["email"]);
    $pass = $_POST["password"];


    $result = mysqli_query($conn, "SELECT * FROM regis WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);

        if (password_verify($pass, $row["password"])){

            $_SESSION['login'] = true;


            header("Location: read.php");
            exit;
        } 
    }
    $error = true;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cartoon recommendation</title>
    <link rel="stylesheet" href="stylewebsite.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- <nav>
        <div class="logo">
            <img src="logo.png" alt="#">
        </div>

        <img src="moon.png" id="icon"> -->
    </nav>

    <section class ="more" id="more">
        <div class="form">
            <div class="box form-box">
                <header>Login</header>
                <form action="" method="post">
                    <div class="field input">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="field input">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="field input">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="field">
                        <input type="submit" class="btn" name="submit" value="Login">
                    </div>
                    <div class="links">
                        Dont have account? <a href="register.php">Sign Up Now</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- <script src="main.js"></script> -->

    
</body>