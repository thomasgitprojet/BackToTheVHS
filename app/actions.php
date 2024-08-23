<?php
session_start();
require_once 'includes/_config.php';
require_once 'includes/_function.php';
require_once 'includes/_database.php';


preventCSRF();

if (!empty($_REQUEST)) {


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
    } elseif ($_REQUEST['action'] === 'connexion-account' && $_SERVER['REQUEST_METHOD'] === 'POST') {
        if (!checkConnexionInfo($_REQUEST)) {
            redirectTo('php/connexion.php');
        } else {
            connectedMyAccount($dbVHS);
        }
    } elseif ($_REQUEST['action'] === 'deconnexion' && $_SERVER['REQUEST_METHOD'] === 'POST') {
        // var_dump('ok1');
        // exit;
        session_destroy();
        redirectTo('index.php');
    } elseif ($_REQUEST['action'] === 'create-product' && $_SERVER['REQUEST_METHOD'] === 'POST' && checkProductInfo($_REQUEST)) {

        $insert = $dbVHS->prepare("INSERT INTO `product`(`name`, `image`, `description_product`, `price_product`, `id_account`)
        VALUES (:name, :image, :description, :price, :id_account);");

        $isInsertOk = $insert->execute([

            'name' => htmlspecialchars($_REQUEST['name']),
            'image' => htmlspecialchars($_REQUEST['image']),
            'description' => htmlspecialchars($_REQUEST['description']),
            'price' => $_REQUEST['price'],
            'id_account' => $_SESSION['id_account']
        ]);

        if ($isInsertOk) {
            addMessage('add_product_ok');
            redirectTo('php/account.php');
        } else {
            addError('add_product_ko');
            redirectTo('php/sellProduct.php');
            unset($_SESSION['errorsList']);
        }
    }
}
