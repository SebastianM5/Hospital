<!DOCTYPE html>
<html>
<head>
    <title> Doctor </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/formularios.css">
</head>
<body>
    <form method="post">
        <h1> Ingrese datos del doctor </h1>
        <input type="text" name="name" placeholder="Nombre completo">
        <input type="text" name="matricula" placeholder="Numero de matricula">
        <input type="text" name="departamento" placeholder="Nombre del departamento">
        <input type="submit" name="register">
        <input type="submit" class="boton uno" name="boton1" value = "Volver atrás">
    </form>
    <?php 
    include("doctor2.php");
    ?>
</body>
</html>