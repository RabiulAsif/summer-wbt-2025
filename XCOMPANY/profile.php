<!DOCTYPE html>
<html>
<head>
    <title>View Profile</title>
    <style>
        body { font-family: Arial; margin:0; padding:0; }
        .container { width:800px; margin:0 auto; }
        .header, .footer, .content { border:1px solid black; padding:10px; }
        .footer { text-align:center; clear:both; }
        .left { width:200px; float:left; border-right:1px solid black; padding-right:10px; }
        .right { margin-left:220px; padding:10px; }
        ul { list-style:none; padding:0; }
        li { margin:5px 0; }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <img src="logo.png" alt="Company Logo" height="40"> Company
        <span style="float:right;">
            Logged in as <a href="profile.php">Bob</a> | <a href="logout.php">Logout</a>
        </span>
    </div>

    <div class="content">
        <div class="left">
            <b>Account</b><hr>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profile.php">View Profile</a></li>
                <li><a href="edit_profile.php">Edit Profile</a></li>
                <li><a href="change_picture.php">Change Profile Picture</a></li>
                <li><a href="change_password.php">Change Password</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

        <div class="right">
            <h3>PROFILE</h3>
            Name : Bob <br>
            Email : bob@aiub.edu <br>
            Gender : Male <br>
            Date of Birth : 19/09/1998 <br><br>
            <a href="edit_profile.php">Edit Profile</a>
        </div>

        <div style="clear:both;"></div>
    </div>

    <div class="footer">
        Copyright © 2017
    </div>
</div>
</body>
</html>
