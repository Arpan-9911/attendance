<?php
  session_start();
  include "currentPage.php";
?>
<link rel="stylesheet" href="styles/header.css">
<header class="header">
    <div class="container">
        <div class="logo">
            <a href="index.php">
              <div class="logo-div">
                <div>
                  <img src="assets/logo.jpeg" alt="LOGO">
                </div>
                <div>
                  <h1>P.G.D.A.V. College</h1>
                  <h3>University Of Delhi</h3>
                </div>
              </div>
            </a>
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="index.php" <?php if($currentURLLower == '/attendance/' || $currentURLLower == '/attendance/index/php') echo 'class="active"' ?>>Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
    </div>
</header>
