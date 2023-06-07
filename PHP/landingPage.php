<?php
session_start();
if (isset($_SESSION['_loggedIn']) && $_SESSION['_loggedIn'] == true) {
  header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css" />
  <title>Manga</title>
</head>

<body>
  <?php require 'components/header.php'; ?>
</body>

</html>