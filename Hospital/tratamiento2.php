<?php 
    
include("db.php");

$boton1 ="";
if (isset($_POST['boton1']))$boton1=$_POST['boton1'];
if($boton1)
{
    header("location:home.php");

}



if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['duracion']) >= 1 && strlen($_POST['reacciones']) >= 1 && strlen($_POST['medicamentos']) >= 1) {
	    $name = trim($_POST['name']);
	    $duracion = trim($_POST['duracion']);
        $reacciones = trim($_POST['reacciones']);
        $medicamentos = trim($_POST['medicamentos']);
	    $consulta = "INSERT INTO tratamiento2(nombre, duracion, reacciones, medicamentos) VALUES ('$name','$duracion', '$reacciones', '$medicamentos')";
	    $resultado = mysqli_query($conex5,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Los datos se ingresaron correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}



?>