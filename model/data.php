<?php
class MySql
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
        try {
            $stmt = $this->conexion->prepare($consulta);
            $stmt->execute($parametros);
            $this->resultadoConsulta = $stmt->fetchAll();
            return $this->resultadoConsulta;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }




    public function obtenerResultadoConsulta()
    {
        return $this->resultadoConsulta;
    }
}

class Conexion
{
    private $host = "localhost";
    private $dbname = "bibliotecasena";
    private $usuario = "root";
    private $contrasena = "";
    private $conexion;

    public function conectar()
    {
        try {
            $this->conexion = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->usuario, $this->contrasena);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conexion;
        } catch (PDOException $e) {
            die("Error de conexión: " . $e->getMessage());
        }
    }
}
