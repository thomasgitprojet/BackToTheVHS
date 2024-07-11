<?php
session_start();

// include 'includes/_config.php';
// include 'functions.php';
include 'includes/_database.php';

header('Content-type:application/json');

$inputData = json_decode(file_get_contents('php://input'), true);
// preventCSRFAPI($inputData);

if ($inputData['action'] === 'create' && $_SERVER['REQUEST_METHOD'] === 'POST') {
    // if (!checkProductInfo($inputData)) triggerError('insert_ko');

    $insert = $dbVHS->prepare("INSERT INTO `account`(`name`, `first_name`, `pseudo`, `date_birth`, `email`, `password`)
        VALUES (:name, :first_name, :pseudo, :date_birth, :email, :password);");

    $inputData['name'] = htmlspecialchars($inputData['name']);
    $inputData['first_name'] = htmlspecialchars($inputData['first_name']);

    $isInsertOk = $insert->execute([
        'name' => $inputData['name'],
        'first_name' => $inputData['first_name'],
        'pseudo' => $inputData['first_name'],
        'date_birth' => $inputData['date_birth'],
        'email' => $inputData['email'],
        'password' => $inputData['password'],
    ]);

    // if (!$isInsertOk) triggerError('insert_ko');

    echo json_encode([
        'isOk' => true,
        'message' => 'ok',
        // 'id' => $dbCo->lastInsertId(),
        'name' => $inputData['name'],
        'first_name' => $inputData['first_name']
    ]);
}