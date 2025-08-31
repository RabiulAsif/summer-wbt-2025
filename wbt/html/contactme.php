<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact</title>
  <link rel="stylesheet" href="../css/contactme.css" />
  <style>
    .error {color: red; margin-left: 10px;}
  </style>
</head>
<body>
  <header>
    <nav>
      <ul class="navbar">
        <li><a href="index.html">Home</a></li>
        <li><a href="education.html">Education</a></li>
        <li><a href="experience.html">Experience</a></li>
        <li><a href="projects.html">Projects</a></li>
        <li><a href="contactme.php">Contact Me</a></li>
      </ul>
    </nav>
  </header>

  <?php
  $firstnameErr = $lastnameErr = $emailErr = $reasonErr = $serviceErr = "";
  $firstname = $lastname = $email = $reason = $service = $provide = $position = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstname"])) {
      $firstnameErr = "First name is required";
    } else {
      $firstname = test_input($_POST["firstname"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
        $firstnameErr = "Only letters allowed";
      }
    }

    if (empty($_POST["lastname"])) {
      $lastnameErr = "Last name is required";
    } else {
      $lastname = test_input($_POST["lastname"]);
      if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
        $lastnameErr = "Only letters allowed";
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

    if (empty($_POST["reason"])) {
      $reasonErr = "Reason is required";
    } else {
      $reason = test_input($_POST["reason"]);
    }

    if (empty($_POST["service"])) {
      $serviceErr = "Service is required";
    } else {
      $service = test_input($_POST["service"]);
    }

    if (!empty($_POST["provide"])) {
      $provide = test_input($_POST["provide"]);
    }

    if (!empty($_POST["position"])) {
      $position = test_input($_POST["position"]);
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>

  <div class="form-container">
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <h2>Contact Me</h2>

      <label>First Name:</label>
      <input type="text" name="firstname" value="<?php echo $firstname;?>">
      <span class="error"><?php echo $firstnameErr;?></span>

      <label>Last Name:</label>
      <input type="text" name="lastname" value="<?php echo $lastname;?>">
      <span class="error"><?php echo $lastnameErr;?></span>

      <label>Email:</label>
      <input type="text" name="email" value="<?php echo $email;?>">
      <span class="error"><?php echo $emailErr;?></span>

      <label>Reason for contact:</label>
      <div class="radio-group">
        <label><input type="radio" name="reason" <?php if ($reason=="Thesis") echo "checked";?> value="Thesis"> Thesis</label>
        <label><input type="radio" name="reason" <?php if ($reason=="Project") echo "checked";?> value="Project"> Project</label>
      </div>
      <span class="error"><?php echo $reasonErr;?></span>

      <label>Services:</label>
      <div class="radio-group">
        <label><input type="radio" name="service" <?php if ($service=="App Development") echo "checked";?> value="App Development"> App Development</label>
        <label><input type="radio" name="service" <?php if ($service=="Web Development") echo "checked";?> value="Web Development"> Web Development</label>
      </div>
      <span class="error"><?php echo $serviceErr;?></span>

      <label>Are you providing any job?</label>
      <div class="radio-group">
        <label><input type="radio" name="provide" <?php if ($provide=="Yes") echo "checked";?> value="Yes"> Yes</label>
        <label><input type="radio" name="provide" <?php if ($provide=="No") echo "checked";?> value="No"> No</label>
      </div>

      <label>Position in job:</label>
      <select name="position">
        <option value="hr" <?php if ($position=="hr") echo "selected";?>>HR</option>
        <option value="ceo" <?php if ($position=="ceo") echo "selected";?>>CEO</option>
        <option value="employee" <?php if ($position=="employee") echo "selected";?>>Employee</option>
      </select>

      <input class="submit-btn" type="submit" value="Submit">
    </form>
  </div>

  <footer>
    <div class="footer-icons">
      <a href="https://www.linkedin.com/in/rabiul-asif-a0246a339/" target="_blank">
        <img src="https://img.icons8.com/ios-filled/24/ffffff/linkedin.png" />
      </a>
      <a href="https://github.com/RabiulAsif" target="_blank">
        <img src="https://img.icons8.com/ios-glyphs/24/ffffff/github.png" />
      </a>
    </div>
    <p>&copy; 2025, MD. Rabiul Islam Asif. All rights reserved.</p>
  </footer>
</body>
</html>
