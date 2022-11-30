-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2022 a las 19:18:27
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
-- Base de datos: `softwheels`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(255) DEFAULT NULL,
  `nit_ci_cliente` varchar(255) DEFAULT NULL,
  `placa_auto` varchar(255) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_clientes`
--

INSERT INTO `tb_clientes` (`id_cliente`, `nombre_cliente`, `nit_ci_cliente`, `placa_auto`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(2, 'juan', '23123123', 'sdf555', '2022-11-13 09:40:43', NULL, NULL, '1'),
(3, 'adwd', 'awdsd', 'sss23213', '2022-11-13 09:48:48', NULL, NULL, '1'),
(4, '2312', '2313213', 'sss555', '2022-11-13 09:50:47', NULL, NULL, '1'),
(5, 'juan', '12324343', 'Fau449', '2022-11-13 09:59:45', NULL, NULL, '1'),
(6, 'pelu', '48522', 'dim123', '2022-11-13 10:21:33', NULL, NULL, '1'),
(7, 'pepe', '23123123', 'ju281', '2022-11-13 10:46:35', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_facturaciones`
--

CREATE TABLE `tb_facturaciones` (
  `id_facturacion` int(11) NOT NULL,
  `id_informacion` int(11) DEFAULT NULL,
  `nro_factura` varchar(255) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `fecha_factura` varchar(255) DEFAULT NULL,
  `fecha_ingreso` varchar(255) DEFAULT NULL,
  `hora_ingreso` varchar(255) DEFAULT NULL,
  `fecha_salida` varchar(255) DEFAULT NULL,
  `hora_salida` varchar(255) DEFAULT NULL,
  `cuviculo` varchar(255) DEFAULT NULL,
  `user_sesion` varchar(255) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  `id_ticket` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_facturaciones`
--

INSERT INTO `tb_facturaciones` (`id_facturacion`, `id_informacion`, `nro_factura`, `id_cliente`, `fecha_factura`, `fecha_ingreso`, `hora_ingreso`, `fecha_salida`, `hora_salida`, `cuviculo`, `user_sesion`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`, `id_ticket`) VALUES
(1, 1, '1', 5, 'MEDELLIN, 13 de Noviembre de 2022', '2022-11-13', '21:59', '2022-11-13', '22:18', '2', 'juan miguel valencia', '2022-11-13 10:18:46', NULL, NULL, '1', NULL),
(2, 1, '2', 7, 'MEDELLIN, 13 de Noviembre de 2022', '2022-11-13', '22:45', '2022-11-13', '22:46', '1', 'juan miguel valencia', '2022-11-13 10:46:40', NULL, NULL, '1', NULL),
(3, 1, '3', 6, 'MEDELLIN, 22 de Noviembre de 2022', '2022-11-13', '21:20', '2022-11-22', '19:51', '2', 'juan miguel valencia', '2022-11-22 07:51:57', NULL, NULL, '1', NULL),
(4, 1, '4', 5, 'MEDELLIN, 30 de Noviembre de 2022', '2022-11-30', '12:26', '2022-11-30', '12:26', '1', 'juan miguel valencia', '2022-11-30 12:26:31', NULL, NULL, '1', 13),
(5, 1, '5', 5, 'MEDELLIN, 30 de Noviembre de 2022', '2022-11-30', '12:26', '2022-11-30', '12:29', '2', 'juan miguel valencia', '2022-11-30 12:29:01', NULL, NULL, '1', 15),
(6, 1, '6', 2, 'MEDELLIN, 30 de Noviembre de 2022', '2022-11-30', '12:26', '2022-11-30', '12:29', '1', 'juan miguel valencia', '2022-11-30 12:29:03', NULL, NULL, '1', 14),
(7, 1, '7', 2, 'MEDELLIN, 30 de Noviembre de 2022', '2022-11-30', '12:36', '2022-11-30', '12:36', '1', 'juan miguel valencia', '2022-11-30 12:36:57', NULL, NULL, '1', 16),
(8, 1, '8', 5, 'MEDELLIN, 30 de Noviembre de 2022', '2022-11-30', '12:37', '2022-11-30', '12:37', '5', 'juan miguel valencia', '2022-11-30 12:37:21', NULL, NULL, '1', 17),
(9, 1, '9', 2, 'MEDELLIN, 30 de Noviembre de 2022', '2022-11-30', '12:38', '2022-11-30', '12:38', '1', 'juan miguel valencia', '2022-11-30 12:38:17', NULL, NULL, '1', 18),
(10, 1, '10', 2, 'MEDELLIN, 30 de Noviembre de 2022', '2022-11-30', '12:38', '2022-11-30', '12:38', '1', 'juan miguel valencia', '2022-11-30 12:38:27', NULL, NULL, '1', 19),
(11, 1, '11', 2, 'MEDELLIN, 30 de Noviembre de 2022', '2022-11-30', '12:38', '2022-11-30', '12:38', '1', 'juan miguel valencia', '2022-11-30 12:38:53', NULL, NULL, '1', 20),
(12, 1, '12', 2, 'MEDELLIN, 30 de Noviembre de 2022', '2022-11-30', '12:38', '2022-11-30', '12:39', '1', 'juan miguel valencia', '2022-11-30 12:39:42', NULL, NULL, '1', 21),
(13, 1, '13', 2, 'MEDELLIN, 30 de Noviembre de 2022', '2022-11-30', '12:39', '2022-11-30', '12:40', '1', 'juan miguel valencia', '2022-11-30 12:40:31', NULL, NULL, '1', 22),
(14, 1, '14', 2, 'MEDELLIN, 30 de Noviembre de 2022', '2022-11-30', '12:40', '2022-11-30', '12:41', '1', 'juan miguel valencia', '2022-11-30 12:41:16', NULL, NULL, '1', 23),
(15, 1, '15', 2, 'MEDELLIN, 30 de Noviembre de 2022', '2022-11-30', '12:43', '2022-11-30', '12:43', '1', 'juan miguel valencia', '2022-11-30 12:43:20', NULL, NULL, '1', 24),
(16, 1, '16', 2, 'MEDELLIN, 30 de Noviembre de 2022', '2022-11-30', '12:46', '2022-11-30', '12:46', '1', 'juan miguel valencia', '2022-11-30 12:46:11', NULL, NULL, '1', 25),
(17, 1, '17', 5, 'MEDELLIN, 30 de Noviembre de 2022', '2022-11-30', '12:46', '2022-11-30', '12:46', '6', 'juan miguel valencia', '2022-11-30 12:46:33', NULL, NULL, '1', 26),
(18, 1, '18', 5, 'MEDELLIN, 30 de Noviembre de 2022', '2022-11-30', '12:46', '2022-11-30', '12:47', '6', 'juan miguel valencia', '2022-11-30 12:47:07', NULL, NULL, '1', 27),
(19, 1, '19', 2, 'MEDELLIN, 30 de Noviembre de 2022', '2022-11-30', '12:51', '2022-11-30', '12:51', '1', 'juan miguel valencia', '2022-11-30 12:51:40', NULL, NULL, '1', 28),
(20, 1, '20', 5, 'MEDELLIN, 30 de Noviembre de 2022', '2022-11-30', '12:51', '2022-11-30', '12:52', '7', 'juan miguel valencia', '2022-11-30 12:52:05', NULL, NULL, '1', 29),
(21, 1, '21', 2, 'MEDELLIN, 30 de Noviembre de 2022', '2022-11-30', '12:52', '2022-11-30', '12:52', '1', 'juan miguel valencia', '2022-11-30 12:52:47', NULL, NULL, '1', 30),
(22, 1, '22', 5, 'MEDELLIN, 30 de Noviembre de 2022', '2022-11-30', '12:52', '2022-11-30', '12:52', '7', 'juan miguel valencia', '2022-11-30 12:52:58', NULL, NULL, '1', 31),
(23, 1, '23', 2, 'MEDELLIN, 30 de Noviembre de 2022', '2022-11-30', '12:52', '2022-11-30', '13:12', '1', 'juan miguel valencia', '2022-11-30 01:12:12', NULL, NULL, '1', 30),
(24, 1, '24', 2, 'MEDELLIN, 30 de Noviembre de 2022', '2022-11-30', '12:52', '2022-11-30', '13:12', '1', 'juan miguel valencia', '2022-11-30 01:12:53', NULL, NULL, '1', 30),
(25, 1, '25', 2, 'MEDELLIN, 30 de Noviembre de 2022', '2022-11-30', '12:52', '2022-11-30', '13:15', '1', 'juan miguel valencia', '2022-11-30 01:15:36', NULL, NULL, '1', 30),
(26, 1, '26', 2, 'MEDELLIN, 30 de Noviembre de 2022', '2022-11-30', '13:15', '2022-11-30', '13:16', '1', 'juan miguel valencia', '2022-11-30 01:16:41', NULL, NULL, '1', 32),
(27, 1, '27', 5, 'MEDELLIN, 30 de Noviembre de 2022', '2022-11-30', '12:52', '2022-11-30', '13:17', '7', 'juan miguel valencia', '2022-11-30 01:17:11', NULL, NULL, '1', 31);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_informaciones`
--

CREATE TABLE `tb_informaciones` (
  `id_informacion` int(11) NOT NULL,
  `nombre_parqueo` varchar(255) DEFAULT NULL,
  `actividad_empresa` varchar(255) DEFAULT NULL,
  `sucursal` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `zona` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `departamento_ciudad` varchar(255) DEFAULT NULL,
  `pais` varchar(255) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_informaciones`
--

INSERT INTO `tb_informaciones` (`id_informacion`, `nombre_parqueo`, `actividad_empresa`, `sucursal`, `direccion`, `zona`, `telefono`, `departamento_ciudad`, `pais`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, 'SENA', 'PARQUEO', 'COMPLEJO NORTE', NULL, 'PEDREGAL', '3015660974', 'MEDELLIN', 'COLOMBIA', '2022-11-13 20:45:02', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_mapeos`
--

CREATE TABLE `tb_mapeos` (
  `id_map` int(11) NOT NULL,
  `nro_espacio` varchar(255) DEFAULT NULL,
  `estado_espacio` varchar(255) DEFAULT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_mapeos`
--

INSERT INTO `tb_mapeos` (`id_map`, `nro_espacio`, `estado_espacio`, `obs`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, '1', 'LIBRE', '', '2022-11-13 08:02:10', '2022-11-30 01:16:42', NULL, '1'),
(2, '2', 'LIBRE', '', '2022-11-13 08:13:32', '2022-11-30 12:29:01', NULL, '1'),
(3, '3', 'LIBRE', '', '2022-11-13 08:15:48', NULL, NULL, '1'),
(4, '4', 'LIBRE', '', '2022-11-13 08:18:10', NULL, NULL, '1'),
(5, '5', 'LIBRE', '', '2022-11-30 12:37:08', '2022-11-30 12:37:21', NULL, '1'),
(6, '6', 'LIBRE', '', '2022-11-30 12:46:21', '2022-11-30 12:47:07', NULL, '1'),
(7, '7', 'LIBRE', '', '2022-11-30 12:51:47', '2022-11-30 01:17:11', NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tickets`
--

CREATE TABLE `tb_tickets` (
  `id_ticket` int(11) NOT NULL,
  `nombre_cliente` varchar(255) DEFAULT NULL,
  `nit_ci` varchar(255) DEFAULT NULL,
  `placa_auto` varchar(255) DEFAULT NULL,
  `cuviculo` varchar(255) DEFAULT NULL,
  `fecha_ingreso` varchar(255) DEFAULT NULL,
  `hora_ingreso` varchar(255) DEFAULT NULL,
  `estado_ticket` varchar(255) DEFAULT NULL,
  `user_sesion` varchar(255) DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tb_tickets`
--

INSERT INTO `tb_tickets` (`id_ticket`, `nombre_cliente`, `nit_ci`, `placa_auto`, `cuviculo`, `fecha_ingreso`, `hora_ingreso`, `estado_ticket`, `user_sesion`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(9, '2312', '2313213', 'SSS555', '1', '2022-11-13', '21:58', 'OCUPADO', 'juan miguel valencia', '2022-11-13 09:59:12', NULL, '2022-11-13 10:27:34', '0'),
(10, 'juan', '12324343', 'FAU449', '2', '2022-11-13', '21:59', 'LIBRE', 'juan miguel valencia', '2022-11-13 09:59:45', NULL, NULL, '1'),
(11, 'pelu', '48522', 'DIM123', '2', '2022-11-13', '21:20', 'LIBRE', 'juan miguel valencia', '2022-11-13 10:21:33', NULL, NULL, '1'),
(12, 'pepe', '23123123', 'JU281', '1', '2022-11-13', '22:45', 'LIBRE', 'juan miguel valencia', '2022-11-13 10:46:35', NULL, NULL, '1'),
(13, 'juan', '12324343', 'FAU449', '1', '2022-11-30', '12:26', 'LIBRE', 'juan miguel valencia', '2022-11-30 01:26:28', NULL, NULL, '1'),
(14, 'juan', '23123123', 'SDF555', '1', '2022-11-30', '12:26', 'LIBRE', 'juan miguel valencia', '2022-11-30 01:26:36', NULL, NULL, '1'),
(15, 'juan', '12324343', 'FAU449', '2', '2022-11-30', '12:26', 'LIBRE', 'juan miguel valencia', '2022-11-30 01:27:30', NULL, NULL, '1'),
(16, 'juan', '23123123', 'SDF555', '1', '2022-11-30', '12:36', 'LIBRE', 'juan miguel valencia', '2022-11-30 01:36:55', NULL, NULL, '1'),
(17, 'juan', '12324343', 'FAU449', '5', '2022-11-30', '12:37', 'LIBRE', 'juan miguel valencia', '2022-11-30 01:37:19', NULL, NULL, '1'),
(18, 'juan', '23123123', 'SDF555', '1', '2022-11-30', '12:38', 'LIBRE', 'juan miguel valencia', '2022-11-30 01:38:14', NULL, NULL, '1'),
(19, 'juan', '23123123', 'SDF555', '1', '2022-11-30', '12:38', 'LIBRE', 'juan miguel valencia', '2022-11-30 01:38:25', NULL, NULL, '1'),
(20, 'juan', '23123123', 'SDF555', '1', '2022-11-30', '12:38', 'LIBRE', 'juan miguel valencia', '2022-11-30 01:38:41', NULL, NULL, '1'),
(21, 'juan', '23123123', 'SDF555', '1', '2022-11-30', '12:38', 'LIBRE', 'juan miguel valencia', '2022-11-30 01:39:30', NULL, NULL, '1'),
(22, 'juan', '23123123', 'SDF555', '1', '2022-11-30', '12:39', 'LIBRE', 'juan miguel valencia', '2022-11-30 01:40:29', NULL, NULL, '1'),
(23, 'juan', '23123123', 'SDF555', '1', '2022-11-30', '12:40', 'LIBRE', 'juan miguel valencia', '2022-11-30 01:41:15', NULL, NULL, '1'),
(24, 'juan', '23123123', 'SDF555', '1', '2022-11-30', '12:43', 'LIBRE', 'juan miguel valencia', '2022-11-30 01:43:18', NULL, NULL, '1'),
(25, 'juan', '23123123', 'SDF555', '1', '2022-11-30', '12:46', 'LIBRE', 'juan miguel valencia', '2022-11-30 12:46:10', NULL, NULL, '1'),
(26, NULL, NULL, 'FAU449', '6', '2022-11-30', '12:46', 'LIBRE', 'juan miguel valencia', '2022-11-30 12:46:31', NULL, NULL, '1'),
(27, 'juan', '12324343', 'FAU449', '6', '2022-11-30', '12:46', 'LIBRE', 'juan miguel valencia', '2022-11-30 12:47:04', NULL, NULL, '1'),
(28, 'juan', '23123123', 'SDF555', '1', '2022-11-30', '12:51', 'LIBRE', 'juan miguel valencia', '2022-11-30 12:51:38', NULL, NULL, '1'),
(29, 'juan', '12324343', 'FAU449', '7', '2022-11-30', '12:51', 'LIBRE', 'juan miguel valencia', '2022-11-30 12:52:03', NULL, NULL, '1'),
(30, 'juan', '23123123', 'SDF555', '1', '2022-11-30', '12:52', 'LIBRE', 'juan miguel valencia', '2022-11-30 12:52:45', NULL, NULL, '1'),
(31, 'juan', '12324343', 'FAU449', '7', '2022-11-30', '12:52', 'LIBRE', 'juan miguel valencia', '2022-11-30 12:52:56', NULL, NULL, '1'),
(32, 'juan', '23123123', 'SDF555', '1', '2022-11-30', '13:15', 'LIBRE', 'juan miguel valencia', '2022-11-30 01:15:40', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(255) DEFAULT NULL,
  `contrasena` varchar(255) DEFAULT NULL,
  `nombre_apellidos` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `contrasena`, `nombre_apellidos`, `email`) VALUES
(19, 'pepe', '$argon2id$v=19$m=65536,t=4,p=1$dmVST2ZvUC9WOXBiTmVrVQ$H4hApDdKNJvX7XjHRqM5CbwYniHrwJagIeFU22sryDQ', 'juan miguel valencia', 'juanm@gmail.com'),
(21, 'freddy1', '$argon2id$v=19$m=65536,t=4,p=1$S1J3U1d0cmh1NjE1MGtDWg$9cqMACkC8WnKs3wMbkENtHcYvO0lKEkNqIzwDWVymq0', 'freddy', 'freddy@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `tb_facturaciones`
--
ALTER TABLE `tb_facturaciones`
  ADD PRIMARY KEY (`id_facturacion`),
  ADD KEY `id_informacion` (`id_informacion`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_ticket` (`id_ticket`);

--
-- Indices de la tabla `tb_informaciones`
--
ALTER TABLE `tb_informaciones`
  ADD PRIMARY KEY (`id_informacion`);

--
-- Indices de la tabla `tb_mapeos`
--
ALTER TABLE `tb_mapeos`
  ADD PRIMARY KEY (`id_map`);

--
-- Indices de la tabla `tb_tickets`
--
ALTER TABLE `tb_tickets`
  ADD PRIMARY KEY (`id_ticket`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tb_facturaciones`
--
ALTER TABLE `tb_facturaciones`
  MODIFY `id_facturacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `tb_informaciones`
--
ALTER TABLE `tb_informaciones`
  MODIFY `id_informacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_mapeos`
--
ALTER TABLE `tb_mapeos`
  MODIFY `id_map` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tb_tickets`
--
ALTER TABLE `tb_tickets`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_facturaciones`
--
ALTER TABLE `tb_facturaciones`
  ADD CONSTRAINT `tb_facturaciones_ibfk_1` FOREIGN KEY (`id_informacion`) REFERENCES `tb_informaciones` (`id_informacion`),
  ADD CONSTRAINT `tb_facturaciones_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `tb_clientes` (`id_cliente`),
  ADD CONSTRAINT `tb_facturaciones_ibfk_3` FOREIGN KEY (`id_ticket`) REFERENCES `tb_tickets` (`id_ticket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
