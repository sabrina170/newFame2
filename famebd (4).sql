-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2021 a las 00:28:16
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `famebd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `descripcion` varchar(150) DEFAULT NULL,
  `foto2` varchar(100) DEFAULT NULL,
  `foto3` varchar(200) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `foto`, `descripcion`, `foto2`, `foto3`, `categoria`) VALUES
(10, 'Izajes', 'imagenes/izaje1.jpg', 'Fabricamos izaje de 15 y 18 y 20 m3 para residuos solidos.\r\n(tanque vacio 15 y 18m3).\r\n', 'imagenes/izaje2.jpg', 'imagenes/izaje3.jpg', 'Izajes'),
(20, 'Bombonas', 'imagenes/bombona1.jpg', 'bombona calera en plancha hardox de 37m3 super liviana \r\nBombona para cemento a granel y filer de 34 m3.\r\n', 'imagenes/bombona2.jpg', 'imagenes/bombona3.jpg', 'Bombonas'),
(30, 'Cisternas', 'imagenes/cisterna1.jpg', '-Tanque de combustible de 2 o 3 compartimiento\r\n-Tanque de aceite \r\n', 'imagenes/cisterna2.jpg', 'imagenes/cisterna3.jpg', 'Cisternas'),
(40, 'Furgones', 'imagenes/furgones1.jpg', 'De 13 metros y 14 metros', 'imagenes/furgones2.jpg', 'imagenes/furgones3.jpg', 'Furgones'),
(50, 'Cama Baja', NULL, 'Fabricamos cama baja de 2, 3 y 4 ejes para maquinarias pesada.', NULL, NULL, 'Cama Baja'),
(60, 'Plataforma', 'imagenes/plataforma1.jpg', 'De 3 a 2 ejes para carga liviana y pesada.', NULL, NULL, 'Plataforma'),
(70, 'Baranda rebatible', 'imagenes/baranda.jpg', 'Sobre chasis y alas gaviota ', NULL, NULL, 'Baranda rebatible'),
(80, 'Cortineros', 'imagenes/cortinero1.jpg', 'Carga de gaseosa, cerveza y paletizado.', 'imagenes/cortinero2.jpg', 'imagenes/cortinero3.jpg', 'Cortineros'),
(90, 'Contenedor', 'imagenes/contenedor1.jpg', 'Fabricamos contenedor para carga de 10, 15 y 18 m3.', NULL, NULL, 'Contenedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `foto2` varchar(200) DEFAULT NULL,
  `foto3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `foto`, `descripcion`, `foto2`, `foto3`) VALUES
(1, 'Pantógrafo CNC', 'imagenes/servicio1.jpg', 'Corte plasma hasta 3” de espesor\r\nCorte oxicorte hasta 6’’ de espesor\r\n', NULL, NULL),
(2, 'Corte y doblez', 'imagenes/servicio2.jpg', 'Realizamos servicio de plancha de corte y doblez hasta plancha de ¼.', NULL, NULL),
(3, 'Rolado', 'imagenes/servicio3.jpg', 'Servicio de Rola ', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
