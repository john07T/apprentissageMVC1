<?php
    $host="localhost";
    $bdname="reservation_taxi";
    $username="root";
    $password="";
    try{ 
        $pdo= new PDO('sql:host=$host;dbname=$bdname;charset=utf-8',$username,$password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE::EXECEPTION);
    }
    catch(PDOException $e){
        die ("ERREUR".$e->getmessage());

    }
?> 