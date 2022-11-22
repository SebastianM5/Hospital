<?php 
    
include("db.php");

$boton1 ="";
if (isset($_POST['boton1']))$boton1=$_POST['boton1'];
if($boton1)
{
    header("location:home.php");

}



if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['tratamiento']) >= 1 && strlen($_POST['cama']) >= 1) {
	    $name = trim($_POST['name']);
	    $tratamientos = trim($_POST['tratamiento']);
        $camaocupada = trim($_POST['cama']);
	    $fecharegistro = date("d/m/y");
	    $consulta = "INSERT INTO alta2(nombre, tratamientos, cama_ocupada, fecha_registro) VALUES ('$name','$tratamientos', '$camaocupada','$fecharegistro')";
	    $resultado = mysqli_query($conex7,$consulta);
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