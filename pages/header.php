<?php

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../slide/slick.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mobil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <title>
        <?php
        if (isset($title)) {
            echo $title;
        } else {
            echo "page sans titre";
        }
        ?>
    </title>
</head>

<body>
    <nav class="navbar navbar-expand-lg entete">
        <div class="container-fluid biger">
            <a class="navbar-brand logo" href="index.php"><span class="logo-mark"><i class="fa-solid fa-leaf" aria-hidden="true"></i></span>Initiative <strong>Citoyenne</strong></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 listor">
                    <li class="nav-item start">
                        <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
                    </li>
                    <li class="nav-item start">
                        <a class="nav-link" href="candidats.php">Candidats</a>
                    </li>
                    <li class="nav-item start bare">
                        <a class="nav-link" href="resultat.php">Résultats</a>
                    </li>
                    <li class="nav-item">
                        <a href="comparer.php" class="btn btn-dark active beta" role="button">Comparer les programmes <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>
                    </li>
                </ul>
                <!-- <form class="d-flex seacher">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>