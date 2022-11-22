<?php 
    
include("db.php");

$boton1 ="";
if (isset($_POST['boton1']))$boton1=$_POST['boton1'];
if($boton1)
{
    header("location:home.php");

}



if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['fecha_fabricacion']) >= 1 && strlen($_POST['fecha_vencimiento']) >= 1 && strlen($_POST['tipo']) >= 1) {
	    $name = trim($_POST['name']);
	    $fecha_fabricacion = trim($_POST['fecha_fabricacion']);
        $fecha_vencimiento = trim($_POST['fecha_vencimiento']);
        $tipo = trim($_POST['tipo']);
	    $consulta = "INSERT INTO medicamento2(nombre, fecha_fabricacion, fecha_vencimiento, tipo) VALUES ('$name','$fecha_fabricacion', '$fecha_vencimiento', '$tipo')";
	    $resultado = mysqli_query($conex6,$consulta);
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