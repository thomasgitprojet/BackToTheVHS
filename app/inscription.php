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
            
            <form id="addUser" class="form_structure" action="" method="post">
                <label for="inputName" class="form-label">Nom</label>
                <input type="text" name="name" class="input_inscription" id="inputName" aria-describedby="" >
                
                
                
                <label for="inputLastName" class="form-label">Prénom</label>
                <input type="text" name="lastName" class="input_inscription" id="inputLastName" aria-describedby="" >
                
                
                
                <label for="" class="form-label">Pseudo</label>
                <input type="text" name="pseudo" class="input_inscription" id="" aria-describedby="" >
                
                
                <label for="" class="form-label">Date de naissance</label>
                <input type="text" name="birthday" class="input_inscription" id="" aria-describedby="" >
                
                
                
                <label for="" class="form-label">E-mail</label>
                <input type="text" name="email" class="input_inscription" id="" aria-describedby="" >
                
                
                <label for="" class="form-label">Mot de passe</label>
                <input type="text" name="mp" class="input_inscription" id="" aria-describedby="" >

                <div class="content_btn">
                    <button type="submit" value="Submit" class="btn_inscription">Valider</button>
                    <input id='token' type="hidden" name="token" value=''>
                </div>

            </form>
        </div>
    </main>
    <script type="module" src="js/script-inscription.js"></script>
    <?php require('footer.php')?>
</body>
</html>