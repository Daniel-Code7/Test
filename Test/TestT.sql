-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 22-01-2020 a las 15:03:53
-- Versión del servidor: 10.3.14-MariaDB-1
-- Versión de PHP: 7.3.12-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `TestT`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Datos`
--

CREATE TABLE `Datos` (
  `id` int(255) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(20) DEFAULT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Foto` varchar(255) DEFAULT NULL,
  `Correo` varchar(70) DEFAULT NULL,
  `Contrasena` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Datos`
--

INSERT INTO `Datos` (`id`, `Nombre`, `Apellido`, `Usuario`, `Foto`, `Correo`, `Contrasena`) VALUES
(12, 'Luis Daniel', 'Nis Cupul', 'Luis', NULL, 'danielnis1997@gmail.com', '12'),
(13, 'Luis', 'Nis', 'Nis', NULL, '123@gmail.com', '12'),
(14, 'Daniel', 'Cupul', 'Daniel', NULL, 'daniel@gmail.com', '12'),
(15, '12', '12', '12', NULL, '123@gmail.com', '12'),
(16, '1212', '1212', '121', NULL, '1212@gmail.com', '13');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Datos`
--
ALTER TABLE `Datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Datos`
--
ALTER TABLE `Datos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
