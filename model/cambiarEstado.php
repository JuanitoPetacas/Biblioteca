<?php


require_once '../controller/conexion.php';

$mysql = new MiPDO();


$mysql->conectar();

 

    $id = $_POST['idAprendiz'];
   $estado = "Inactivo";

    $consulta = $mysql->ejecutarConsulta("UPDATE aprendiz SET estadoRegistro = ? WHERE idAprendiz = ?", [$estado, $id]);

    header("Location: ../view/Inventario/Inventario.php");

    $mysql->desconectar();

?>