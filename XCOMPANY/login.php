<?php
// login.php

$usernameErr = $passwordErr = "";
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $usernameErr = "User Name is required";
    } else {
        $username = test_input($_POST["username"]);
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        .error { color: #FF0000; }
        .header, .footer, .content { border:1px solid black; padding:10px; }
        .footer { text-align:center; }
        fieldset { width:350px; margin:auto; }
        label { display:inline-block; width:100px; }
    </style>
</head>
<body>
    <div class="header">
        <img src="logo.png" alt="Company Logo" height="40">
        <span style="float:right;">
            <a href="home.php">Home</a> |
            <a href="login.php">Login</a> |
            <a href="register.php">Registration</a>
        </span>
    </div>

    <div class="content">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <fieldset>
                <legend><b>LOGIN</b></legend>

                <label>User Name :</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
                <span class="error">* <?php echo $usernameErr; ?></span><br><br>

                <label>Password :</label>
                <input type="password" name="password">
                <span class="error">* <?php echo $passwordErr; ?></span><br><br>

                <hr>
                <input type="checkbox"> Remember Me <br><br>

                <input type="submit" value="Submit">
                <a href="forgot.php">Forgot Password?</a>
                <a href="dashboard.php">Dashboard</a>
            </fieldset>
        </form>
    </div>

    <div class="footer">
        Copyright © 2017
    </div>
</body>
</html>
