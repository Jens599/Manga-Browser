<head>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<?php

$server = 'localhost:3308';
$serverUser = 'root';
$serverPassword = '';
$database = 'mangabrowser';

$conn = mysqli_connect($server, $serverUser, $serverPassword, $database);

if (!$conn) {
    echo "<div class='alert alert-danger position-fixed top-0 w-100' role='alert'> Connection Error ! </div>";
}
