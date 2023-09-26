<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap linkek -->
    <link rel="stylesheet" href="bootstrap\css\bootstrap.min.css">
    <script src="bootstrap\js\bootstrap.bundle.js"></script>

    <!-- Saját css-t csinálsz -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Feladatok</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page">Home <span
                                class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Navbar vége -->

    <!-- Shift + alt + a -->
    <div class="container">
        <!-- Sor 1. -->
        <div class="row mt-3 text-center">
            <div class="col">
                <h4>Feladat: 3.2</h4>
                <hr>
            </div>
        </div>
        <!-- Sor 1. vége -->

        <!-- Form - kártyával -->

        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <div class="card">
                    <h5 class="m-2">Adatbekérő form:</h5>
                    <div class="card-body">
                        <h4 class="card-title text-center">Adatok</h4>
                        <form class="text-end" action="" method="GET" name="form_1">
                            <input class="form-control mb-2" type="number" step="0.01" name="szam_1" id="szam_1">
                            <button class="btn btn-outline-primary mt-2 mb-2" name="submit"
                                type="submit">Küldés</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>

        <?php

        if (isset($_GET['submit'])) {
            if (isset($_GET['szam_1']) && is_numeric($_GET['szam_1'])) {
                $atkertSzam = $_GET['szam_1'];
            }
        }
        ?>

        <p>Az átkért szám:
            <?php echo isset($atkertSzam) ? $atkertSzam : ""; ?>
        </p>

        <!-- Sor 2. -->
        <div class="row mt-3 text-center">
            <div class="col">
                <h4>Feladat: 3.3</h4>
                <hr>

                <div class="row">
                    <div class="col"></div>
                    <div class="col-6">
                        <div class="card">
                            <h5 class="m-2">Adatbekérő form:</h5>
                            <div class="card-body">
                                <h4 class="card-title text-center">Adatok</h4>
                                <form class="text-end" action="" method="GET" name="form_2">
                                    <input class="form-control mb-2" type="number" name="szam_2" id="szam_2">
                                    <select class="form-select" name="muvelet" id="muvelet" required>
                                        <option value="" disabled selected>Kérlek válassz...</option>
                                        <option value="fahrenheitbe">Celsiusból Fahrenheitbe</option>
                                        <option value="celsiusba">Fahrenheitből Celsiusba</option>
                                    </select>
                                    <button class="btn btn-outline-primary mt-2 mb-2" type="submit"
                                        name="submit">Küldés</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col"></div>
                </div>

                <?php

                if (isset($_GET['submit'])) {
                    if (isset($_GET['szam_2']) && is_numeric($_GET['szam_2']) && isset($_GET['muvelet'])) {
                        $atkertSzam = $_GET['szam_2'];
                        $muvelet = $_GET['muvelet'];

                        switch ($muvelet) {
                            case 'fahrenheitbe':
                                $eredmeny = $atkertSzam * 1.8 + 32;
                                break;
                            case 'celsiusba':
                                $eredmeny = ($atkertSzam - 32) / 1.8;
                                break;
                            default:
                                echo "Valami nem jó.";
                                break;
                        }
                    }
                }
                ?>

                <p>Az átváltás eredménye:
                    <?php echo isset($eredmeny) ? $eredmeny : ""; ?>
                </p>

            </div>
        </div>
        <!-- Sor 2. vége -->

        <!-- Sor 3. -->
        <div class="row mt-3 text-center">
            <div class="col">
                <h4>Feladat: 3.4</h4>
                <hr>
            </div>

            <div class="row">
                <div class="col"></div>
                <div class="col-6">
                    <div class="card">
                        <h5 class="m-2">Adatbekérő form:</h5>
                        <div class="card-body">
                            <h4 class="card-title text-center">Adatok</h4>
                            <form class="" action="" method="GET" name="form_2">
                                <input class="form-control mb-2" type="number" name="magassag" id="magassag"
                                    placeholder="Magasság (cm)">
                                <input class="form-control mb-2" type="number" name="testsuly" id="testsuly"
                                    placeholder="Testsúly (kg)">
                                <button class="btn btn-outline-primary mt-2 mb-2" type="submit"
                                    name="submit">Küldés</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
        <!-- Sor 3. vége -->

        <?php

        if (isset($_GET['submit'])) { /* Megnézem, hogy meg lett-e nyomva a gomb, ami a számításhoz visz. */
            if (isset($_GET['magassag']) && isset($_GET['testsuly'])) { /* megvannak-e az adatok. */
                if (is_numeric($_GET['magassag']) && is_numeric($_GET['testsuly'])) { /* Számokat kaptam-e */

                    $magassag = $_GET['magassag'] / 100;
                    $testsuly = $_GET['testsuly'];
                    $eredmeny = $testsuly / pow($magassag, 2);

                    switch ($eredmeny) {
                        case $eredmeny < 18.5:
                            $allapot = "Sovány";
                            break;
                        case $eredmeny >= 18.5 && $eredmeny <= 24.99:
                            $allapot = "Normál";
                            break;
                        case $eredmeny > 24.99:
                            $allapot = "Túlsúly";
                            break;
                        default:
                            echo 'hiba';
                            break;
                    }

                }
            }
        }

        ?>

        <p>A BMI index:
            <?php echo isset($eredmeny) ? $eredmeny : ""; ?>
            <?php echo "<br> Emberünk állapota: " ?>
            <?php echo isset($allapot) ? $allapot : ""; ?>
        </p>


    </div>

    <!-- Sor 4. -->
    <div class="row mt-3 text-center">
        <div class="col">
            <h4>Feladat: 3.4</h4>
            <hr>
        </div>

        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <div class="card">
                    <h5 class="m-2">Pontok távolsága form:</h5>
                    <div class="card-body">
                        <h4 class="card-title text-center">Adatok</h4>
                        <form class="" action="" method="GET" name="form_2">
                            <div class="row">
                                <div class="col">
                                    <input class="form-control mb-2" type="number" name="pont1x" id="pont1x"
                                        placeholder="Pont 1 x">
                                </div>
                                <div class="col">
                                    <input class="form-control mb-2" type="number" name="pont1y" id="pont1y"
                                        placeholder="Pont 1 y">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input class="form-control mb-2" type="number" name="pont2x" id="pont2x"
                                        placeholder="Pont 2 x">
                                </div>
                                <div class="col">
                                    <input class="form-control mb-2" type="number" name="pont2y" id="pont2y"
                                        placeholder="Pont 2 y">
                                </div>
                            </div>

                            <button class="btn btn-outline-primary mt-2 mb-2" type="submit"
                                name="submit">Küldés</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>

    <?php
    if (isset($_GET['submit'])) {
        if (isset($_GET['pont1x']) && isset($_GET['pont2x']) && isset($_GET['pont2y']) && isset($_GET['pont1y'])) {
            $x1 = $_GET['pont1x'];
            $y1 = $_GET['pont1y'];
            $x2 = $_GET['pont2x'];
            $y2 = $_GET['pont2y'];


            $eredmeny = sqrt(($x1 - $x2) * ($x1 - $x2) + ($y2 - $y1) * ($y2 - $y1));
        }
    }
    ?>
    <p>A pontok távolsága :
        <?php echo isset($eredmeny) ? $eredmeny : ""; ?>
    </p>
</body>

</html>