<!DOCTYPE html>
<html>
<head>
    <title> Paciente </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/formularios.css">
</head>
<body>
    <form method="post">
        <h1> Ingrese datos del paciente </h1>
        <input type="text" name="name" placeholder="Nombre completo">
        <input type="text" name="direccion" placeholder="Direccion del domicilio">
        <input type="text" name="sexo" placeholder="Sexo">
        <input type="text" name="cuil" placeholder="Cuil">
        <input type="submit" name="register">
        <input type="submit" class="boton uno" name="boton1" value = "Volver atrás">
    </form>
    <?php 
    include("paciente2.php");
    ?>
</body>
</html>






