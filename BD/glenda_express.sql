-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 20-11-2021 a las 20:31:53
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
  `eliminado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'juan alvarado', '', '', 0, NULL, NULL, NULL),
(2, 'juan pedrito', '', '', 0, '2021-11-18 09:16:25', '2021-11-18 09:16:25', NULL),
(3, 'fdsdf', '', '', 0, '2021-11-18 09:17:44', '2021-11-18 13:16:42', '2021-11-18 13:16:42'),
(4, 'dfsdf', '', '', 0, '2021-11-18 09:18:08', '2021-11-18 13:17:03', '2021-11-18 13:17:03'),
(5, 'fdfds', '', '', 0, '2021-11-18 09:18:31', '2021-11-18 09:18:31', NULL),
(6, 'prueba', 'direccion', '1234-1234', 0, '2021-11-18 09:31:03', '2021-11-18 09:31:03', NULL);

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
  `eliminado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `imagen` varchar(300) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `eliminado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `tipo` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `observacion` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento_estados`
--

CREATE TABLE `seguimiento_estados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `eliminado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `direccion` varchar(300) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `eliminado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `ordenes_detalle`
--
ALTER TABLE `ordenes_detalle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_orden` (`id_orden`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `ordenes_online`
--
ALTER TABLE `ordenes_online`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

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
  ADD KEY `seguimiento_ibfk_2` (`id_orden`),
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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ordenes_detalle`
--
ALTER TABLE `ordenes_detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ordenes_online`
--
ALTER TABLE `ordenes_online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `seguimiento_estados`
--
ALTER TABLE `seguimiento_estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
-- Filtros para la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD CONSTRAINT `ordenes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`),
  ADD CONSTRAINT `ordenes_ibfk_2` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`);

--
-- Filtros para la tabla `ordenes_detalle`
--
ALTER TABLE `ordenes_detalle`
  ADD CONSTRAINT `ordenes_detalle_ibfk_1` FOREIGN KEY (`id_orden`) REFERENCES `ordenes` (`id`),
  ADD CONSTRAINT `ordenes_detalle_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `ordenes_online`
--
ALTER TABLE `ordenes_online`
  ADD CONSTRAINT `ordenes_online_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`);

--
-- Filtros para la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  ADD CONSTRAINT `seguimiento_ibfk_1` FOREIGN KEY (`id_orden`) REFERENCES `ordenes` (`id`),
  ADD CONSTRAINT `seguimiento_ibfk_2` FOREIGN KEY (`id_orden`) REFERENCES `ordenes_online` (`id`),
  ADD CONSTRAINT `seguimiento_ibfk_3` FOREIGN KEY (`id_estado`) REFERENCES `seguimiento_estados` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
