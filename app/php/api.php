<?php
// session_start();

// include '../includes/_config.php';
// include '../includes/_function.php';
// include '../includes/_database.php';

// header('Content-type:application/json');

// $inputData = json_decode(file_get_contents('php://input'), true);
// preventCSRFAPI($inputData);
// preventCSRFAPI($inputData);
// stripTagsArray($inputData);

// if ($inputData['action'] === 'create' && $_SERVER['REQUEST_METHOD'] === 'POST') {

//     if (checkAccountInfo($inputData)) triggerError('error_check');

//     $insert = $dbVHS->prepare("INSERT INTO `account`(`name`, `first_name`, `pseudo`, `date_birth`, `email`, `password`)
//         VALUES (:name, :first_name, :pseudo, :date_birth, :email, :password);");

//     $inputData['name'] = htmlspecialchars($inputData['name']);
//     $inputData['lastName'] = htmlspecialchars($inputData['lastName']);
//     $inputData['pseudo'] = htmlspecialchars($inputData['pseudo']);
//     $inputData['birthday'] = date('Y-m-d',strtotime( $inputData['birthday']));
//     $inputData['email'] = htmlspecialchars($inputData['email']);
//     $inputData['pwd'] = password_hash($inputData['pwd'], PASSWORD_BCRYPT);


//     $isInsertOk = $insert->execute([
//         'name' => $inputData['name'],
//         'first_name' => $inputData['lastName'],
//         'pseudo' => $inputData['pseudo'],
//         'date_birth' => $inputData['birthday'],
//         'email' => $inputData['email'],
//         'password' => $inputData['pwd'],
//     ]);

//     if (!$isInsertOk) triggerError('insert_account_ko');

//     echo json_encode([
//         'isOk' => $isInsertOk,
//         'message' => 'Nouveau compte enregistré',
//         'name' => $inputData['name'],
//         'lastName' => $inputData['lastName'],
//         'pseudo' => $inputData['pseudo'],
//         'birthday' => $inputData['birthday'],
//         'email' => $inputData['email'],
//         'password' => $inputData['pwd'],
//     ]);
// }