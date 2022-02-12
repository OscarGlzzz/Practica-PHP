<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
    include('conexion.php');
    ?>

    <h1>Formulario</h1>
    <ul>
        <li>
            <a href="index.php">Inicio</a>
        </li>
        <li>
            <a href="formulario.php">Formulario</a>
        </li>
    </ul>
    <form action="store.php" method="POST">
        <label for="Nombre">Nombre: </label>
        <input type="text" name="Nombre">
        <br>
        <label for="Apellido">Apellido: </label>
        <input type="text" name="Apellido">
        <br>
        <select name="Etiqueta">
            <option value="Mexico">México</option>
            <option value="EUA">Estados Unidos</option>
            <option value="Argentina">Argentina</option>
        </select>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>