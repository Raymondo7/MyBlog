<?php 
    $dns = "mysql:host=localhost;dbname=myblog";
    $user = "root";
    $pass = "";

    try {
        $pdo = new PDO($dns,$user,$pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch (PDOException $e) {
        echo "Erreur ".$e->getMessage();
    }