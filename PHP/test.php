<?php
$cover = $_FILES['cover'];
$cover_tmp_name = $cover['tmp_name'];
$cover_name = $cover['name'];

if (move_uploaded_file($cover_tmp_name, './uploads' . $cover_name)) {
    echo 'success';
} else {
    echo 'failed';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" enctype="multipart/form-data">
        <label for="cover">Select a file:</label>
        <input type="file" id="cover" name="cover">
        <input type="submit" value="Upload">
    </form>
</body>

</html>