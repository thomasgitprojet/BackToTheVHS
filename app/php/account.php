<?php
session_start();
include '../includes/_function.php';
echo "hello";
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
            <h2>Mon compte</h2>
        </div>
        <form action="../actions.php" method="POST">

            <input type="submit" value="déconnection" class="btn_inscription">
            <input type="hidden" name="action" value="deconnexion">
            <input id="token" type="hidden" name="token" value="<?= $_SESSION['token'] ?>">
        </form>
        
    </main>
    <?php require('footer.php') ?>
</body>

</html>