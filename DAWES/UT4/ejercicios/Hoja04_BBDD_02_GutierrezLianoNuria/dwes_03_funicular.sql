-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2018 a las 10:48:30
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dwes_03_funicular`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasajeros`
--

CREATE TABLE `pasajeros` (
  `dni` varchar(12) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `numero_plaza` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plazas`
--

CREATE TABLE `plazas` (
  `numero` int(11) NOT NULL,
  `reservada` tinyint(1) NOT NULL,
  `precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `plazas`
--

INSERT INTO `plazas` (`numero`, `reservada`, `precio`) VALUES
(11, 0, 17.5),
(12, 0, 17.5),
(13, 0, 14.75),
(14, 0, 14.75),
(21, 0, 14.75),
(22, 0, 14.75),
(23, 0, 14.75),
(24, 0, 14.75),
(31, 0, 18),
(32, 0, 40);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pasajeros`
--
ALTER TABLE `pasajeros`
  ADD PRIMARY KEY (`dni`);

--
-- Indices de la tabla `plazas`
--
ALTER TABLE `plazas`
  ADD PRIMARY KEY (`numero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
