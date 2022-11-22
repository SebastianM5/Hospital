<?php 
    
include("db.php");

$boton1 ="";
if (isset($_POST['boton1']))$boton1=$_POST['boton1'];
if($boton1)
{
    header("location:home.php");

}



if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['matricula']) >= 1 && strlen($_POST['departamento']) >= 1) {
	    $name = trim($_POST['name']);
	    $matricula = trim($_POST['matricula']);
        $departamento = trim($_POST['departamento']);
	    $consulta = "INSERT INTO doctor2(nombre, matricula, departamento) VALUES ('$name','$matricula', '$departamento')";
	    $resultado = mysqli_query($conex3,$consulta);
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