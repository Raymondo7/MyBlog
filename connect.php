<?php 
    $dns = "mysql:host=localhost;dbname=myblog";
    $user = "root";
    $pass = "";

    try {
        $pdo = new PDO($dns,$user,$pass);
    } catch (Exception $e) {
        echo "Erreur ".$e->getMessage();
    }