-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-03-2015 a las 19:09:18
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `Estudiantes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE IF NOT EXISTS `calificaciones` (
  `IdCalificacion` int(4) NOT NULL,
  `Matricula` int(8) NOT NULL,
  `Cparc1` int(3) NOT NULL,
  `Cparc2` int(3) NOT NULL,
  `Cparc3` int(3) NOT NULL,
  `Cparc4` int(3) NOT NULL,
  `Promedio` int(3) NOT NULL,
  PRIMARY KEY (`IdCalificacion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcar la base de datos para la tabla `calificaciones`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE IF NOT EXISTS `estudiante` (
  `Matricula` int(8) NOT NULL,
  `NombreAl` varchar(40) COLLATE latin1_spanish_ci NOT NULL,
  `ApPat` varchar(40) COLLATE latin1_spanish_ci NOT NULL,
  `ApMat` varchar(40) COLLATE latin1_spanish_ci NOT NULL,
  `Email` varchar(40) COLLATE latin1_spanish_ci NOT NULL,
  `Telefono` int(40) NOT NULL,
  `Dir` varchar(40) COLLATE latin1_spanish_ci NOT NULL,
  UNIQUE KEY `Matricula` (`Matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcar la base de datos para la tabla `estudiante`
--

