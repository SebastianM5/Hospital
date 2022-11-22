<?php 

$boton1 ="";
$boton2 ="";
$boton3 ="";
$boton4 ="";
$boton5 ="";
$boton6 ="";

if (isset($_POST['boton1']))$boton1=$_POST['boton1'];
if (isset($_POST['boton2']))$boton2=$_POST['boton2'];
if (isset($_POST['boton3']))$boton3=$_POST['boton3'];
if (isset($_POST['boton4']))$boton4=$_POST['boton4'];
if (isset($_POST['boton5']))$boton5=$_POST['boton5'];
if (isset($_POST['boton6']))$boton6=$_POST['boton6'];

if($boton1)
{
    header("location:paciente.php");

}

if($boton2)
{
    header("location:doctor.php");

}
if($boton3)
{
    header("location:departamento.php");

}
if($boton4)
{
    header("location:tratamiento.php");

}
if($boton5)
{
    header("location:medicamento.php");

}
if($boton6)
{
    header("location:alta.php");

}

