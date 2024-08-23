<?php
session_start();
include '../includes/_database.php';
include '../includes/_function.php';
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
    <main class="main main--account">

        <div class="main__banner">
            <h2>Mon compte</h2>
        </div>

        <section class="account__content">

            <form action="../actions.php" method="POST">

                <input type="submit" value="déconnection" class="btn_inscription">
                <input type="hidden" name="action" value="deconnexion">
                <input id="token" type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
            </form>
            <div class="account__infos">
                <img src="../img/images-avatar.png" alt="">
                <ul>
                    <?php getHtmlAccountInfos ($dbVHS) ?>
                </ul>

                <div>
                    <ul>
                        <?php getHtmlProduct ($dbVHS) ?>
                    </ul>
                </div>
            </div>
        </section>



    </main>
    <?php require('footer.php') ?>
</body>

</html>