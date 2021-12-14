<?php

try{
    $pdo = new PDO('mysql:host=localhost;dbname=mvc','root','pass');
    echo 'connection succed';
}catch(Exception $e){
    echo 'impossible de se connecter a la base de donner'.$e->getMessage();
}