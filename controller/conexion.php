<?php


class MiPDO
{
    private $conexion;
    public $resultadoConsulta;

    public function conectar()
    {
        // Conexión a la base de datos utilizando PDO
        $dsn = "mysql:host=localhost;dbname=bibliotecasena;charset=utf8mb4";
        $usuario = "root";
        $contrasena = "";
        $opciones = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        try {
            $this->conexion = new PDO($dsn, $usuario, $contrasena, $opciones);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function desconectar()
    {
        $this->conexion = null;
    }

    public function ejecutarConsulta($consulta, $parametros = [])
    {
        // Preparar y ejecutar la consulta
        $stmt = $this->conexion->prepare($consulta);
        $stmt->execute($parametros);
        return $stmt;
    }

    public function obtenerResultadoConsulta()
    {
        return $this->resultadoConsulta;
    }
}

?>