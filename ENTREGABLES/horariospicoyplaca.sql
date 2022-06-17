-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2022 a las 18:34:44
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `horariospicoyplaca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `ultimoDigito` int(11) NOT NULL,
  `dia` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `inicioManana` time NOT NULL,
  `finManana` time NOT NULL,
  `inicioTarde` time NOT NULL,
  `finTarde` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id`, `ultimoDigito`, `dia`, `inicioManana`, `finManana`, `inicioTarde`, `finTarde`) VALUES
(36, 1, 'LUNES', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(37, 2, 'LUNES', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(38, 3, 'MARTES', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(39, 4, 'MARTES', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(40, 5, 'MIERCOLES', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(41, 6, 'MIERCOLES', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(42, 7, 'JUEVES', '04:00:00', '08:00:00', '16:00:00', '22:00:00'),
(43, 8, 'JUEVES', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(44, 9, 'VIERNES', '00:00:00', '00:00:00', '00:00:00', '00:00:00'),
(51, 0, 'VIERNES', '04:00:00', '11:00:00', '16:00:00', '22:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
