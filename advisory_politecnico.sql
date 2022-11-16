-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 29-10-2019 a las 18:05:10
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `advisory_politecnico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_de_dudas`
--

DROP TABLE IF EXISTS `registro_de_dudas`;
CREATE TABLE IF NOT EXISTS `registro_de_dudas` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `correo_electronico` varchar(255) NOT NULL,
  `carrera` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_de_dudas`
--

INSERT INTO `registro_de_dudas` (`id`, `nombre`, `apellido`, `correo_electronico`, `carrera`) VALUES
(7, 'pedro', 'lopez', 'asnk@sdvj', 'TPMI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_de_usuarios`
--

DROP TABLE IF EXISTS `registro_de_usuarios`;
CREATE TABLE IF NOT EXISTS `registro_de_usuarios` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo_electronico` varchar(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_de_usuarios`
--

INSERT INTO `registro_de_usuarios` (`id`, `usuario`, `contrasena`, `nombre`, `correo_electronico`) VALUES
(1, 'dani', '1234', 'eldany', 'dani@xs.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
