-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-03-2024 a las 07:34:57
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

DROP TABLE IF EXISTS `contactos`;
CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `nombre`, `apellido`, `cedula`, `telefono`, `direccion`, `fecha`) VALUES
(1, 'lenin orlando', 'hidalgo almeida', '18093568', '04126001416', 'guatire', '2023-12-02'),
(3, 'karelys coromoto', 'vera villegas', '17921240', '04242173924', 'guarenas', '2023-12-03'),
(4, 'leo jose', 'vera villegas', '15662244', '04126001615', 'caracas', '2023-12-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desarrollo`
--

DROP TABLE IF EXISTS `desarrollo`;
CREATE TABLE `desarrollo` (
  `id` int(11) NOT NULL,
  `profesor` varchar(255) NOT NULL,
  `alumno` varchar(255) NOT NULL,
  `curso` varchar(255) NOT NULL,
  `nivel` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `rol` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `desarrollo`
--

INSERT INTO `desarrollo` (`id`, `profesor`, `alumno`, `curso`, `nivel`, `fecha`, `rol`) VALUES
(1, 'luis torres', 'lenin hidalgo', 'programacion', 'avanzado', '2024-01-05', '2024-01-31'),
(3, 'karelys vera', 'orlando hidalgo', 'contabilidad', 'basico', '2024-01-05', '2024-02-29'),
(4, 'nicole vera', 'abrahan', 'barberia', 'basico', '2024-01-05', '2024-01-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla`
--

DROP TABLE IF EXISTS `tabla`;
CREATE TABLE `tabla` (
  `id` int(11) NOT NULL,
  `acesor` varchar(255) NOT NULL,
  `alumno` varchar(255) NOT NULL,
  `curso` varchar(255) NOT NULL,
  `nivel` varchar(255) NOT NULL,
  `pago` varchar(255) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tabla`
--

INSERT INTO `tabla` (`id`, `acesor`, `alumno`, `curso`, `nivel`, `pago`, `fecha`) VALUES
(1, 'lenin', 'karelys', 'contabilidad', 'basico', '50$', '2023-12-05'),
(2, 'karelys', 'lenin', 'programacion', 'avanzado', '100$', '2023-12-06'),
(4, 'nicole', 'lenin', 'diseño web', 'basico', '100$', '2023-12-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `validar`
--

DROP TABLE IF EXISTS `validar`;
CREATE TABLE `validar` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `validar`
--

INSERT INTO `validar` (`id`, `usuario`, `password`) VALUES
(4, 'nicole hidalgo', 'cd437afcd7f26c71c1184e0cf9a0b6cb');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `desarrollo`
--
ALTER TABLE `desarrollo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tabla`
--
ALTER TABLE `tabla`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `validar`
--
ALTER TABLE `validar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `desarrollo`
--
ALTER TABLE `desarrollo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tabla`
--
ALTER TABLE `tabla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `validar`
--
ALTER TABLE `validar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
