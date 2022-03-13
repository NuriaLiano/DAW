-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-11-2021 a las 19:58:16
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
('978-1520363462', 'Aprende SQL en un fin de semana: El curso definitivo para crear y consultar bases de datos', 'Descripción del producto\r\nReseña del editor\r\n¡Oferta de lanzamiento de la edición impresa! Sólo 4,99 € por tiempo limitado.\r\nEl curso de SQL definitivo en español.\r\nSin necesidad de conocimientos previos. Aprende a manipular y consultar bases de datos de forma rápida y sencilla.\r\n¿Estás desarrollando una web y quieres utilizar MySQL para almacenar información? ¿estás estudiando y se te atraganta la asignatura de base de datos? ¿quieres aprender SQL para mejorar tu currículum o dar un giro a tu vida laboral? o ¿símplemente tienes curiosidad por conocer este lenguaje y sus posibilidades? A todos vosotros bienvenidos, habéis dado con el libro adecuado. \r\nMás de 100 sentencias de ejemplo, numerosos ejercicios y temas adicionales con los que aprenderás todo lo necesario para utilizar SQL en tus proyectos profesionales. \r\nContenido del curso\r\nPREÁMBULO\r\nCAPÍTULO 1.1 - INTRODUCCIÓN\r\nCAPÍTULO 1.2 - ¿QUÉ ES UNA BASE DE DATOS RELACIONAL?\r\nCAPÍTULO 1.3 - PREPARAR EL ENTORNO\r\nCAPÍTULO 1.4 - ¿QUÉ PUEDO GUARDAR EN UNA BASE DE DATOS?\r\nCAPÍTULO 1.5 - TU PRIMERA BASE DE DATOS\r\nCAPÍTULO 1.6 - CREACIÓN DE TABLAS\r\nCAPÍTULO 1.7 - GUARDAR Y CONSULTAR INFORMACIÓN\r\nCAPÍTULO 1.8 - RESUMEN DEL PRIMER DÍA\r\nCAPÍTULO 2.1 - EL LENGUAJE SQL\r\nCAPÍTULO 2.2 - CREATE, ALTER Y DROP TABLE\r\nCAPÍTULO 2.3 - INSERT INTO\r\nCAPÍTULO 2.4 - USO DE PRIMARY KEY\r\nCAPÍTULO 2.5 - SELECT BÁSICO\r\nCAPÍTULO 2.6 - SELECT + WHERE\r\nCAPÍTULO 2.7 - JOIN\r\nCAPÍTULO 2.8 - UNION Y EXCEPT\r\nCAPÍTULO 2.9 - UPDATE Y DELETE\r\nCAPÍTULO 2.10 - RESUMEN DEL SEGUNDO DÍA\r\nCAPÍTULO 3.1 - FUNCIONES\r\nCAPÍTULO 3.2 - GROUP BY\r\nCAPÍTULO 3.3 - SUBCONSULTAS\r\nCAPÍTULO 3.4 - VISTAS\r\nCAPÍTULO 3.5 - OUTER JOIN\r\nCAPÍTULO 3.6 - OPERACIONES CON DATETIME\r\nCAPÍTULO 3.7 - PROYECTO FINAL', '4.99', 'BBDD'),
('978-1521889619', 'Aprende Git: ... y, de camino, GitHub', 'git es un sistema de control de versiones distribuido, que dicho así suena geek y aburrido, pero que en la práctica es una forma de trabajar en equipo ha revolucionado el desarrollo de aplicaciones informáticas y, en general, se crea cualquier proyecto en el que tengan que intervenir una o varias personas. Esencialmente, git permite que un equipo trabaje concurrentemente y de forma segura sobre un conjunto de ficheros de texto, pero desde el kernel del sistema operativo Linux, para el que desarrolló originalmente, hoy en día se ha extendido a la mayoría de las aplicaciones libres y eventualmente al resto de las aplicaciones, donde está sustituyendo a otros sistemas de versiones centralizados como subversion o CVS o distribuidos como Mercurial o Bazaar. git es rápido, seguro, y tiene gran cantidad de posibilidades de alojamiento tanto gratuitos (GitHub, Bitbucket, o auto-alojados como GitLab o Gitorious) como de pago.', '4.90', 'Programación'),
('978-1547142866', 'Pentesting con Kali: Aprende a dominar la herramienta Kali de pentesting, hacking y auditorías activas de seguridad', 'Aprende la profesión de pentester, y a dedicarte al hacking ético.\r\n\r\nKali es una distribución de Linux que contiene centenares de herramientas para hacer pentesting (auditoría de seguridad con test de intrusión), una parte fundamental del hacking ético.\r\n\r\nLos tests de penetración corresponden con auditorías de seguridad proactivas, en las que el auditor analiza la seguridad de un sistema verificando in situ si el sistema es vulnerable. Para ello, después de la firma de los respectivos contratos y autorizaciones, el auditor ataca la infraestructura de red y los servidores con objeto de validar si son vulnerables a ataques concretos conocidos por la comunidad de seguridad.', '29.93', 'Seguridad'),
('978-1548217853', 'Java para novatos', 'Todo lo que necesitas saber para empezar a programar en Java aplicando el paradigma de orientación a objetos desde el primer momento.\r\n\r\n¿Te han dicho alguna vez que la programación orientada a objetos es difícil de comprender? ¿Has intentando programar orientado a objetos pero te siguen saliendo programas estructurados clásicos? ¿Las palabras herencia, polimorfismo o sobrecarga te suenan a chino?\r\n\r\nEn este libro aprenderás paso a paso los secretos de la programación orientada a objetos con Java, de forma guiada y con múltiples ejemplos y ejercicios resueltos. Todo reunido en un solo lugar. Así podrás dejar de invertir tiempo en buscar información deslabazada aquí y allá y hacer lo que de verdad te importa: aprender a programar.\r\n\r\nEl libro consta de más de 400 páginas e incluye:\r\n\r\nCómo crear, compilar y ejecutar programas con Java.\r\nLa sintaxis del lenguaje Java.\r\nQué son las clases, objetos, métodos y atributos.\r\nProgramación orientada a objetos avanzada: constructores y destructores, wrappers, sobrecarga, polimorfismo, herencia, interfaces y mucho más.\r\nColecciones y arrays.\r\nFlujos de entrada/salida y manipulación de ficheros.\r\nEjercicios propuestos y resueltos.', '15.26', 'Programación'),
('978-8441537279', 'No me hagas pensar', 'Cientos de miles de diseñadores y desarrolladores web se han basado en la guía del gurú de usabilidad Steve Krug para ayudarles a entender los principios de la navegación intuitiva y diseño Web. Un libro eminentemente práctico, uno de los más queridos y más recomendados sobre el tema. Ahora Steve regresa con nueva perspectiva para reexaminar los principios Web actualizados y un nuevo capítulo de usabilidad móvil. Profusamente ilustrado... y lo mejor de todo divertido de leer. Si lo ha leído antes, encontrará una nueva visión de los principios esencial para los diseñadores Web y desarrolladores de todo el mundo. Si nunca lo ha leído, verá por qué tantas personas han dicho que debería ser lectura obligatoria para cualquiera que trabaje en sitios Web. \" Después de leerlo durante un par de horas y poner sus ideas en práctica en los últimos cinco años, puedo decir que ha hecho más para mejorar mis habilidades como diseñador Web que cualquier otro libro. \" -Jeffrey Zeldman, autor de Diseño con Estándares Web.', '18.95', 'Diseño'),
('978-8478979820', 'Planificación y Administración de Redes', 'La presente obra está dirigida a los estudiantes del Ciclo Formativo de Grado Superior de Administración de Sistemas Informáticos en Red, en concreto al Módulo Profesional de Planificación y administración de redes, aunque también puede utilizarse por los alumnos de otros Ciclos Formativos relacionados o estudiantes universitarios, con el propósito de ampliar contenidos.\r\n\r\nLos contenidos incluidos en este libro abarcan desde los conceptos básicos de los sistemas de transmisión de datos hasta los aspectos de administración y configuración de redes locales; pasando por los tipos de cables, los elementos físicos utilizados en las instalaciones, los protocolos de comunicaciones, la interconexión con redes de área extensa, las herramientas de administración, el diagnóstico y recuperación ante averías y las herramientas de simulación de redes. Redes Locales contiene también una referencia a los aspectos de configuración y administración de los sistemas operativos de red Microsoft Windows 2000/2003/XP/Vista y Linux en las versiones Fedora, OpenSUSE y Debian. También se incluye una descripción exhaustiva sobre la administración de dispositivos que incorporan el sistema operativo Cisco IOS.', '37.90', 'Redes'),
('978-8490297698', 'Diseño conceptual de bases de datos en UML (Manuales)', 'El diseño conceptual es una etapa necesaria en la creación de bases de datos, ya que el esquema conceptual generado es la base desde la cual se creará, modificará y extenderá la base de datos. Un buen diseño conceptual permite crear bases de datos más compactas, entendedoras, simples y extensibles. Este libro pretende ofrecer una primera toma de contacto del lector con el diseño conceptual de bases de datos. El texto del libro describe la problemática del diseño de bases de datos, identifica sus diferentes etapas y justifica la relevancia de cada una de ellas. Posteriormente describe como abordar metodológicamente la etapa de diseño conceptual y los principales lenguajes usados en dicha etapa. Finalmente, se presentan y ejemplifican los elementos básicos de modelado empleando el lenguaje UML. Una lectura a consciencia del libro permite al lector convertirse en un buen diseñador conceptual, es decir una persona capaz de crear esquemas conceptuales en UML que permitan describir un problema concreto.\r\n\r\n', '15.20', 'BBDD'),
('978-8499645087', 'Hackers. Aprende a atacar y defenderte. 2ª edición actualizada', 'La seguridad de los sistemas informáticos es un elemento crucial que cualquier administrador\r\ndebe asumir como uno de sus principales objetivos. La gran cantidad de servicios que se\r\nofrecen a través de las redes e Internet ha hecho que sea de vital importancia asegurar los\r\nsistemas contra los diferentes ataques de los hackers. Ante este problema, el administrador\r\ndebe estar preparado para afrontar cualquier ataque que pueda comprometer la seguridad del\r\nsistema. Para hallar una solución a este conflicto, el administrador debe ponerse en la piel de\r\nun hacker y analizar o explotar la seguridad del sistema.\r\nPero, ¿es un administrador un hacker? Ambos poseen amplios conocimientos informáticos y\r\nanalizan la seguridad de las empresas en busca de fallos. Pero la diferencia radica en su ética\r\ny profesionalidad.', '18.90', 'Seguridad');

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
  `usuario` varchar(40) COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(40) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `password`) VALUES
('a', '0cc175b9c0f1b6a831c399e269772661'),
('blanca', '1d0f769d73278ddc6e765f88265e18b6'),
('david', '172522ec1028ab781d9dfd17eaca4427'),
('nieves', 'c45f3fc0f92e983dea35e4b15213e6d7'),
('pepe1', 'bf38983aac6827fb6b65f2824aafe3f2'),
('susi', 'd115dd94128adc7c30f7f44744caf4b1');

--
-- Índices para tablas volcadas
--

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
  ADD KEY `familia` (`familia`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
