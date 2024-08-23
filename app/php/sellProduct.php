<?php
session_start();

include '../includes/_function.php';
include '../includes/_database.php';
include '../includes/_config.php';

generateToken();
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
            <h2>Vendre</h2>
        </div>
        <div class="main__form">

            <form id="addUser" class="form_inscription" action="../actions.php" method="post">

                <label for="inputName" class="form_inscription-label">Nom</label>
                <input type="text" name="name" class="input_inscription" id="inputName" aria-describedby="">

                <label for="inputImage" class="form_inscription-label">Photo</label>
                <input type="text" name="image" class="input_inscription" id="inputImage" aria-describedby="">
                <?php

                // if (isset($_SESSION['errorsList']) && in_array('name', $_SESSION['errorsList'])) {

                //     echo
                //     displayErrorMsg('name', $_SESSION['errorsList'], $errors);

                // }

                // if (isset($_SESSION['errorsList']) && in_array('name_size', $_SESSION['errorsList'])) {

                //     echo
                //     displayErrorMsg('name_size', $_SESSION['errorsList'], $errors);

                // }
                ?>

                <label for="inputDescription" class="form_inscription-label">Description</label>
                <input type="text" name="description" class="input_inscription" id="inputDescription" aria-describedby="">
                <?php
                // if (isset($_SESSION['errorsList']) && in_array('first_name', $_SESSION['errorsList'])) {

                //     echo
                //     displayErrorMsg('first_name', $_SESSION['errorsList'], $errors);

                // }

                // if (isset($_SESSION['errorsList']) && in_array('first_name_size', $_SESSION['errorsList'])) {

                //     echo
                //     displayErrorMsg('first_name_size', $_SESSION['errorsList'], $errors);

                // }
                ?>

                <label for="inputPrice" class="form_inscription-label">Prix</label>
                <input type="text" name="price" class="input_inscription" id="inputPrice" aria-describedby="">
                <?php
                // if (isset($_SESSION['errorsList']) && in_array('pseudo', $_SESSION['errorsList'])) {

                //     echo
                //     displayErrorMsg('pseudo', $_SESSION['errorsList'], $errors);

                // }

                // if (isset($_SESSION['errorsList']) && in_array('pseudo_size', $_SESSION['errorsList'])) {

                //     echo
                //     displayErrorMsg('pseudo_size', $_SESSION['errorsList'], $errors);

                // }
                ?>

                <div class="content_btn">
                    <input type="submit" value="Valider" class="btn_inscription">
                    <input id="token" type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
                    <input type="hidden" name="action" value="create-product">
                </div>
            </form>
        </div>
    </main>
    <script type="module" src="../js/script-inscription.js"></script>
    <?php require('footer.php') ?>
</body>

</html>
