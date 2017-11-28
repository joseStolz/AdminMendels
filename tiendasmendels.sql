-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2017 a las 01:08:44
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendasmendels`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comerciosxlugares`
--

CREATE TABLE `comerciosxlugares` (
  `id_lugar` int(11) NOT NULL,
  `id_comercio` int(11) NOT NULL,
  `lugar` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comercios_amigos`
--

CREATE TABLE `comercios_amigos` (
  `id_comercio` int(11) NOT NULL,
  `nombre_comercio` varchar(512) NOT NULL,
  `logo_comercio` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comercios_amigos`
--

INSERT INTO `comercios_amigos` (`id_comercio`, `nombre_comercio`, `logo_comercio`) VALUES
(1, 'Name', 'business_nameaaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE `promociones` (
  `id_promocion` int(11) NOT NULL,
  `id_comercio` int(11) NOT NULL,
  `arte` varchar(512) NOT NULL,
  `descripcion` varchar(512) NOT NULL,
  `lugar` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comerciosxlugares`
--
ALTER TABLE `comerciosxlugares`
  ADD PRIMARY KEY (`id_lugar`);

--
-- Indices de la tabla `comercios_amigos`
--
ALTER TABLE `comercios_amigos`
  ADD PRIMARY KEY (`id_comercio`);

--
-- Indices de la tabla `promociones`
--
ALTER TABLE `promociones`
  ADD PRIMARY KEY (`id_promocion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comerciosxlugares`
--
ALTER TABLE `comerciosxlugares`
  MODIFY `id_lugar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `comercios_amigos`
--
ALTER TABLE `comercios_amigos`
  MODIFY `id_comercio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `promociones`
--
ALTER TABLE `promociones`
  MODIFY `id_promocion` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
