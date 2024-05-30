<?php

if (isset($_POST['submit'])) { // Check if form is submitted

  // Get form data (assuming email and password fields have those names)
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Perform validation (replace with your actual validation logic)
  if (empty($email) || empty($password)) {
    $errorMsg = "Please fill in both email and password fields.";
  } else {
    // Check user credentials in database (replace with your database connection)
    $connection = mysqli_connect("localhost", "username", "password", "database"); // Replace with your database details
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
      // Login successful (redirect or display success message)
      header("Location: success.html"); // Redirect to success page
      exit;
    } else {
      $errorMsg = "Invalid email or password.";
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login / Registration Form</title>
  <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
  <link rel="stylesheet" href="login.css">
  <style>
    body {
      background-image: url("wallhaven-l882py_1920x1080.png");  /* Replace with your image path */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;  /* Set body height to 100vh for full viewport */
      margin: 0;  /* Remove body margin for better centering */
    }

    .container {
      display: flex;  /* Use flexbox for centering */
      justify-content: center;  /* Center content horizontally */
      align-items: center;  /* Center content vertically */
      height: 100%;  /* Inherit full viewport height from body */
    }
  </style>
</head>

<body>
  <div class="container" id="container">
    <div class="form-container login-container">
      <form action="login.php" method="post">
        <h1>Login hire.</h1>
        <input type="email" placeholder="Email" name="email">
        <input type="password" placeholder="Password" name="password">
        <?php if (isset($errorMsg)) : ?>
          <p class="error"><?php echo $errorMsg; ?></p>
        <?php endif; ?>
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" name="checkbox" id="checkbox">
            <label>Remember me</label>
          </div>
          <div class="pass-link">
            <a href="#">Forgot password?</a>
          </div>
        </div>
        <button type="submit" name="submit"> <a href="index.php"></a>Login</button>
        <span>or use your account</span>
        <div class="social-container">
          <a href="#" class="social"><i class="lni lni-facebook-fill"></i></a>
          <a href="landingpage.html" class="social"><i class="lni lni-google"></i></a>
          <a href="#" class="social"><i class="lni lni-instagram-fill"></i></a>
        </div>
      </form>
    </div>

  </div>

  <script src="scripts/script.js"></script>

</body>

</html>
