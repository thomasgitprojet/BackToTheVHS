<?php
session_start();

include '../includes/_function.php';
include '../includes/_database.php';
include '../includes/_config.php';

var_dump($_SESSION);
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
            <h2>Inscription</h2>
        </div>
        <div class="main__form">

            <form id="addUser" class="form_inscription" action="../actions.php" method="post">

                <label for="inputName" class="form_inscription-label">Nom</label>
                <input type="text" name="name" class="input_inscription" id="inputName" aria-describedby="">
                <?php

                if (isset($_SESSION['errorsList']) && in_array('name', $_SESSION['errorsList'])) {

                    echo
                    displayErrorMsg('name', $_SESSION['errorsList'], $errors);

                }

                if (isset($_SESSION['errorsList']) && in_array('name_size', $_SESSION['errorsList'])) {

                    echo
                    displayErrorMsg('name_size', $_SESSION['errorsList'], $errors);

                }
                ?>

                <label for="inputfirstName" class="form_inscription-label">Prénom</label>
                <input type="text" name="first_name" class="input_inscription" id="inputfirstName" aria-describedby="">
                <?php
                if (isset($_SESSION['errorsList']) && in_array('first_name', $_SESSION['errorsList'])) {

                    echo
                    displayErrorMsg('first_name', $_SESSION['errorsList'], $errors);

                }

                if (isset($_SESSION['errorsList']) && in_array('first_name_size', $_SESSION['errorsList'])) {

                    echo
                    displayErrorMsg('first_name_size', $_SESSION['errorsList'], $errors);

                }
                ?>

                <label for="inputPseudo" class="form_inscription-label">Pseudo</label>
                <input type="text" name="pseudo" class="input_inscription" id="inputPseudo" aria-describedby="">
                <?php
                if (isset($_SESSION['errorsList']) && in_array('pseudo', $_SESSION['errorsList'])) {

                    echo
                    displayErrorMsg('pseudo', $_SESSION['errorsList'], $errors);

                }

                if (isset($_SESSION['errorsList']) && in_array('pseudo_size', $_SESSION['errorsList'])) {

                    echo
                    displayErrorMsg('pseudo_size', $_SESSION['errorsList'], $errors);

                }
                ?>

                <label for="inputBirthday" class="form_inscription-label">Date de naissance</label>
                <input type="date" name="date_birth" class="input_inscription" id="inputBirthday" aria-describedby="">
                <?php
                if (isset($_SESSION['errorsList']) && in_array('date', $_SESSION['errorsList'])) {

                    echo
                    displayErrorMsg('date', $_SESSION['errorsList'], $errors);

                }
                ?>

                <label for="inputEmail" class="form_inscription-label">E-mail</label>
                <input type="email" name="email" class="input_inscription" id="inputEmail" aria-describedby="">
                <?php
                if (isset($_SESSION['errorsList']) && in_array('email', $_SESSION['errorsList'])) {

                    echo
                    displayErrorMsg('email', $_SESSION['errorsList'], $errors);

                }
                ?>

                <label for="inputPwd" class="form_inscription-label">Mot de passe</label>
                <input type="password" name="password" class="input_inscription" id="inputPwd" aria-describedby="">
                <?php
                if (isset($_SESSION['errorsList']) && in_array('password', $_SESSION['errorsList'])) {

                    echo
                    displayErrorMsg('password', $_SESSION['errorsList'], $errors);

                }

                if (isset($_SESSION['errorsList']) && in_array('password_size', $_SESSION['errorsList'])) {

                    echo
                    displayErrorMsg('password_size', $_SESSION['errorsList'], $errors);

                }
                unset($_SESSION['errorsList']);
                ?>

                <div class="content_btn">
                    <input type="submit" value="Valider" class="btn_inscription">
                    <input id="token" type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
                    <input type="hidden" name="action" value="create-account">
                </div>
            </form>
        </div>
    </main>
    <script type="module" src="../js/script-inscription.js"></script>
    <?php require('footer.php') ?>
</body>

</html>