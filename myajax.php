<?php
/*
$usuario = json_decode($_POST['enviado'], true);
var_dump($usuario);
$Op=json_decode($_POST['opcion'], true);
var_dump($Op);*/
require 'Crud.php';
require 'Conexion.php';
$respuesta="xxx";
	$mensaje="";
	$ContenidoHTML="";
    /*
if($_POST['accion']=="insertar"){
    $model = new Crud;
$model->insertInto='encuesta';
    $model->insertValues="'null','".$_POST['accion']."q"."','En diseño'";
    $model->Crear();
    $respuesta=$model->mensaje;
    //$variable=">>>>".$_POST['values'].$_POST['tabla'];
}*/
if($_POST['Op']=="insertar"){
    $model = new Crud;
    $model->insertInto=$_POST['tabla'];
    $model->insertValues=$_POST['values'];
    $model->Crear();
    $respuesta=$model->mensaje;
    $variable=">>>>".$_POST['values'].$_POST['tabla'];
}
$salidaJSON=array("respuesta" => $respuesta,"mensaje" => $mensaje,"contenido" => $ContenidoHTML);
echo json_encode($salidaJSON);
ECHO $respuesta;
?>