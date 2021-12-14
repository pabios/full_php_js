<?php
header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');

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
    
     $response2 = array();
     $response2[0] = array(
         'id' => '1',
         'value1'=> 'value1',
         'value2'=> 'value2'
     );

echo json_encode($response); 
?>