<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            margin : 0;
            padding : 0;
        }

        .form {
            display : flex;
            align-items: center;
            justify-self: center;
            min-height: 100vh;
            background-color: #FFE5E5;
        }

        .box {
            display: flex;
            flex-direction: column;
            padding: 25px 25px;
            /* border-radius: 20px; */
            /* box-shadow: #ff69b4; */
        }

        .form-box {
            width: 450px;
            margin: 0px 10px;
        }

        .form-box header{
            font-size: 25px;
            font-weight: 600;
            padding-bottom: 10px;
            /* border-bottom: 1px solid #e6e6e6; */
            margin-bottom: 10px;
        }

        .form-box .field {
            display: flex;
            margin-bottom: 10px;
            flex-direction: column;
        }

        .form-box .input input {
            height: 40px;
            width: 100%;
            font-size: 16px;
            padding: 0 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
        }

        .btn {
            height: 35px;
            background: rgba(76,68,182,0.808);
            border: 0;
            border-radius: 5px;
            color: #fff;
            font-size: 15px;
            cursor: pointer;
            transition: all .3s;
            margin-top: 10px;
            padding: 0px 10px;
        }

        .btn:hover {
            opacity: 0.82;
        }

        .submit {
            width: 100%;
        }

        .links {
            margin-bottom: 15px;
        }
    </style>

</head>
<body>
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
</body>
</html>
