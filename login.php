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
        <input type="text" name="email" id="email" placeholder="Email">
      </div>
      <div class="field">
        <input type="password" name="password" id="password" placeholder="Password">
      </div>
      <div class="field">
      <input type="submit" name="login" class="submit-btn" id="login" value="Login">
      </div>
    </form>
  </div>
</body>
</html>