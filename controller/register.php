<?php

require_once '../model/data.php';


$tipoDoc  = $_POST['tipoDoc'];
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$ficha = $_POST['ficha'];
$funcion = $_POST['funcion'];
$programa = $_POST['programa'];

if (
    isset($_POST['tipoDoc']) && !empty($_POST['tipoDoc']) && isset($_POST['id']) && !empty($_POST['id'])
    && isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['apellido']) && !empty($_POST['apellido'])
    && isset($_POST['ficha']) && !empty($_POST['ficha']) && isset($_POST['funcion']) && !empty($_POST['funcion'])
) {


    require_once '../model/data.php';
    
    $mysql = new MySql();

    $mysql->conectar();

    $consulta = "INSERT INTO bibliotecasena.funcion VALUES (?,?)";
    $parametros = [null,$funcion];
    $mysql->ejecutarConsulta($consulta, $parametros);

    $consultaIdFuncion = "SELECT bibliotecasena.funcion.idFuncion from bibliotecasena.funcion WHERE bibliotecasena.funcion.descripcion = ?" ;
    $parametrosidFuncion = [$funcion];
    $mysql->ejecutarConsulta($consultaIdFuncion, $parametrosidFuncion);

    $resultado = $mysql->obtenerResultadoConsulta();

    $idFuncion = $resultado['idFuncion'];

    echo  $funcion, $idFuncion,"      ", $id ,   "          ";

    $consultaAprendiz = "INSERT INTO bibliotecasena.aprendiz VALUES (?,?,?,?,?,?,?)";
    $parametrosAprendiz = [$id,$tipoDoc,$id,$nombre,$apellido,$ficha,$programa];
    $mysql->ejecutarConsulta($consultaAprendiz,$parametrosAprendiz);

    $consultaDetalle = "INSERT INTO bibliotecasena.detallefuncion VALUES (?,?,?,?)" ;
    $fechaHoy = date('Y-m-d H:i:s');
    $parametrosDetalle = [null,$id,$idFuncion,$fechaHoy];
    $mysql->ejecutarConsulta($consultaDetalle, $parametrosDetalle);


    header("Location: ../view/Registro/registro.php?Hecho=true&Mensaje=Aprendiz Registrado");





}
else{

    header("Location: ../login.php?Error=true&Mensaje=Verifique sus datos");
    // sweetalert campos incompletos
}



?>