<?php
$showError = false;
include 'connect.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {



    if (empty($_POST['userName']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['cpassword'])) {

        $showError = true;
        $message = 'Please fill all fields!!!';
    } else if (isset($_POST['password']) && isset($_POST['cpassword']) && ($_POST['password'] != $_POST['cpassword'])) {

        $showError = true;
        $message = 'Passwords do not match!!!';
    } elseif (mysqli_num_rows(mysqli_query($conn, 'select * from users where email = \'' . $_POST['email'] . '\' ')) === 1) {

        $showError = true;
        $message = 'Email is already Signed Up !!!';
    } else {

        $showError = false;
        $uname = $_POST['userName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        $statement = "INSERT INTO users(username,email,password) VALUES ('$uname' , '$email' , '$password')";
        $query = mysqli_query($conn, $statement);

        header('location: login.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>

<body class="text-center">
    <?php if ($showError) {
        echo '
        <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
        ' . $message . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
    } ?>

    <main class="form-signin">
        <form action="" method="post">
            <img class="mb-4" src="https://placehold.it/40x32?text=Logo" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="John" name="userName">
                <label for="floatingInput">User Name</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control mb-0" id="floatingInput" placeholder="password" name="password">
                <label for="floatingInput">Password</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="cpassword">
                <label for="floatingPassword">Confirm Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">
                Sign up
            </button>
        </form>
    </main>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>