-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-12-2017 a las 02:52:08
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_alumnos`
--

CREATE TABLE `t_alumnos` (
  `id_t_usuarios` int(11) NOT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `ap_paterno` varchar(80) DEFAULT NULL,
  `ap_materno` varchar(80) DEFAULT NULL,
  `activo` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_alumnos`
--

INSERT INTO `t_alumnos` (`id_t_usuarios`, `nombre`, `ap_paterno`, `ap_materno`, `activo`) VALUES
(1, 'John', 'Dow', 'Down', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_calificaciones`
--

CREATE TABLE `t_calificaciones` (
  `id_t_calificaciones` int(11) NOT NULL,
  `id_t_materias` int(11) NOT NULL,
  `id_t_usuarios` int(11) NOT NULL,
  `calificacion` decimal(10,2) DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_calificaciones`
--

INSERT INTO `t_calificaciones` (`id_t_calificaciones`, `id_t_materias`, `id_t_usuarios`, `calificacion`, `fecha_registro`) VALUES
(1, 2, 1, '10.00', '2017-12-08'),
(2, 2, 1, '10.00', '2017-12-08'),
(3, 2, 1, '6.00', '2017-12-12'),
(4, 3, 1, '10.00', '2017-12-08'),
(5, 1, 1, '8.00', '2017-12-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_materias`
--

CREATE TABLE `t_materias` (
  `id_t_materias` int(11) NOT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `activo` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `t_materias`
--

INSERT INTO `t_materias` (`id_t_materias`, `nombre`, `activo`) VALUES
(1, 'matematicas', 1),
(2, 'programacion I', 1),
(3, 'ingenieria de sofware', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_alumnos`
--
ALTER TABLE `t_alumnos`
  ADD PRIMARY KEY (`id_t_usuarios`);

--
-- Indices de la tabla `t_calificaciones`
--
ALTER TABLE `t_calificaciones`
  ADD PRIMARY KEY (`id_t_calificaciones`),
  ADD KEY `id_t_materias` (`id_t_materias`);

--
-- Indices de la tabla `t_materias`
--
ALTER TABLE `t_materias`
  ADD PRIMARY KEY (`id_t_materias`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_alumnos`
--
ALTER TABLE `t_alumnos`
  MODIFY `id_t_usuarios` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `t_calificaciones`
--
ALTER TABLE `t_calificaciones`
  MODIFY `id_t_calificaciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `t_materias`
--
ALTER TABLE `t_materias`
  MODIFY `id_t_materias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `t_calificaciones`
--
ALTER TABLE `t_calificaciones`
  ADD CONSTRAINT `t_calificaciones_ibfk_1` FOREIGN KEY (`id_t_materias`) REFERENCES `t_materias` (`id_t_materias`),
  ADD CONSTRAINT `t_calificaciones_ibfk_2` FOREIGN KEY (`id_t_materias`) REFERENCES `t_materias` (`id_t_materias`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
