<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "Practica-PHP";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo"Conected succesfully";
}catch(PDOException $e){
    echo "Conection failed" . $e->getMessage();
}

?>