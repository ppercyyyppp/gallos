-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-05-2020 a las 12:50:19
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gallos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gallo`
--

CREATE TABLE `gallo` (
  `id` int(11) NOT NULL,
  `nplaca` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fecha` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sexo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nplacapapa` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nombrepapa` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nplacamama` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nombremama` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `observaciones` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `foto` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `estado` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `linea` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gallo`
--

INSERT INTO `gallo` (`id`, `nplaca`, `nombre`, `fecha`, `sexo`, `nplacapapa`, `nombrepapa`, `nplacamama`, `nombremama`, `observaciones`, `foto`, `estado`, `linea`) VALUES
(3, '15165', 'noah', '25/25/1987', 'm', '154', 'papa', '216', 'mama', 'pata mala', 'd', 'v', 'dd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gallo`
--
ALTER TABLE `gallo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gallo`
--
ALTER TABLE `gallo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
