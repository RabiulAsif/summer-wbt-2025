<?php
// register.php

$nameErr = $emailErr = $usernameErr = $passwordErr = $confirmErr = $genderErr = $dobErr = "";
$name = $email = $username = $gender = $dob = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["username"])) {
        $usernameErr = "User Name is required";
    } else {
        $username = test_input($_POST["username"]);
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    }

    if (empty($_POST["confirm"])) {
        $confirmErr = "Confirm Password is required";
    } elseif ($_POST["password"] !== $_POST["confirm"]) {
        $confirmErr = "Passwords do not match";
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["dob"])) {
        $dobErr = "Date of Birth is required";
    } else {
        $dob = $_POST["dob"];
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
    <title>Registration</title>
    <style>
        .error { color: #FF0000; }
        .header, .footer, .content { border:1px solid black; padding:10px; }
        .footer { text-align:center; }
        fieldset { width:400px; margin:auto; }
        label { display:inline-block; width:130px; }
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
                <legend><b>REGISTRATION</b></legend>

                <label>Name :</label>
                <input type="text" name="name" value="<?php echo $name; ?>">
                <span class="error">* <?php echo $nameErr; ?></span><br><br>

                <label>Email :</label>
                <input type="text" name="email" value="<?php echo $email; ?>">
                <span class="error">* <?php echo $emailErr; ?></span><br><br>

                <label>User Name :</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
                <span class="error">* <?php echo $usernameErr; ?></span><br><br>

                <label>Password :</label>
                <input type="password" name="password">
                <span class="error">* <?php echo $passwordErr; ?></span><br><br>

                <label>Confirm Password :</label>
                <input type="password" name="confirm">
                <span class="error">* <?php echo $confirmErr; ?></span><br><br>

                <label>Gender :</label>
                <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="Other"> Other
                <span class="error">* <?php echo $genderErr; ?></span><br><br>

                <label>Date of Birth :</label>
                <input type="date" name="dob" value="<?php echo $dob; ?>">
                <span class="error">* <?php echo $dobErr; ?></span><br><br>

                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </fieldset>
        </form>
    </div>

    <div class="footer">
        Copyright © 2017
    </div>
</body>
</html>
