-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-02-2015 a las 14:43:36
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
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE IF NOT EXISTS `carreras` (
  `id_curso` int(6) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `nombre_corto` varchar(5) NOT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id_curso`, `nombre`, `nombre_corto`) VALUES
(1, 'Sistemas', ''),
(2, 'Mecatrónica', ''),
(3, 'Industrial', ''),
(4, 'Mecánica', ''),
(5, 'Energías', ''),
(6, 'Negocios', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_encuesta`
--

CREATE TABLE IF NOT EXISTS `categoria_encuesta` (
  `idcategoria_en` int(4) NOT NULL,
  `categoria_en` varchar(50) NOT NULL,
  `acronimo` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`idcategoria_en`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Volcado de datos para la tabla `competencias`
--

INSERT INTO `competencias` (`id_competencia`, `competencia`, `cuatrimestre`, `especialidad`) VALUES
(25, 'Prueba 1', 'decimo', 'redes'),
(26, 'Prueba 2', 'cuarto', 'software'),
(27, 'Majo te AMO', 'cuarto', 'software');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dpa_ptc`
--

CREATE TABLE IF NOT EXISTS `dpa_ptc` (
  `id_dpa_ptc` int(11) NOT NULL AUTO_INCREMENT,
  `profesor` varchar(50) NOT NULL,
  `carrera` int(11) NOT NULL,
  `puesto` varchar(5) NOT NULL,
  `fecha_inicio` varchar(11) NOT NULL,
  `fecha_salida` varchar(11) NOT NULL,
  PRIMARY KEY (`id_dpa_ptc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `dpa_ptc`
--

INSERT INTO `dpa_ptc` (`id_dpa_ptc`, `profesor`, `carrera`, `puesto`, `fecha_inicio`, `fecha_salida`) VALUES
(4, 'Prueba 1 Sistemas', 1, 'DPA', '09/22/2014', '05/22/2015'),
(5, 'Prueba 1 Edit', 6, ' DPA ', '01/28/2016', '05/11/2017'),
(6, 'Prueba 1 Mecatrónica', 2, 'DPA', '02/17/2015', '03/07/2015'),
(7, 'Prueba 2 Mecatrónica', 2, 'PTC', '02/11/2015', '02/28/2015'),
(8, 'Prueba 1 Industrial', 3, 'DPA', '02/17/2015', '04/09/2015'),
(11, 'Prueba 1 Energías', 5, 'DPA', '01/28/2015', '04/09/2015'),
(16, 'Prueba foreach 2', 2, 'PTC', '02/13/2015', '03/02/2015');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE IF NOT EXISTS `encuesta` (
  `idencuesta` int(2) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Identificador',
  `nombre` varchar(100) NOT NULL COMMENT 'Nombre de la encuesta',
  `estatus` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Estatus de la encuesta',
  PRIMARY KEY (`idencuesta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Catalogo de encuestas de clima laboral' AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `encuesta`
--

INSERT INTO `encuesta` (`idencuesta`, `nombre`, `estatus`) VALUES
(8, 'Prueba 1 ', 1),
(9, 'Prueba 2', 0),
(10, 'Prueba 3', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcion_encuesta`
--

CREATE TABLE IF NOT EXISTS `opcion_encuesta` (
  `idopcion_en` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `id_pregunta_en` int(4) unsigned NOT NULL,
  `textoopcion` varchar(50) NOT NULL,
  `valor` double NOT NULL,
  PRIMARY KEY (`idopcion_en`),
  KEY `idpregunta_t` (`id_pregunta_en`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta_encuesta`
--

CREATE TABLE IF NOT EXISTS `pregunta_encuesta` (
  `id_pregunta_en` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` tinyint(1) unsigned NOT NULL,
  `textopregunta` text NOT NULL,
  `estatus` tinyint(1) unsigned NOT NULL,
  `id_categoria_en` int(4) NOT NULL,
  `orden` int(3) unsigned NOT NULL DEFAULT '0',
  `idencuesta` int(2) unsigned DEFAULT NULL COMMENT 'Campo para saber a que encuesta pertenecen las preguntas',
  PRIMARY KEY (`id_pregunta_en`),
  KEY `id_categoria_en` (`id_categoria_en`),
  KEY `encuesta_pregunta_encuesta` (`idencuesta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puesto_profesor`
--

CREATE TABLE IF NOT EXISTS `puesto_profesor` (
  `id_puesto` int(2) NOT NULL AUTO_INCREMENT,
  `puesto` varchar(3) NOT NULL,
  PRIMARY KEY (`id_puesto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `puesto_profesor`
--

INSERT INTO `puesto_profesor` (`id_puesto`, `puesto`) VALUES
(1, 'DPA'),
(2, 'PTC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta_encuesta`
--

CREATE TABLE IF NOT EXISTS `respuesta_encuesta` (
  `idrespuesta_en` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `id_pregunta_en` int(4) unsigned NOT NULL,
  `opcion_valor` double DEFAULT NULL,
  `opcion_texto` text,
  `idpersonas` int(7) unsigned NOT NULL,
  `idperiodo` varchar(4) NOT NULL,
  PRIMARY KEY (`idrespuesta_en`),
  KEY `id_pregunta_en` (`id_pregunta_en`),
  KEY `idperiodo` (`idperiodo`),
  KEY `idpersonas` (`idpersonas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
