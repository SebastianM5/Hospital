<!DOCTYPE html>
<html>
<head>
    <title> Departamento </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/formularios.css">
</head>
<body>
    <form method="post">
        <h1> Ingrese datos del departamento </h1>
        <input type="text" name="name" placeholder="Nombre del departamento">
        <input type="text" name="ubicacion" placeholder="Ubicacion">
        <input type="text" name="medico" placeholder="Nombre del medico encargado">
        <input type="text" name="camasdisponibles" placeholder="Camas disponibles">
        <input type="text" name="camasocupadas" placeholder="Camas ocupadas">
        <input type="submit" name="register">
        <input type="submit" class="boton uno" name="boton1" value = "Volver atrás">
    </form>
    <?php 
    include("departamento2.php");
    ?>
</body>
</html>