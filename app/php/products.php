<?php
session_start();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back To The VHS</title>
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <?php require('header.php') ?>
    <main class="main">

        <div class="main__banner">
            <h2>Produits</h2>
        </div>

        <section>
            <div class="content-search">
                <form class="form" action="" method="get">
                    <ul class="form__container">
                        <li class="input input--content-search-bar">
                            <label class="search-bar" for="site-search"></label><input class="input__search-bar" placeholder="ex : Jurassic Park" type="search" id="site-search" name="site-search" />
                            <button class="search-btn">Recherche</button>
                        </li>
                        <li class="input">
                            <label class="input__label" for="number">Triez par prix</label>
                            <select class="input__select-priceOrder" type="number" name="price" id="price" placeholder="votre choix">
                                <option value=""></option>
                                <option value="1">croissants</option>
                                <option value="2">décroissants</option>
                            </select>
                        </li>
                        <li class="input">
                            <label class="input__label" for="number">Triez par date</label>
                            <select class="input__select-dateOrder" type="number" name="date" id="date" placeholder="votre choix">
                                <option value=""></option>
                                <option value="3">croissants</option>
                                <option value="4">décroissants</option>
                            </select>
                        </li>
                </form>
            </div>
        </section>


        <div class="content-products">
            <ul class="content-products__lst js-product__lst">
            </ul>
        </div>
    </main>
    <?php require('footer.php') ?>
    <template id="productTemplate">
        <li class="content-products__itm js-product__itm">
            <img class="product-img js-product__img" src="" alt="">
            <h3 class="product-tlt"></h3>
            <p>date de sortie : <span class="product__date"></span></p>
            <p class="product-price"></p>
        </li>
    </template>
    <script type="module" src="../js/script-products.js"></script>
</body>

</html>