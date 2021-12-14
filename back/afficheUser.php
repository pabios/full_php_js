<?php

header('Content-type: application/json');
require './config.php';

$users = $pdo->query('SELECT * FROM users ');
$user = $users->fetchAll();

    $response = array();
    $i = 0;
     foreach($user as $u){
        $response[$i] = array(
            'id' => $u['id'],
            'nom'=> $u['nom'],
        );
        $i++;
     }
    
echo json_encode($response); 
?>