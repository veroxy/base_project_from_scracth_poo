<?php

/**
 * Fichier de template de base
 *
 * REQUIRE
 * @var $title string : page title
 * @var $conten string : page content
 */
$title = "Page Title to test";

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="./views/assets/vendors/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="">
</head>

<body>
<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./..//assets/vendors/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24"
                     class="d-inline-block align-text-top">
                Tom Troc
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?action=welcome">welcome/welcome</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tous les articles</a>
                    </li>
                    <li class="nav-item">
                        <?php
                        if (isset($_SESSION['user'])) {
                            echo '<a href="index.php?action=disconnectUser">Déconnexion</a>';
                        } else {
                            echo '<a href="index.php?action=connectionForm">Connexion</a>';
                        }
                        ?>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            menu deréroulant
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>


                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <h1><?= $title ?></h1>
</header>

<main>
    <?= $content /* Ici est affiché le contenu réel de la page. */ ?>
</main>

<footer>
    <nav>
        <ul>
            li*4>a[href="#" class=""]
        </ul>
    </nav>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="./../assets/vendors/bootstrap-5.0.2-dist/js/bootstrap.js"></script>

</body>
</html>