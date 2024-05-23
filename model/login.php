<?php
session_start();
require_once '../controller/conexion.php';

$mysql = new MiPDO();


$mysql->conectar();
try {
 

    $id = $_POST['cedulaUsuario'];
    $password = $_POST['passUsuario'];

    $consulta = $mysql->ejecutarConsulta("SELECT * FROM usuario WHERE idUsuario = ?", [$id]);

  
    $fila = $consulta->fetch();

    if ($fila) {
        if ($password == $fila['passUsuario']) {
            $_SESSION['cedulaUsuario'] = $fila['idUsuario'];
            $_SESSION['nombreUsuario'] = $fila['nombreUsuario'];
            $_SESSION['apellidoUsuario'] = $fila['apellidoUsuario'];
            $_SESSION['password'] = $fila['passUsuario']; // Cambio a 'passUsuario'
            $_SESSION['rol'] = $fila['rolUsuario'];
            $_SESSION['login'] = true;
            header("Location: ../view/Registro/registro.php");
            exit;
        } else {
            $_SESSION['message'] = 'Contraseña incorrecta';
            header("Location: ../index.php");
            exit;
        }
    } else {
        $_SESSION['message'] = 'Cédula de usuario no existe';
       echo $id;
        exit;
    }
} catch (PDOException $e) {
    session_destroy();
    session_start();
    $_SESSION['message'] = 'Algo inesperado ocurrió... Contacta con un administrador.';
    echo $e;
    exit;
}

$mysql->desconectar();
?>
