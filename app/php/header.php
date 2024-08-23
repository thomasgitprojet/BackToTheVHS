<header class="header">
        <div class="header__banner">
            <h1>
                <a class="header__ttl" href="../index.php">
                    Back&#60; to the VHS
                </a>
            </h1>
        </div>
        <nav class="nav header__nav" aria-label="menu principal">
            <ul class="nav__lst">
                <li class="menu-close">
                        <img src="../img/Menu.svg" alt="menu burger">
                </li>
                <li class="">
                    <a href="<?= (empty($_SESSION['id_account']) ? 'connexion.php' : 'account.php') ?>">
                        <img src="../img/Person.svg" alt="connexion">
                    </a>
                </li>
            </ul>
        </nav>
        <nav class="nav header__nav--desktop">
            <ul class="nav__lst">
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="products.php">Acheter</a></li>
                <li><a href="<?= (empty($_SESSION['id_account']) ? 'php/connexion.php' : 'sellProduct.php') ?>">Vendre</a></li>
                <li><a href="">Infos</a></li>
                <li>
                    <a href="<?= (empty($_SESSION['id_account']) ? 'connexion.php' : 'account.php') ?>">
                    <!-- "connexion.php" -->
                        <img src="../img/Person.svg" alt="connexion">
                    </a>
                </li>
            </ul>
        </nav>
        <nav class="nav__page-close">
        <div class="nav__page-close__img">
            <img src="../img/Close.svg" alt="">
        </div>
        <ul class="nav__page__lst">
            <li><a href="../index.php">Accueil</a></li>
            <li><a href="products.php">Acheter</a></li>
            <li><a href="<?= (empty($_SESSION['id_account']) ? 'php/connexion.php' : 'sellProduct.php') ?>">Vendre</a></li>
            <li><a href="">Infos</a></li>
        </ul>
    </nav>
</header>