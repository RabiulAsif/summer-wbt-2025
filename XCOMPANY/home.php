<?php
// home.php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Public Home</title>
    <style>
        body { font-family: Arial; }
        .header, .footer, .content { border:1px solid black; padding:10px;}
        .content {text-align: center;}
        .footer { text-align:center; }
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
        <h3>Welcome to xCompany</h3>
    </div>

    <div class="footer">
        Copyright © 2017
    </div>
</body>
</html>
