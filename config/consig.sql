-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2023 a las 17:44:38
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consig`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consignacion`
--

CREATE TABLE `consignacion` (
  `ID_consignacion` int(11) NOT NULL,
  `usuario` int(11) DEFAULT NULL,
  `fecha_hora` datetime DEFAULT NULL,
  `consignacion` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `consignacion`
--

INSERT INTO `consignacion` (`ID_consignacion`, `usuario`, `fecha_hora`, `consignacion`) VALUES
(1, 12, '2023-11-01 18:46:08', 2540000),
(2, 43, '2023-10-17 11:20:56', 550000),
(3, 23, '2023-11-04 14:08:34', 1100000),
(4, 54, '2023-10-31 08:46:33', 1659000),
(5, 51, '2023-11-07 15:14:39', 3456000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `apellido` varchar(40) DEFAULT NULL,
  `numero` varchar(19) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `nombre`, `apellido`, `numero`, `direccion`) VALUES
(12, 'Daniel', 'Perez', '3006543212', 'Calle 8 sur #7-34 '),
(23, 'Gilberto', 'Rojas', '3145432194', 'Carrera 7, Calle 73b norte '),
(43, 'Esteban', 'Gutierrez', '3115679126', 'Calle 76 #61-50'),
(51, 'Francisco', 'Ordoñpez', '65422132', 'Diagonal 76 #35-3'),
(54, 'Juan', 'Fernandez', '3145657898', 'Calle 87 #34-42');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consignacion`
--
ALTER TABLE `consignacion`
  ADD PRIMARY KEY (`ID_consignacion`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consignacion`
--
ALTER TABLE `consignacion`
  MODIFY `ID_consignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `consignacion`
--
ALTER TABLE `consignacion`
  ADD CONSTRAINT `consignacion_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
