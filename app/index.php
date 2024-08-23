<?php
session_start();
include 'includes/_function.php';
generateToken();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back To The VHS</title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="header__banner">
            <h1>
                <a class="header__ttl" href="index.php">
                    Back&#60; to the VHS
                </a>
            </h1>
        </div>
        <nav class="nav header__nav" aria-label="menu principal">
            <ul class="nav__lst">
                <li class="menu-close">
                    <img src="img/Menu.svg" alt="menu burger">
                </li>
                <li class="">
                    <a href="<?= (empty($_SESSION['id_account']) ? 'php/connexion.php' : 'php/account.php') ?>">
                    
                        <img src="img/Person.svg" alt="connexion">
                    </a>
                </li>
            </ul>
        </nav>

        <nav class="nav header__nav--desktop">
            <ul class="nav__lst">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="php/products.php">Acheter</a></li>
                <li><a href="<?= (empty($_SESSION['id_account']) ? 'php/connexion.php' : 'php/sellProduct.php') ?>">Vendre</a></li>
                <li><a href="">Infos</a></li>
                <li>
                    <a href="<?= (empty($_SESSION['id_account']) ? 'php/connexion.php' : 'php/account.php') ?>">
                        <img src="img/Person.svg" alt="connexion">
                    </a>
                </li>
            </ul>
            <div class="header_msg">
                <p> <?= (!empty($_SESSION["pseudo"])) ? 'Bonjour ' . $_SESSION["pseudo"] : '' ?></p>
            </div>
        </nav>
        <nav class="nav__page-close">
            <div class="nav__page-close__img">
                <img src="img/Close.svg" alt="">
            </div>
            <ul class="nav__page__lst">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="php/products.php">Acheter</a></li>
                <li><a href="<?= (empty($_SESSION['id_account']) ? 'php/connexion.php' : 'php/sellProduct.php') ?>">Vendre</a></li>
                <li><a href="">Infos</a></li>
            </ul>
        </nav>
    </header>

    <section class="banner-movie" aria-label="films du jour">
        <div class="banner-movie__bg-side">
        </div>
        <div class="banner-movie__content">
            <p class="content-date">Le 20 juin 1995 sortait </p>
            <h2 class="content-tlt">Dumb and Dumber</h2>
            <div class="content-img">
                <img class="banner-movie__img" src="img/dumb and dumber.jpg" alt="">
            </div>
            <div class="content-btn">
                <img class="js-btn" src="img/Down Button.svg" alt="">
            </div>
            <div class="content__more-infos hidden">
                <div class="content-realisateur">
                    <p>Réalisateurs :</p>
                    <p>Peter et Bobby Farrely</p>
                </div>
                <div class="content-acteurs">
                    <p>Acteurs :</p>
                    <p>Jim Carrey, Jeff Daniels</p>
                </div>
                <div class="content-anecdote">
                    <p>Anecdote :</p>
                    <p>Pour le gros plan sur la montre de Lloyd dans la scène des toilettes, l’équipe technique à dû réalisé un poignet et une montre géante car ce mouvement de caméra avec une telle  profondeur de champ est impossible avec une montre de taille normale. </p>
                </div>
            </div>
        </div>
        <div class="banner-movie__bg-side">
        </div>
    </section>
    <main class="main">
        <div class="main__banner">
            <h2>Infos</h2>
        </div>
        <div class="content-info">
            <div class="content-info__article">
                <img class="info_img" src="img/en mode vhs.jpg" alt="">
                <a class="info_tlt" href="">
                    <h2>
                        Chaine Youtube recommandée
                    </h2>
                </a>
                <div class="article-publication-date">
                    <p>publié le jj/mm/aaaa</p>
                </div>
            </div>
            <div class="content-info__article">
                <img class="info_img" src="img/enchere.jpg" alt="">
                <a class="info_tlt" href="">
                    <h2>
                        Nouveau record de vent
                    </h2>
                </a>
                <div class="article-publication-date">
                    <p>publié le jj/mm/aaaa</p>
                </div>
            </div>
        </div>
    </main>
    <?php require('php/footer.php') ?>
    <script type="module" src="http://localhost:5173/@vite/client"></script>
    <script type="module" src="http://localhost:5173/js/main.js"></script>
    <script type="module" src="js/script-index.js"></script>
</body>

</html>