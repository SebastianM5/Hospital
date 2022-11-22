<!DOCTYPE html>
<html>
<head>
    <title> Tratamiento </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/formularios.css">
</head>
<body>
    <form method="post">
        <h1> Tratamiento </h1>
        <input type="text" name="name" placeholder="Nombre del tratamiento">
        <input type="text" name="duracion" placeholder="Duracion del tratamiento">
        <input type="text" name="reacciones" placeholder="Reacciones del paciente">
        <input type="text" name="medicamentos" placeholder="Medicamentos suministrados">
        <input type="submit" name="register">
        <input type="submit" class="boton uno" name="boton1" value = "Volver atrás">
    </form>
    <?php 
    include("tratamiento2.php");
    ?>
</body>
</html>

