<?php
include 'connect.php';
$showError = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $statement = "select * from users where email = '$email' and password = '$password'";
    $query = mysqli_query($conn, $statement);
    if (mysqli_num_rows($query) === 1) {
        $row = mysqli_fetch_assoc($query);
        $uname = $row['username'];
        $role = $row['role'];
        session_start();
        $_SESSION['_loggedIn'] = true;
        $_SESSION['_user'] = $uname;
        $_SESSION['_role'] = $role;
        header('location:index.php');
    } else {
        $showError = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css"> -->
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>

<body class="text-center">
    <?php if ($showError) {
        echo '
        <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
        Email or Password Incorrect!!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
    } ?>
    <main class="form-signin">
        <form method="post">
            <img class="mb-4" src="https://placehold.it/40x32?text=Logo" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">
                Sign in
            </button>
        </form>
    </main>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>