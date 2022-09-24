-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2022 at 01:06 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `museo`
--

-- --------------------------------------------------------

--
-- Table structure for table `atraccion`
--

CREATE TABLE `atraccion` (
  `ID` int(11) NOT NULL,
  `imagen` varchar(600) NOT NULL,
  `descripcion` varchar(6000) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `museo` varchar(130) NOT NULL,
  `ubicacion` varchar(120) NOT NULL,
  `autor` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atraccion`
--

INSERT INTO `atraccion` (`ID`, `imagen`, `descripcion`, `nombre`, `museo`, `ubicacion`, `autor`) VALUES
(11, './imagenes_atracciones/El hombre como protagonista.png', '', 'El hombre como protagonista', '12', '', 'Antropología Física'),
(12, './imagenes_atracciones/aaa.png', '', 'LO CREADO POR EL HOMBRE  ', '12', '', 'Arqueología'),
(13, './imagenes_atracciones/Rincones.png', '', 'Rincones', '12', '', 'Pedro Mondini'),
(14, './imagenes_atracciones/El hombre social.png', '', 'El hombre social', '12', '', 'Roman Franchesco');

-- --------------------------------------------------------

--
-- Table structure for table `museo`
--

CREATE TABLE `museo` (
  `cod` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `descripcion` varchar(1200) NOT NULL,
  `imagen` varchar(600) NOT NULL,
  `ubicacion` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `museo`
--

INSERT INTO `museo` (`cod`, `nombre`, `descripcion`, `imagen`, `ubicacion`) VALUES
(9, 'Museo Nacional de Bellas Artes', 'El Museo Nacional de Bellas Artes, ubicado en la Ciudad de Buenos Aires, es una de las instituciones públicas de arte más importantes de Argentina. Alberga un patrimonio sumamente diverso, que incluye más de 12.000 piezas, entre pinturas, esculturas, dibujos, grabados, textiles y objetos.', './imagenes_elementos/museo-nacional-bellas-artes-argentina.png', 'Av. del Libertador 1473, Buenos Aires'),
(10, 'Museo Histórico Nacional', 'El Museo Histórico Nacional es un museo dedicado a la historia argentina. Se encuentra ubicado en el barrio de San Telmo en la Ciudad de Buenos Aires, Argentina.', './imagenes_elementos/15806669119_69091e718b_k-600x0-no-upscale (1).jpg', 'Defensa 1600, C1143 CABA'),
(11, 'Museo Nacional de Arte Decorativo', 'El Museo Nacional de Arte Decorativo ubicado en la Avenida del Libertador 1902 de la Ciudad de Buenos Aires fue creado en 1937 luego de la adquisición, por parte del Estado, del edificio que fuera el palacio Errázuriz de Matías Errázuriz Ortúzar y su esposa Josefina de Alvear.', './imagenes_elementos/arte-decorativo.jpg', 'Av. del Libertador 1902, C1425 CABA'),
(12, 'Museo Rocsen', 'El Museo Polifacético Rocsen es un museo particular ubicado a 12 km de Mina Clavero y a 5 km de la localidad traslaserrana de Nono, en la provincia de Córdoba. Hacia el año 2020 posee más de 60.000 piezas actualmente, provenientes de diversas regiones del mundo.', './imagenes_elementos/museo-rocsen.jpg', 'calle publica sin numero, X5887 Nono, Córdoba');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user`, `pass`, `mail`) VALUES
('Gino', '1234', 'a@b.c'),
('a', 'a', 'a@b.comco');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atraccion`
--
ALTER TABLE `atraccion`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `museo`
--
ALTER TABLE `museo`
  ADD PRIMARY KEY (`cod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atraccion`
--
ALTER TABLE `atraccion`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `museo`
--
ALTER TABLE `museo`
  MODIFY `cod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
