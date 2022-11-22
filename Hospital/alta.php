<!DOCTYPE html>
<html>
<head>
    <title> Alta usuario </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/formularios.css">
</head>
<body>
    <form method="post">
        <h1> Ingrese datos de admisión </h1>
        <input type="text" name="name" placeholder="Nombre completo">
        <input type="text" name="tratamiento" placeholder="Tratamientos administrados">
        <input type="text" name="cama" placeholder="Numero de cama ocupada">
        <input type="submit" name="register">
        <input type="submit" class="boton uno" name="boton1" value = "Volver atrás">
    </form>
    <?php 
    include("alta2.php");
    ?>
</body>
</html>