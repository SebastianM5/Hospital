<!DOCTYPE html>
<html lang="en">
<head>
    <title> Registrar usuario </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
</head>
<body>
<form method="post">
    <div class="contenedor">
		<h1>Menu principal</h1>

		<div class="contenedor-botones">
			<input type="submit" class="boton uno" name="boton1" value = "Pacientes">
			<input type="submit" class="boton dos" name="boton2" value = "Doctores">
			<input type="submit" class="boton tres" name="boton3" value = "Departamentos">
			<input type="submit" class="boton seis" name="boton4" value = "Tratamientos">
			<input type="submit" class="boton cinco"name="boton5" value = "Medicamentos">
			<input type="submit" class="boton seis"name="boton6" value = "Altas">
		</div>
	</div>
<form method="post">
    <?php 
    include("botones.php");
    ?>
</body>
</html>