<?php
    include('conexion.php');

    if(count($_POST)>0){

        $Nombre = $_POST['Nombre'];
        $Apellido = $_POST['Apellido'];
        $Etiqueta = $_POST['Etiqueta'];

        $sql = "INSERT INTO Nombres (Nombre, Apellido, Etiqueta) VALUES('$Nombre', '$Apellido', '$Etiqueta')";
        $conn ->exec($sql);

        header('location: index.php');
    }
?>