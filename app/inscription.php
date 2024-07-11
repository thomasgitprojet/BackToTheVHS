<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back To The VHS</title>
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php require('header.php')?>
    <main class="main">
        <div class="main__banner">
            <h2>Inscription</h2>
        </div>
        <div class="main__form">
            
            <form class="form_structure" action="" method="">
                <label for="" class="form-label">Nom</label>
                <input type="text" name="name" class="input_inscription" id="" aria-describedby="" >
                
                
                
                <label for="" class="form-label">Prénom</label>
                <input type="text" name="name" class="input_inscription" id="" aria-describedby="" >
                
                
                
                <label for="" class="form-label">Pseudo</label>
                <input type="text" name="name" class="input_inscription" id="" aria-describedby="" >
                
                
                <label for="" class="form-label">Date de naissance</label>
                <input type="text" name="name" class="input_inscription" id="" aria-describedby="" >
                
                
                
                <label for="" class="form-label">E-mail</label>
                <input type="text" name="name" class="input_inscription" id="" aria-describedby="" >
                
                
                <label for="" class="form-label">Mot de passe</label>
                <input type="text" name="name" class="input_inscription" id="" aria-describedby="" >

                <div class="content_btn">
                    <button type="submit" value="Submit" class="btn_inscription">Valider</button>
                    <input id='token' type="hidden" name="" value=''>
                </div>

            </form>
        </div>
    </main>
    <script type="module" src="js/script-inscription.js"></script>
    <?php require('footer.php')?>
</body>
</html>