<?php
session_start();
include '../includes/_function.php';
include '../includes/_config.php';
// var_dump($_SESSION);
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
    <?php require('header.php')?>
    <main class="main">
        <div class="main__banner">
            <h2>Connexion</h2>
        </div>
        <div class="content_main_connexion">
        <?php
            if (isset($_SESSION['msg'])) {
                echo '<p class="msg_connexion">' . $messages[$_SESSION['msg']] . '</p>';
                unset($_SESSION['msg']);
            }
        ?>
            <form class="form_connexion" action="" method="post">

                <label for="inputPseudo" class="form_connexion-label">Pseudo</label>
                <input type="text" name="pseudo" class="input_connexion" id="inputName" aria-describedby="">

                <label for="inputPwd" class="form_connexion-label">Mot de passe</label>
                <input type="password" name="pwd" class="input_connexion"
                id="inputPwd" aria-describedby="">


                <div class="content_btn--connexion">
                    
                    <button type="submit" value="Submit" class="btn_connexion">Valider</button>
                    <input id='token' type="hidden" name="token" value=''>
                </div>              
            </form>
            
            <a href="inscription.php"><input type="hidden">Créer un compte</a>
        </div>
    </main>

    <!-- <template id="templateError">
        <li data-error-message="" class="errors__itm">Ici vient le message d'erreur</li>
    </template>

    <template id="templateMessage">
        <li data-message="" class="messages__itm">Ici vient le message</li>
    </template> -->

    <script type="module" src="../js/script-connexion.js"></script>
    <?php require('footer.php')?>
</body>
</html>