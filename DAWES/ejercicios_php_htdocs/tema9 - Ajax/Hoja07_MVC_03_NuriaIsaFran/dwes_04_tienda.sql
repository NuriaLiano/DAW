-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-01-2022 a las 15:57:46
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
-- Base de datos: `dwes_04_tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` varchar(20) NOT NULL,
  `usu` varchar(40) NOT NULL,
  `product` varchar(15) NOT NULL,
  `comentario` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `usu`, `product`, `comentario`) VALUES
('1911', 'g', 'husq', 'ffffffffffffffffffffffffffffffffffffffffffffffffffffffff'),
('1930', 'r', 'husq', 'va bien'),
('4477', 'g', 'husq', 'regular'),
('4646', 'g', 'husq', 'f');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familias`
--

CREATE TABLE `familias` (
  `codigo` varchar(20) NOT NULL,
  `nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `familias`
--

INSERT INTO `familias` (`codigo`, `nombre`) VALUES
('BBDD', 'Bases de datos'),
('Certificación', 'Certificación'),
('Ciencias', 'Ciencias informáticas'),
('Diseño', 'Medios digitales y diseño gráfico'),
('Hardware', 'Hardware y dispositivos portátiles'),
('Internet', 'Internet y web'),
('Negocio', 'Software y aplicaciones de negocio'),
('Programación', 'Programación y desarrollo de software'),
('Redes', 'Redes y administración de sistemas'),
('Seguridad', 'Seguridad informática'),
('SSOO', 'Sistemas operativos'),
('Videojuegos', 'Guías de videojuegos y juegos para PC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigo` varchar(15) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `familia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigo`, `nombre`, `descripcion`, `precio`, `familia`) VALUES
('978-1548217853', 'Java para f', 'Todo', '1.00', 'Programación'),
('978-8441537279', 'No me hagas pensar', 'Cientos de miles de diseñadores y desarrolladores web se han basado en la guía del gurú de usabilidad Steve Krug para ayudarles a entender los principios de la navegación intuitiva y diseño Web. Un libro eminentemente práctico, uno de los más queridos y más recomendados sobre el tema. Ahora Steve regresa con nueva perspectiva para reexaminar los principios Web actualizados y un nuevo capítulo de usabilidad móvil. Profusamente ilustrado... y lo mejor de todo divertido de leer. Si lo ha leído antes, encontrará una nueva visión de los principios esencial para los diseñadores Web y desarrolladores de todo el mundo. Si nunca lo ha leído, verá por qué tantas personas han dicho que debería ser lectura obligatoria para cualquiera que trabaje en sitios Web. \" Después de leerlo durante un par de horas y poner sus ideas en práctica en los últimos cinco años, puedo decir que ha hecho más para mejorar mis habilidades como diseñador Web que cualquier otro libro. \" -Jeffrey Zeldman, autor de Diseño con Estándares Web.', '18.95', 'Diseño'),
('978-8478979820', 'Planificación y Administración de Redes', 'La presente obra está dirigida a los estudiantes del Ciclo Formativo de Grado Superior de Administración de Sistemas Informáticos en Red, en concreto al Módulo Profesional de Planificación y administración de redes, aunque también puede utilizarse por los alumnos de otros Ciclos Formativos relacionados o estudiantes universitarios, con el propósito de ampliar contenidos.\r\n\r\nLos contenidos incluidos en este libro abarcan desde los conceptos básicos de los sistemas de transmisión de datos hasta los aspectos de administración y configuración de redes locales; pasando por los tipos de cables, los elementos físicos utilizados en las instalaciones, los protocolos de comunicaciones, la interconexión con redes de área extensa, las herramientas de administración, el diagnóstico y recuperación ante averías y las herramientas de simulación de redes. Redes Locales contiene también una referencia a los aspectos de configuración y administración de los sistemas operativos de red Microsoft Windows 2000/2003/XP/Vista y Linux en las versiones Fedora, OpenSUSE y Debian. También se incluye una descripción exhaustiva sobre la administración de dispositivos que incorporan el sistema operativo Cisco IOS.', '37.90', 'Redes'),
('978-8490297698', 'Diseño conceptual de bases de datos en UML (Manuales)', 'El diseño conceptual es una etapa necesaria en la creación de bases de datos, ya que el esquema conceptual generado es la base desde la cual se creará, modificará y extenderá la base de datos. Un buen diseño conceptual permite crear bases de datos más compactas, entendedoras, simples y extensibles. Este libro pretende ofrecer una primera toma de contacto del lector con el diseño conceptual de bases de datos. El texto del libro describe la problemática del diseño de bases de datos, identifica sus diferentes etapas y justifica la relevancia de cada una de ellas. Posteriormente describe como abordar metodológicamente la etapa de diseño conceptual y los principales lenguajes usados en dicha etapa. Finalmente, se presentan y ejemplifican los elementos básicos de modelado empleando el lenguaje UML. Una lectura a consciencia del libro permite al lector convertirse en un buen diseñador conceptual, es decir una persona capaz de crear esquemas conceptuales en UML que permitan describir un problema concreto.\r\n\r\n', '15.20', 'BBDD'),
('978-8499645087', 'Hackers. Aprende a atacar y defenderte. 2ª edición actualizada', 'La seguridad de los sistemas informáticos es un elemento crucial que cualquier administrador\r\ndebe asumir como uno de sus principales objetivos. La gran cantidad de servicios que se\r\nofrecen a través de las redes e Internet ha hecho que sea de vital importancia asegurar los\r\nsistemas contra los diferentes ataques de los hackers. Ante este problema, el administrador\r\ndebe estar preparado para afrontar cualquier ataque que pueda comprometer la seguridad del\r\nsistema. Para hallar una solución a este conflicto, el administrador debe ponerse en la piel de\r\nun hacker y analizar o explotar la seguridad del sistema.\r\nPero, ¿es un administrador un hacker? Ambos poseen amplios conocimientos informáticos y\r\nanalizan la seguridad de las empresas en busca de fallos. Pero la diferencia radica en su ética\r\ny profesionalidad.', '18.90', 'Seguridad'),
('husq', 'ff', 'ff', '88.00', 'Negocio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiendas`
--

CREATE TABLE `tiendas` (
  `cod` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tlf` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tiendas`
--

INSERT INTO `tiendas` (`cod`, `nombre`, `tlf`) VALUES
(1, 'CENTRAL', '600100100'),
(2, 'SUCURSAL1', '600100200'),
(3, 'SUCURSAL2', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `password`, `foto`) VALUES
('g', 'b2f5ff47436671b6e533d8dc3614845d', 'husq.jpg'),
('papa', '4124bc0a9335c27f086f24ba207a4912', 'rutaFoto'),
('pepe', '926e27eecdbc7a18858b3798ba99bddd', 'rutaFoto'),
('pin', '8a6f503814aa4a7cd863e68c7778fbdb', 'rutaFoto'),
('r', '4b43b0aee35624cd95b910189b3dc231', 'rutaFoto');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usu` (`usu`,`product`),
  ADD KEY `product` (`product`);

--
-- Indices de la tabla `familias`
--
ALTER TABLE `familias`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `nombre_corto` (`nombre`) USING BTREE,
  ADD KEY `familia` (`familia`),
  ADD KEY `codigo` (`codigo`),
  ADD KEY `codigo_2` (`codigo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`product`) REFERENCES `productos` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`usu`) REFERENCES `usuarios` (`usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
