-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2019 a las 19:31:52
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
-- Base de datos: `dwes_05_mapa`
--
CREATE DATABASE IF NOT EXISTS `dwes_05_mapa` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci;
USE `dwes_05_mapa`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localizaciones`
--

CREATE TABLE `localizaciones` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `latitud` float NOT NULL,
  `longitud` float NOT NULL,
  `tipo` varchar(20) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `localizaciones`
--

INSERT INTO `localizaciones` (`id`, `nombre`, `direccion`, `latitud`, `longitud`, `tipo`) VALUES
(1, 'IES Miguel Herrero Pereda', 'Paseo de Julio Hauzeur 59, Torrelavega', 43.3524, -4.06245, 'instituto'),
(2, 'IES Marqués de Santillana', 'Av. España 2, Torrelavega', 43.348, -4.05071, 'instituto'),
(3, 'IES Besaya', 'Av. Oviedo 2, Torrelavega', 43.3538, -4.06426, 'instituto'),
(4, 'IES Zapatón', 'Av. de la Constitución 7, Torrelavega', 43.345, -4.04909, 'instituto'),
(5, 'CEIP José Luis Hidalgo', 'Calle Arcadio González, Torrelavega', 43.34, -4.05302, 'colegio'),
(6, 'CEIP Menéndez Pelayo', 'Av. de Joaquín Fernández Vallejo 4, Torrelavega', 43.346, -4.04688, 'colegio');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `localizaciones`
--
ALTER TABLE `localizaciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `localizaciones`
--
ALTER TABLE `localizaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
