<?php
session_start();
require_once 'includes/_config.php';
require_once 'includes/_function.php';
require_once 'includes/_database.php';

// if (!isset($_REQUEST['action'])) {
//     redirectTo('php/connexion.php');
// }
// var_dump($_REQUEST);
// var_dump($_SESSION);


// Check CSRF
preventCSRF();

if (!empty($_REQUEST)) {

    // if (!checkAccountInfo($_REQUEST)) {
    //     redirectTo('php/inscription.php');
    // }

    if ($_REQUEST['action'] === 'create-account' && $_SERVER['REQUEST_METHOD'] === 'POST' && checkAccountInfo($_REQUEST)) {
        $insert = $dbVHS->prepare("INSERT INTO `account`(`name`, `first_name`, `pseudo`, `date_birth`, `email`, `password`)
        VALUES (:name, :first_name, :pseudo, :date_birth, :email, :password);");


        $isInsertOk = $insert->execute([

            'name' => htmlspecialchars($_REQUEST['name']),
            'first_name' => htmlspecialchars($_REQUEST['first_name']),
            'pseudo' => htmlspecialchars($_REQUEST['pseudo']),
            'date_birth' => date('Y-m-d', strtotime($_REQUEST['date_birth'])),
            'email' => htmlspecialchars($_REQUEST['email']),
            'password' => password_hash($_REQUEST['password'], PASSWORD_BCRYPT)
        ]);



        if ($isInsertOk) {
            addMessage('inscription_ok');
            redirectTo('php/connexion.php');
        } else {
            addError('inscription_ko');
            redirectTo('php/inscription.php');
            unset($_SESSION['errorsList']);
        }
    } 
    
    elseif ($_REQUEST['action'] === 'connexion-account' && $_SERVER['REQUEST_METHOD'] === 'POST' ) {
        if (!checkConnexionInfo($_REQUEST)) {
            redirectTo('php/connexion.php');
        }else {
            connectedMyAccount($dbVHS);
        }
    //     $query = $dbVHS->prepare("SELECT pseudo, id_account, password FROM account WHERE pseudo = :pseudo");

    //     $query->execute([
    //         'pseudo' => htmlspecialchars($_REQUEST['connexion_pseudo']),

    //     ]);

    //    while($account = $query->fetch()) {

    //        if ($account['password'] == password_hash($_REQUEST['connexion_password'], PASSWORD_BCRYPT)) {
    //            $_SESSION["id_account"] = $account["id_account"];
    //         }else {
    //             addError('error_password');
    //             // redirectTo('php/connexion.php');
    //         }
    //     }
    //     redirectTo('index.php');
    
    } 
    
    elseif ($_REQUEST['action'] === 'deconnexion' && $_SERVER['REQUEST_METHOD'] === 'POST') {
        // var_dump('ok1');
        // exit;
        session_destroy();
        redirectTo('index.php');       
    }
    
    // redirectTo('php/connexion.php');
}

// redirectTo('index.php');
 


// redirectTo('index.php');
