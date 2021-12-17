<?php
require './config.php';
header('Content-type: application/json');

$users = $pdo->query('SELECT * FROM users');
$user = $users->fetchAll();

    $response = array();
    $i = 0;
     foreach($user as $u){
        $response[$i] = array(
            'id' => $u['id'],
            'nom'=> $u['nom'],
            'ville'=> $u['ville'],
        );
        $i++;
     }    
    //var_dump($response);
    echo json_encode($response);  
?>