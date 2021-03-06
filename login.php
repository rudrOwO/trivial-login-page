<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="about:blank" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="./styles.css" />
  <title>Login</title>
</head>

<body>
  <?php
  // server initialization
  include 'mysql_config.php';

  // retreive form data
  $username = $_POST["uname"];
  $password =  $_POST["passwd"];


  // varibles used for rendering
  $display = "none";
  $clientMessage = "";

  if ($username === "" || $password === "") { // Input sanitization
    $display = "block";
    $clientMessage = "Invalid input format detected";
  } else { // Process query
    $userCount = mysqli_query(
      $conn,
      "SELECT * FROM users WHERE username='$username' AND password='$password'"
    );

    if (mysqli_num_rows($userCount) > 0) {
      // Redirect to Home Page
      header("Location: https://cataas.com/cat/gif");
      die();
    } else {
      $display = "block";
      $clientMessage = "Invalid Credentials! Please try again";
    }
  }
  ?>

  <!-- Render page to Client -->
  <div id="top-container">
    <form id="form-container" method="post">
      <?php
      echo "<div class='alert alert-danger' style='padding: 0.25rem; display: $display;'>";
      echo $clientMessage;
      echo "</div>";
      ?>
      <div class="form-group">
        <label for="uname">Username</label>
        <input class="form-control" id="uname" type="text" placeholder="Enter Username" name="uname" required />
      </div>

      <div class="form-group">
        <label for="passwd">Password</label>
        <input id="passwd" class="form-control" type="password" placeholder="Enter Password" name="passwd" required />
      </div>
      <div id="button-container">
        <button type="submit" class="btn btn-success" id="login">Login</button>
        <a href="./register.html">
          <button type="button" class="btn btn-primary" id="register">
            Register
          </button>
        </a>
      </div>
    </form>
  </div>
</body>

</html>