<?php
session_start();
require_once '../controller/conexion.php';

$mysql = new MiPDO();


$mysql->conectar();
try {
    if (isset($_SESSION['cedulaUsuario']) && isset($_SESSION['password']) && isset($_SESSION['login'])) {
        $id = $_SESSION['cedulaUsuario'];
        $consulta = $mysql->ejecutarConsulta("SELECT COUNT(*),estado FROM usuario WHERE cedulaUsuario = ?", [$id]);
        $fila = $consulta->fetch();

        if ($fila["estado"] != "Activo") {
            $_SESSION['message'] = "Su estado actual es inactivo";
              echo "xd";
            exit;
        } else {
           
        }
    }

    $id = $_POST['cedulaUsuario'];
    $password = $_POST['passUsuario'];

    $consulta = $mysql->ejecutarConsulta("SELECT * FROM usuario WHERE cedulaUsuario = ?", [$id]);

  
    $fila = $consulta->fetch();

    if ($fila) {
        if ($password == $fila['passUsuario']) {
            $_SESSION['cedulaUsuario'] = $fila['cedulaUsuario'];
            $_SESSION['nombreUsuario'] = $fila['nombreUsuario'];
            $_SESSION['apellidoUsuario'] = $fila['apellidoUsuario'];
            $_SESSION['password'] = $fila['passUsuario']; // Cambio a 'passUsuario'
            $_SESSION['rol'] = $fila['rolUsuario'];
            $_SESSION['login'] = true;
            header("Location: ../view/Registro/registro.HTML");
            exit;
        } else {
            $_SESSION['message'] = 'Contraseña incorrecta';
            header("Location: ../index.php");
            exit;
        }
    } else {
        $_SESSION['message'] = 'Cédula de usuario no existe';
        header("Location: ../index.php");
        exit;
    }
} catch (PDOException $e) {
    session_destroy();
    session_start();
    $_SESSION['message'] = 'Algo inesperado ocurrió... Contacta con un administrador.';
    header("Location: ../index.php");
    exit;
}

$mysql->desconectar();
?>
