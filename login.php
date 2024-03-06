<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="styles/login.css">
  <title>PGDAV | Login</title>
</head>
<body>

  <!-- Header Page Included -->
  <?php include "header.php" ?>

  <!-- Login Form -->
  <div class="form-wrapper">
    <header>Login</header>
    <form method="post">
      <div class="field">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" placeholder="Enter your name">
      </div>
      <div class="field">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" placeholder="Enter your email">
      </div>
      <div class="field">
        <label for="number">Phone No.</label>
        <input type="number" name="number" id="number" placeholder="Enter your phone number">
      </div>
      <div class="field">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password">
      </div>
      <div class="field">
      <input type="submit" name="login" class="submit-btn" id="login" value="Login">
      </div>
    </form>
  </div>
</body>
</html>