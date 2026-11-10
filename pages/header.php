<?php

?>

<!DOCTYPE html>
<html lang="en">

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
            <a class="navbar-brand logo" href="index.php">Initiative Citoyenne</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 listor">
                    <li class="nav-item start">
                        <a class="nav-link active" aria-current="page" href="index.php">accueil</a>
                    </li>
                    <li class="nav-item start">
                        <a class="nav-link" href="candidats.php">candidats</a>
                    </li>
                    <li class="nav-item start bare">
                        <a class="nav-link" href="resultat.php">résultats</a>
                    </li>
                    <a href="comparer.php" class="btn btn-dark active beta" role="button"
                        aria-pressed="true">Comparer</a>

                </ul>
                <!-- <form class="d-flex seacher">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>