<?php

$nombre = $_POST['nombre'];
$id = $_POST['id'];

if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {

    require_once '../model/data.php';

    $mysql = new MySql();
    $mysql->conectar();

    $consultar = "INSERT INTO bibliotecasena.funcion VALUES (?,?)";
    $parametros = [null, $nombre];
    $mysql->ejecutarConsulta($consultar, $parametros);

    $mysql->desconectar();

    header("Location: ../view/Funcion/funcion.php?Hecho=true&Mensaje=Funcion Agregada");
} else {

    header("Location: ../view/Funcion/funcion.php?Error=true&Mensaje=Verifique sus datos");
}

if (isset($_POST['id']) && !empty($_POST['id'])) {

    require_once '../model/data.php';

    $mysql = new MySql();
    $mysql->conectar();

    $consultar = "DELETE FROM bibliotecasena.funcion WHERE idFuncion = ?";
    $parametros = [$id];
    $mysql->ejecutarConsulta($consultar, $parametros);

    $mysql->desconectar();

    //header("Location: ../view/Funcion/funcion.php?Hecho=true&Mensaje=Funcion Eliminada");

}