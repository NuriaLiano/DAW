-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-01-2022 a las 22:03:04
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `telefonos_examen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonos`
--

CREATE TABLE `telefonos` (
  `id` int(11) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `memoria` int(11) NOT NULL,
  `precio` float(10,2) NOT NULL,
  `fecha_adquisicion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `telefonos`
--

INSERT INTO `telefonos` (`id`, `modelo`, `marca`, `memoria`, `precio`, `fecha_adquisicion`) VALUES
(1, 'Galaxy A52s', 'samsung', 6, 200.00, '2022-01-22'),
(2, 'Iphone 13', 'apple', 8, 300.00, '2021-12-02'),
(3, 'Galaxy A22', 'samsung', 4, 300.00, '2021-12-22'),
(4, 'Galaxy A22', 'samsung', 4, 250.00, '2021-12-24'),
(5, 'Galaxy S21', 'samsung', 12, 235.00, '2021-12-25'),
(6, 'iPhone 13 Pro', 'apple', 4, 900.00, '2022-01-03'),
(7, 'Redmi Note 10S', 'xiaomi', 6, 433.00, '2022-01-04'),
(8, 'Redmi Note 10S', 'huawei', 6, 199.00, '2022-01-12'),
(9, 'Find X3 Lite ', 'oppo', 8, 321.00, '2022-01-25'),
(10, 'V10 H960', 'lg', 6, 200.00, '2022-01-23'),
(11, 'Xperia 1 III', 'sony', 12, 320.00, '2022-01-27'),
(12, 'Alcatel 1B 502H', 'alcatel', 12, 367.00, '2022-02-17'),
(13, 'Realme GT Master', 'realme', 6, 325.00, '2022-02-25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `telefonos`
--
ALTER TABLE `telefonos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `telefonos`
--
ALTER TABLE `telefonos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
