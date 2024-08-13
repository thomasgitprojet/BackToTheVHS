<?php
session_start();

require_once 'includes/_config.php';
require_once 'includes/_function.php';
require_once 'includes/_database.php';
// require_once 'includes/_message.php';
// require_once 'includes/_security.php';


if (!isset($_REQUEST['action'])) {
    redirectTo('php/connexion.php');
}


// Check CSRF
preventCSRF();


if (!empty($_REQUEST)) {

    // if (!checkAccountInfo($_REQUEST)) {
    //     redirectTo('php/inscription.php');
    // }
    
    if (!checkAccountInfo($_REQUEST)) {
        redirectTo('php/inscription.php');
    }

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
            
        }
        else {
            addError('inscription_ko');
            redirectTo('php/inscription.php');
        }
    }
    redirectTo('php/connexion.php');
}
 


// redirectTo('index.php');
