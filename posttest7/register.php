<?php
require "koneksi.php";

if (isset($_POST["regis"])) {
    $username = strtolower($_POST["username"]);
    $email = strtolower($_POST["email"]);
    $pass = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if ($pass === $confirm_password) {
        $pass = password_hash($pass, PASSWORD_DEFAULT);

        $result = mysqli_query($conn, "SELECT username FROM regis WHERE username = '$username'");

        if (mysqli_fetch_assoc($result)) {
            echo "
            <script>
                alert('Username has already been used!');
                document.location.href = 'register.php';
            </script>";
        } else {
            $sql = "INSERT INTO regis (username, password, email) VALUES ('$username', '$pass', '$email')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "
                <script>
                    alert('Registration Successful!');
                    document.location.href = 'login.php';
                </script>";
            } else {
                echo "
                <script>
                    alert('Registration Failed!');
                    document.location.href = 'register.php';
                </script>";
            }
        }
    } else {
        echo "
        <script>
            alert('Passwords do not match');
            document.location.href = 'register.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="stylewebsite.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="form">
        <div class="box form-box">
            <header>Registration</header>
            <form action="" method="POST">
                <div class="field">
                    <div class="field">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" required>
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="field">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="field">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirm_password" required>
                    </div>
                    </div>
                    <button type="submit" name="regis" class="btn">Register</button>
                    <div class="links">
                        Already have an account? <a href="login.php">Login</a>
                    </div>
            </form>
        </div>
    </div>
</body>
</html>
