-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 04-12-2021 a las 23:00:04
-- Versión del servidor: 10.3.29-MariaDB-0+deb10u1
-- Versión de PHP: 7.3.29-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `glenda_express`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'categoria 10', '2021-12-04 10:38:01', '2021-12-04 10:38:13', '0000-00-00 00:00:00'),
(2, 'categoria 11', '2021-12-04 22:42:52', '2021-12-04 22:42:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `direccion` varchar(300) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `eliminado` tinyint(4) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `direccion`, `telefono`, `eliminado`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'cliente 1', '-', '7560-9655', 0, '2021-12-04 10:41:08', '2021-12-04 10:41:08', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `id` int(11) NOT NULL,
  `precio_libra` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id` int(11) NOT NULL,
  `id_orden` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `subtotal` decimal(10,4) NOT NULL,
  `peso` decimal(10,4) NOT NULL,
  `impuestos` decimal(10,4) NOT NULL,
  `total` decimal(10,4) NOT NULL,
  `fecha` date NOT NULL,
  `hora` decimal(10,4) NOT NULL,
  `estado` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura_estados`
--

CREATE TABLE `factura_estados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `envia` varchar(200) NOT NULL,
  `recibe` varchar(200) NOT NULL,
  `direccion_entrega` varchar(300) NOT NULL,
  `numero_seguimiento` varchar(200) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `precio_pedido` decimal(10,4) NOT NULL,
  `imagen` varchar(300) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ordenes`
--

INSERT INTO `ordenes` (`id`, `id_usuario`, `id_cliente`, `envia`, `recibe`, `direccion_entrega`, `numero_seguimiento`, `fecha_entrega`, `precio_pedido`, `imagen`, `fecha`, `hora`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'juan gomez', 'juan perez', 'el salvador', '61ab9a5c5f6a1', '0000-00-00', '12.0000', '', '2021-12-04', '10:42:04', '2021-12-04 10:42:04', '2021-12-04 10:42:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes_detalle`
--

CREATE TABLE `ordenes_detalle` (
  `id` int(11) NOT NULL,
  `id_orden` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(10,4) NOT NULL,
  `peso` decimal(10,4) NOT NULL,
  `subtotal` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ordenes_detalle`
--

INSERT INTO `ordenes_detalle` (`id`, `id_orden`, `id_producto`, `cantidad`, `precio`, `peso`, `subtotal`) VALUES
(1, 1, 1, 1, '12.0000', '2.0000', '12.0000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes_online`
--

CREATE TABLE `ordenes_online` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `numero_seguimiento` varchar(200) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_pedido` decimal(10,4) NOT NULL,
  `total_facturar` decimal(10,4) NOT NULL,
  `imagen` varchar(300) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `estado` int(11) NOT NULL COMMENT '0 pendiente, 1 facturado,2 entregado',
  `eliminado` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ordenes_online`
--

INSERT INTO `ordenes_online` (`id`, `id_usuario`, `numero_seguimiento`, `fecha_entrega`, `descripcion`, `cantidad`, `precio_pedido`, `total_facturar`, `imagen`, `fecha`, `hora`, `estado`, `eliminado`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2343243234', '2021-12-04', 'este es un pedido', 1, '10.0000', '20.0000', '', '0000-00-00', '00:00:00', 1, 0, '2021-12-04 10:15:13', '2021-12-04 10:33:31', '0000-00-00 00:00:00'),
(2, 2, '76876776678867768', '2021-12-04', 'medicamentos de emergencia', 1, '30.0000', '30.0000', '', '0000-00-00', '00:00:00', 1, 0, '2021-12-04 10:59:38', '2021-12-04 11:02:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes`
--

CREATE TABLE `paquetes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paquetes`
--

INSERT INTO `paquetes` (`id`, `nombre`, `id_categoria`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'queso', 2, '2021-12-04 10:40:28', '2021-12-04 22:42:58', '0000-00-00 00:00:00'),
(2, 'paquete de prueba', 1, '2021-12-04 22:40:08', '2021-12-04 22:40:08', '0000-00-00 00:00:00'),
(3, 'otro paquete', 1, '2021-12-04 22:41:03', '2021-12-04 22:41:03', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `eliminado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento`
--

CREATE TABLE `seguimiento` (
  `id` int(11) NOT NULL,
  `id_orden` int(11) NOT NULL,
  `tipo` int(11) NOT NULL COMMENT '1 normal, 2 online',
  `id_estado` int(11) NOT NULL,
  `observacion` varchar(300) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seguimiento`
--

INSERT INTO `seguimiento` (`id`, `id_orden`, `tipo`, `id_estado`, `observacion`, `fecha`, `hora`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, 1, 'esta es una observacion', '2021-12-04', '10:32:03', '2021-12-04 10:32:03', '2021-12-04 10:32:03', '0000-00-00 00:00:00'),
(2, 1, 2, 2, '', '2021-12-04', '10:32:28', '2021-12-04 10:32:28', '2021-12-04 10:32:28', '0000-00-00 00:00:00'),
(3, 1, 2, 5, '', '2021-12-04', '10:35:37', '2021-12-04 10:35:37', '2021-12-04 10:35:37', '0000-00-00 00:00:00'),
(4, 2, 2, 1, '', '2021-12-04', '11:00:29', '2021-12-04 11:00:29', '2021-12-04 11:00:29', '0000-00-00 00:00:00'),
(5, 2, 2, 2, '', '2021-12-04', '11:00:53', '2021-12-04 11:00:53', '2021-12-04 11:00:53', '0000-00-00 00:00:00'),
(6, 2, 2, 3, '', '2021-12-04', '11:01:52', '2021-12-04 11:01:52', '2021-12-04 11:01:52', '0000-00-00 00:00:00'),
(7, 2, 2, 4, '', '2021-12-04', '11:02:11', '2021-12-04 11:02:11', '2021-12-04 11:02:11', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento_estados`
--

CREATE TABLE `seguimiento_estados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `icono` varchar(100) NOT NULL,
  `eliminado` tinyint(4) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `seguimiento_estados`
--

INSERT INTO `seguimiento_estados` (`id`, `nombre`, `icono`, `eliminado`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ORDENADO', '	fa fa-spinner', 0, NULL, NULL, NULL),
(2, 'RECIBIDO', 'fa fa-cubes', 0, NULL, NULL, NULL),
(3, 'EN CAMINO', 'fa fa-truck', 0, NULL, NULL, NULL),
(4, 'LISTO', 'fa fa-check', 0, NULL, NULL, NULL),
(5, 'ENTREGADO', 'fa fa-home', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `password` longtext NOT NULL,
  `direccion` varchar(300) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `eliminado` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `password`, `direccion`, `telefono`, `correo`, `eliminado`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'francisco', 'eyJjaXBoZXJ0ZXh0IjoiSHhvZ29mTG5mV1QwOFRoTnQrUG0zQT09IiwiaXYiOiI3ZWE5NDMwN2Y3YjQxODIwYmMyMzljODY0Y2ZiMjhlNSIsInNhbHQiOiI0MzA4YWRjYWM1YTI3OTBlYTVhOGFmZGYzMWQyMmYzZGFmYTgzZTFiYzlkOGIxMjk4NTA4ZTkwMDNmM2VmN2EyZmFhYzdlYTNiMmY5MGZjODc1MmViYzFjMWE1ODlhNjAzNDFlNjcxNDQxNzU5M2QwMjA2NGIxODFlMjU4NDNmOTE0Yjc4OTkyMzJmZjA5NWY0MmJlODZhOGUyNGM0ZWRjM2VlNzRlOTE3MTIxNzdlNmM1OTU3YzdjYTQwMjJkZmQ2N2MxMGM2MGRlODUwZjcyZGRkYzVhMDE2OTcxNTQ4MjI1ZDMxNDJkMDEyMDk4YmQ4MGI4ZjdjYTdlZDFkYzZiMTMzYmIzMzU4OGMwMjhkMzI0MWM4NWM3OTk5YzRjMTE2YzQ4NjNhOGExZDdkZGQ4ZDZkZGE5YjBiYWRlY2ZjODMwNmExM2JkNmExNTYxMjczZGMxZmYzYzU0YmY0ODcyZDU2OTc2ZjFiYzJlN2VlYTA3MWNmNjI4OTFlNmFjM2UzYzk5ZDljZGY4ZDIwOWE1ZTgyNWI4ZjIyNWI4YmQyYjY4Y2Y1YjgyNzZjMmJkMDkzNDQ4NTA2MzlmN2M1NDRkZDFmNjNhYjAwMWVkZmEzMjdjYTE2NmY2Njc1ZDQ3YmRkYTFjZjJlY2ViYjBmMzc4MTdmMGYxODkxNTg4YzA2NiIsIml0ZXJhdGlvbnMiOjk5OX0=', '', '7576-6222', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_tienda`
--

CREATE TABLE `usuario_tienda` (
  `id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `password` longtext NOT NULL,
  `direccion` varchar(300) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `eliminado` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario_tienda`
--

INSERT INTO `usuario_tienda` (`id`, `usuario`, `password`, `direccion`, `telefono`, `correo`, `eliminado`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'francisco', 'c34756e710debf58ae279ad1a2e10050c830981e9a3480bbab6cfd3ec6afd65a7e40fe7bac9ff3038b14c1e89b48b8b79c440f0451c7dcf166dc01ce665d49cd/TW3scWTPI5dt1b8Xz05d4oytAVPMIi3E5WaSFkQAfg=\r\n\r\n', 'barrio independencia, moncagua', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_orden` (`id_orden`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `estado` (`estado`);

--
-- Indices de la tabla `factura_estados`
--
ALTER TABLE `factura_estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ordenes_detalle`
--
ALTER TABLE `ordenes_detalle`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ordenes_online`
--
ALTER TABLE `ordenes_online`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `seguimiento_estados`
--
ALTER TABLE `seguimiento_estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario_tienda`
--
ALTER TABLE `usuario_tienda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `factura_estados`
--
ALTER TABLE `factura_estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ordenes_detalle`
--
ALTER TABLE `ordenes_detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ordenes_online`
--
ALTER TABLE `ordenes_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `seguimiento_estados`
--
ALTER TABLE `seguimiento_estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario_tienda`
--
ALTER TABLE `usuario_tienda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`id_orden`) REFERENCES `ordenes` (`id`),
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`id_orden`) REFERENCES `ordenes_online` (`id`),
  ADD CONSTRAINT `factura_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `factura_ibfk_4` FOREIGN KEY (`estado`) REFERENCES `factura_estados` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`);

--
-- Filtros para la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  ADD CONSTRAINT `seguimiento_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `seguimiento_estados` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
