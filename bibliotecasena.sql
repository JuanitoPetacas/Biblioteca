-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-05-2024 a las 18:14:27
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bibliotecasena`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendiz`
--

CREATE TABLE `aprendiz` (
  `idAprendiz` bigint(20) NOT NULL,
  `tipoDocumento` varchar(200) DEFAULT NULL,
  `nombreAprendiz` varchar(200) DEFAULT NULL,
  `apellidoAprendiz` varchar(200) DEFAULT NULL,
  `fichaAprendiz` bigint(20) DEFAULT NULL,
  `programaAprendiz` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallefuncion`
--

CREATE TABLE `detallefuncion` (
  `idDetalle` bigint(20) NOT NULL AUTO_INCREMENT,
  `idAprendiz` bigint(20) DEFAULT NULL,
  `idFuncion` bigint(20) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcion`
--

CREATE TABLE `funcion` (
  `idFuncion` bigint(20) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `idLibro` bigint(20) NOT NULL,
  `nombreLibro` varchar(1000) DEFAULT NULL,
  `autor` varchar(500) DEFAULT NULL,
  `lugarEdicion` varchar(200) DEFAULT NULL,
  `editorial` varchar(500) DEFAULT NULL,
  `yearEdition` date DEFAULT NULL,
  `numeroPaginas` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` bigint(20) NOT NULL,
  `cedulaUsuario` bigint(20) DEFAULT NULL,
  `correoUsuario` varchar(255) DEFAULT NULL,
  `nombreUsuario` varchar(200) DEFAULT NULL,
  `apellidoUsuario` varchar(200) DEFAULT NULL,
  `passUsuario` varchar(10000) DEFAULT NULL,
  `rolUsuario` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD PRIMARY KEY (`idAprendiz`);

--
-- Indices de la tabla `detallefuncion`
--
ALTER TABLE `detallefuncion`
  ADD PRIMARY KEY (`idDetalle`),
  ADD KEY `fk_idAprendiz` (`idAprendiz`),
  ADD KEY `fk_idFuncion` (`idFuncion`);

--
-- Indices de la tabla `funcion`
--
ALTER TABLE `funcion`
  ADD PRIMARY KEY (`idFuncion`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`idLibro`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallefuncion`
--
ALTER TABLE `detallefuncion`
  ADD CONSTRAINT `fk_idAprendiz` FOREIGN KEY (`idAprendiz`) REFERENCES `aprendiz` (`idAprendiz`),
  ADD CONSTRAINT `fk_idFuncion` FOREIGN KEY (`idFuncion`) REFERENCES `funcion` (`idFuncion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
