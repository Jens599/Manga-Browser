<?php
if (isset($_SESSION['_loggedIn']) && ($_SESSION['_loggedIn'] === true)) {
    $loggedIn = true;
} else {
    $loggedIn = false;
}
?>

<head>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.css" />
</head>
<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap flex-column flex-lg-row align-items-center justify-content-center justify-content-lg-between">
            <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img class="bi me-2" src="../../images/logo.png" alt="" />
            </a>

            <?php
            if ($loggedIn) {
                echo
                '<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="./index.php" class="nav-link px-2 text-secondary">Home</a></li>
                    <li><a href="profile.php" class="nav-link px-2 text-white">My Profile</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Bookmarks</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">History</a></li>
                    </ul>';
            }
            ?>
            <div class="d-flex align-items-center mb-2 mb-lg-0 flex-column flex-lg-row">
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 " data-np-autofill-type="other" data-np-checked="1" data-np-watching="1">
                    <input type="search" class="form-control form-control-dark " placeholder="Search..." aria-label="Search" />
                </form>



                <div class="text-end d-flex align-items-center mb-2 mb-lg-0">
                    <?php
                    if (!$loggedIn) {
                        echo
                        '<a href="login.php" class="btn btn-outline-light me-2 text-nowrap"> Login </a>
                        <a href="signup.php" class="btn btn-warning text-nowrap">Sign-up</a>';
                    } else {
                        echo '<a href="logout.php" class="btn btn-warning text-nowrap">logout</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</header>