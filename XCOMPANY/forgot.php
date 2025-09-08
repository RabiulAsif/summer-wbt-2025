<?php
// forgot.php

$emailErr = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
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
    <title>Forgot Password</title>
    <style>
        .error { color: #FF0000; }
        .header, .footer, .content { border:1px solid black; padding:10px; }
        .footer { text-align:center; }
        fieldset { width:350px; margin:auto; }
        label { display:inline-block; width:120px; }
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
                <legend><b>FORGOT PASSWORD</b></legend>

                <label>Email :</label>
                <input type="text" name="email" value="<?php echo $email; ?>">
                <span class="error">* <?php echo $emailErr; ?></span><br><br>

                <input type="submit" value="Submit">
            </fieldset>
        </form>
    </div>

    <div class="footer">
        Copyright © 2017
    </div>
</body>
</html>
