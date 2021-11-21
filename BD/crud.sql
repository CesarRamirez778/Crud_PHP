-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2021 a las 04:38:31
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

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
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `NombreEmpresa` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Contacto` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Mail` text COLLATE utf8_unicode_ci NOT NULL,
  `Mail2` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `Nombre`, `NombreEmpresa`, `Contacto`, `Mail`, `Mail2`) VALUES
(3, 'Cesar ramirez', 'AFP Confía S.A', '888888', 'CONFIA@CONFIA.com', 'CONFIA@CONFIA.com'),
(4, 'Cesar Estudiante UDB ', 'AFP Confía S.A', '7669-8602', 'CONFIA@CONFIA.com', 'CONFIA@CONFIA.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Direccion` text COLLATE utf8_unicode_ci NOT NULL,
  `Contacto` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Website` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `Nombre`, `Direccion`, `Contacto`, `Website`) VALUES
(17, 'Cesar ramirez', 'avenida amapolas 550', '22222222', 'http://localhost/TCW_TEST/index.php'),
(18, 'Marito Alfredo Martinez', 'Soyapango casa 13, col, los alpes', '7669-8602', 'orf1221@gmail.com'),
(23, 'DiseñoDeSoftwareEmpresarial', 'Soyapango casa 13, col, los alpes', '888745', 'http://localhost/TCW_TEST/index.php');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
