<!DOCTYPE html>
<html>
<head>
    <title> Medicamento </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/formularios.css">
</head>
<body>
    <form method="post">
        <h1> Ingrese datos del medicamento </h1>
        <input type="text" name="name" placeholder="Nombre del medicamento">
        <input type="text" name="fecha_fabricacion" placeholder="Fecha de fabricacion">
        <input type="text" name="fecha_vencimiento" placeholder="Fecha de vencimiento">
        <input type="text" name="tipo" placeholder="Tipo de medicamento">
        <input type="submit" name="register">
        <input type="submit" class="boton uno" name="boton1" value = "Volver atrás">
    </form>
    <?php 
    include("medicamento2.php");
    ?>
</body>
</html>
