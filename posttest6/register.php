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
    <!-- <nav>
        <div class="logo">
            <img src="logo.png" alt="#">
        </div>

        <img src="moon.png" id="icon">
    </nav> -->

    <div class="form">
        <div class="box form-box">
            <header>Registration</header>
            <form action="hasil.php" method="post">
                <div class="field">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="field">
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
                <button type="submit" class="btn">Register</button>
                <div class="links">
                    Already have an account? <a href="login.php">Login</a>
                </div>
            </form>
        </div>
    </div>

    <!-- <script src="main.js"></script> -->

</body>
</html>
