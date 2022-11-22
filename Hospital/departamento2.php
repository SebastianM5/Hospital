<?php 
    
include("db.php");

$boton1 ="";
if (isset($_POST['boton1']))$boton1=$_POST['boton1'];
if($boton1)
{
    header("location:home.php");

}



if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['ubicacion']) >= 1 && strlen($_POST['medico']) >= 1 && strlen($_POST['camasdisponibles']) >= 1 && strlen($_POST['camasocupadas']) >= 1) {
	    $name = trim($_POST['name']);
	    $ubicacion = trim($_POST['ubicacion']);
        $medico = trim($_POST['medico']);
        $camasdisponibles = trim($_POST['camasdisponibles']);
        $camasocupadas = trim($_POST['camasocupadas']);
	    $consulta = "INSERT INTO departamento2(nombre, ubicacion, medico, camas_disponibles, camas_ocupadas) VALUES ('$name','$ubicacion', '$medico', '$camasdisponibles', '$camasocupadas')";
	    $resultado = mysqli_query($conex4,$consulta);
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