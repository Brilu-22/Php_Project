<?php

session_start();
if (isset($_SESSION["user_id"])) {
    $mysqli = require __DIR__ ."/database.php";

    $sql = "SELECT *FROM user WHERE id = {$_SESSION["user_id"]}";
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc(); //associative arrays 
}
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css"
    />
    <title>Home</title>
  </head>
  <body>

  <h1>Home</h1>
    <?php if (isset($user)): ?>
        <p>Hello <?= htmlspecialchars( $user["name"]) ?> . </p>

        <p><a href="logout.php">Logout.</a></p>
    <?php else: ?>
        <p><a href="login.php">Login.</a> or <a href="signup.php">Sign up.</a> </p>

    <?php endif; ?>


  </body>
</html>
