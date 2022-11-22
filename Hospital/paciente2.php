<?php 
    
include("db.php");

$boton1 ="";
if (isset($_POST['boton1']))$boton1=$_POST['boton1'];
if($boton1)
{
    header("location:home.php");

}



if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['sexo']) >= 1 && strlen($_POST['cuil']) >= 1) {
	    $name = trim($_POST['name']);
	    $direccion = trim($_POST['direccion']);
        $sexo = trim($_POST['sexo']);
	    $cuil = trim($_POST['cuil']);
	    $consulta = "INSERT INTO paciente2(nombre, direccion, sexo, cuil) VALUES ('$name','$direccion', '$sexo','$cuil')";
	    $resultado = mysqli_query($conex2,$consulta);
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