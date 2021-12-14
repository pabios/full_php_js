<?php
    require './config.php';
     
    // var_dump ($_POST);

    //echo $_POST['nom'].' est le nom ';
    
    if(isset($_POST) && $_POST['mdp'] === 'bonjour'){
        $insert = $pdo->prepare("insert into users(nom) VALUES(:nom)");
        $insert->bindParam(':nom',$_POST['nom']);
        $insert->execute();
    }
    

   
