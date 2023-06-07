<?php

require('../connect.php');
$title = $_POST['title'];
$description = $_POST['desc'];
$author = $_POST['author'];
$artist = $_POST['artist'];
$cover = $_FILES['cover'];
$coverTmpName = $cover['tmp_name'];
$coverName = $cover['name'];

if (
    empty($title) ||
    empty($author) ||
    empty($artist) ||
    empty($coverName)
) {
    header('location:../profile.php?inserted=fields');
} else {

    if (!move_uploaded_file($coverTmpName, '../../covers/' . $coverName)) {
        header('location:../profile.php?inserted=image');
    }

    if ($description)
        $statement = "INSERT INTO `manga`(`title`, `Description`, `author`, `artist`, `cover`) 
                VALUES ('$title','$description','$author','$artist','$coverName')";

    else
        $statement = "INSERT INTO `manga`(`title`, `author`, `artist`, `cover`) 
                VALUES ('$title','$author','$artist','$coverName')";

    $query = mysqli_query($conn, $statement);

    if ($query) {

        header("location:../profile.php?inserted=added");
    } else {
        header('location:../profile.php?inserted=error');
    }
}
