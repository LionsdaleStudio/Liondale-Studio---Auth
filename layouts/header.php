<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentikációs rendszer alapjai</title>

    <!-- Bootstrap linkek -->
    <link rel="stylesheet" href="../assets/bootstrap\css\bootstrap.min.css">
    <script src="../assets/bootstrap\js\bootstrap.bundle.js"></script>

    <!-- Saját css-t csinálsz -->
    <link rel="stylesheet" href="../assets/style.css">

    <!-- Jquery link (for input masks and stuff) -->
    <script src="../assets/scripts/jquery.js"></script>

    <!-- Input-mask link -->
    <script src="../assets/scripts/input-mask.js"></script>

    <!-- Fontawesome files -->
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <script src="../assets/fontawesome/js/all.js"></script>
</head>

<body>

    <!-- Navbar begin -->

    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end bg-dark" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="closeButton" data-bs-dismiss="offcanvas" aria-label="Close">X</button>

                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../views/index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../views/create_registration.php">Registration</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Products</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">POP figures</a>
                                <a class="dropdown-item" href="#">Coffees</a>
                                <a class="dropdown-item" href="#">Students for hire</a>
                            </div>
                        </li>
                    </ul>
                    <form class="mt-2">
                        <div class="row m-1">
                            <input type="text" name="username" class="form-input mb-2" placeholder="Username">
                        </div>
                        <div class="row m-1">
                            <input type="text" name="Password" class="form-input mb-2" placeholder="Password">
                        </div>
                        <div class="row m-1">
                            <button class="btn btn-outline-success" type="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- Navbar End -->









    <div class="container" id="pageContent">
        <!-- Content begin -->