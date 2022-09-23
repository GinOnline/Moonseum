-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-09-2022 a las 16:47:19
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `museo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atraccion`
--

CREATE TABLE `atraccion` (
  `ID` int(11) NOT NULL,
  `imagen` varchar(600) NOT NULL,
  `descripcion` varchar(600) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `museo` varchar(130) NOT NULL,
  `ubicacion` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `atraccion`
--

INSERT INTO `atraccion` (`ID`, `imagen`, `descripcion`, `nombre`, `museo`, `ubicacion`) VALUES
(1, '', '213', '123', '213', ''),
(2, '', '213', '213', '213', ''),
(3, '', 'Anashe', '1234', 'Anabel', ''),
(4, '', 'Anasheee', 'Mona lisa', 'Anabel', ''),
(5, '', 'Añaseheee', 'Gioconda', 'Museo Artes', 'San martin 417'),
(6, '123jpg', '123', '123', '2', '!b'),
(7, '123jpg', '123', '123', '2', '123213');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `museo`
--

CREATE TABLE `museo` (
  `cod` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `descripcion` varchar(1200) NOT NULL,
  `imagen` varchar(600) NOT NULL,
  `ubicacion` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `museo`
--

INSERT INTO `museo` (`cod`, `nombre`, `descripcion`, `imagen`, `ubicacion`) VALUES
(1, 'Museo123123', 'asdnasjkdnasji dnasjdn asnd kiasnd kiasnd jsadn kiasnd asj ', './imagenes_elementos/MER_DDBB.jpeg', ''),
(2, 'Museo Artes', 'Terrible facha tiene este 6', './imagenes_elementos/index_pañol.png', ''),
(3, 'adsasd', 'swe', './imagenes_elementos/MER_DDBB.jpeg', ''),
(4, '123', '123', './imagenes_elementos/MER_DDBB.jpeg', '123'),
(5, 'Anabel', '123', './imagenes_elementos/mascara_para_soldar_1.png', 'dasasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `register`
--

CREATE TABLE `register` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `register`
--

INSERT INTO `register` (`user`, `pass`, `mail`) VALUES
('Gino', '1234', 'a@b.c'),
('a', 'a', 'a@b.comco');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `atraccion`
--
ALTER TABLE `atraccion`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `museo`
--
ALTER TABLE `museo`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `atraccion`
--
ALTER TABLE `atraccion`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `museo`
--
ALTER TABLE `museo`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
