<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica</title>
</head>
<?php
    include('conexion.php');
?>
<body>
    <h1>
        Hola mundo @servidor
    </h1>
    <ul>
        <li>
            <a href="index.php">Inicio</a>
        </li>
        <li>
            <a href="formulario.php">Formulario</a>
        </li>
    </ul>

    <?php  
        $sql = "SELECT * FROM Nombres";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        foreach($stmt ->fetchAll() as $row)
        {
            echo "<li>" . $row['Nombre'] . " " . $row['Apellido'] . " " . $row['Etiqueta'] . "</li>"; 
        }

    ?>
</body>
</html>