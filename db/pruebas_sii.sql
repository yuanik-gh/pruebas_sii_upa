-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 30-01-2015 a las 17:41:41
-- Versión del servidor: 5.5.40-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pruebas_sii`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competencias`
--

CREATE TABLE IF NOT EXISTS `competencias` (
  `id_competencia` int(10) NOT NULL AUTO_INCREMENT,
  `competencia` text NOT NULL,
  `cuatrimestre` varchar(10) NOT NULL,
  `especialidad` varchar(10) NOT NULL,
  PRIMARY KEY (`id_competencia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `competencias`
--

INSERT INTO `competencias` (`id_competencia`, `competencia`, `cuatrimestre`, `especialidad`) VALUES
(1, 'asdfg', 'primero', 'redes'),
(2, 'YEAAAAH!!123', 'sexto', 'software'),
(3, 'Esto es una prueba...', 'octavo', 'redes'),
(11, 'zzz', 'septimo', 'software'),
(12, 'LOL', 'noveno', 'software'),
(14, 'HOLA MUNDO', 'septimo', 'redes'),
(16, 'TE ODIO ISAAC!!!!', 'quinto', 'redes'),
(18, 'a', 'primero', 'redes'),
(19, 'b', 'septimo', 'software'),
(20, 'Guau', 'decimo', 'redes'),
(21, 'trolololo', 'cuarto', 'software');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
