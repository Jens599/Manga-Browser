    <?php
    $showAlert = null;
    session_start();
    if (!isset($_SESSION['_loggedIn']) || $_SESSION['_loggedIn'] === false) {
        header('location:landingPage.php');
    }



    if (isset($_GET['inserted'])) {
        $showAlert = $_GET['inserted'];
    }

    if ($showAlert === 'added') {
        echo '
        <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
        Manga Added!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
    } else if ($showAlert === 'image') {
        echo '
        <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
        Error uploading image
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
    } else if ($showAlert === "fields") {
        echo '
        <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
        Please Fill All Fields
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
    } else if ($showAlert === "error") {
        echo '
        <div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
        Error Inserting into database;
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
    }
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Profile</title>
        <link rel="stylesheet" href="../profile.css">
        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
        <link rel="stylesheet" href="../node_modules/font-awesome/css/font-awesome.css">
    </head>



    <?php require 'components/header.php' ?>

    <body>
        <div class="d-flex h-100 gap-5">
            <section class="dashboard">
                <div class="options mt-5">
                    <ul class="list-unstyled fs-3 d-flex flex-column gap-3">
                        <li class="mb-4 ps-5 border-bottom"><i class="fa fa-history me-3"></i> <a href="#" class="text-decoration-none text-white">History</a></li>
                        <li class="mb-4 ps-5 border-bottom"><i class="fa fa-heart-o me-3"></i><a href="#" class="text-decoration-none text-white">Favorites</a></li>
                        <li class="mb-4 ps-5 border-bottom"><i class="fa fa-bookmark me-3"></i><a href="#" class="text-decoration-none text-white">Bookmarks</a></li>

                        <?php
                        if (!$_SESSION['_role'])
                            echo "<li class='mb-4 ps-5 border-bottom add-btn'><i class='fa fa-plus me-3'></i><a href='#' class='text-decoration-none text-white'>Add Manga</a></li>"
                        ?>

                        <li class="mb-4 ps-5 border-bottom"><i class="fa fa-cog me-3"></i><a href="#" class="text-decoration-none text-white">Settings</a></li>
                        <li class="mb-4 ps-5 border-bottom"><i class="fa fa-sign-out me-3"></i><a href="#" class="text-decoration-none text-white">Logout</a></li>
                    </ul>
                </div>
            </section>

            <section class="pt-5 add-form" style="  transition: transform 100ms ease-out; transform-origin: 0 50%; transform:scaleX(0)">
                <form action='../PHP/components/addItem.php' class="p-5 bg-dark text-white rounded-3" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <small id="descHelp" class="form-text text-muted">Optional</small>
                        <textarea class="form-control" id="desc" rows="3" name="desc"></textarea>

                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" class="form-control" id="author" name="author">
                    </div>
                    <div class="mb-3">
                        <label for="artist" class="form-label">Artist</label>
                        <input type="text" class="form-control" id="artist" name="artist">
                    </div>
                    <div class="mb-4">
                        <label for="cover" class="form-label">Manga Cover</label>
                        <input type="file" class="form-control" id="cover" name="cover">
                    </div>
                    <button type="submit" class="btn btn-secondary">Add Manga</button>
                </form>
            </section>
        </div>
        <script>
            const addForm = document.querySelector('.add-form');
            const addBtn = document.querySelector('.add-btn');
            let addFormState = 1;
            addBtn.addEventListener('click', function(e) {
                addFormState = addFormState ? 0 : 1;
                if (addFormState) addForm.style.transform = 'scaleX(0)';
                if (!addFormState) addForm.style.transform = 'scaleX(1)';
            });
        </script>
        <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    </body>

    </html>