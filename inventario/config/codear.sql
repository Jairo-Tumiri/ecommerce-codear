-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2022 a las 04:15:50
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `codear`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `id_compra` int(11) NOT NULL,
  `total_compra` decimal(15,2) NOT NULL,
  `fecha_compra` date NOT NULL,
  `tipo_tarjeta` varchar(25) NOT NULL,
  `numero_tajeta` int(11) NOT NULL,
  `tipo_transferencia` varchar(25) NOT NULL,
  `cantidad_cuotas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(6) NOT NULL,
  `imagen` varchar(1000) NOT NULL,
  `iframe` varchar(100) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `creador` varchar(100) NOT NULL,
  `descripcion_uno` text NOT NULL,
  `descripcion_dos` text NOT NULL,
  `link_descarga` varchar(100) NOT NULL,
  `precio` float(10,2) NOT NULL,
  `id_categoria` int(6) NOT NULL,
  `id_membresia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `imagen`, `iframe`, `nombre`, `creador`, `descripcion_uno`, `descripcion_dos`, `link_descarga`, `precio`, `id_categoria`, `id_membresia`) VALUES
(1, 'https://plantillashtmlgratis.com/wp-content/uploads/2019/images/page244/ziggy.jpeg', 'https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page244/ziggy/', 'jhon', 'jairo', 'jhon jairo tumiri sdasdasdasdasdasdasdasdasdasdadasdadasdasdasdasdasdasd', '', '', 1000.00, 1, 1),
(4, 'https://plantillashtmlgratis.com/wp-content/uploads/2019/images/page198/venue.jpeg', 'https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page198/venue/', 'Lucas', 'Lucas delgado', 'Lucas Delgado', '', '', 700.00, 2, 1),
(5, 'https://plantillashtmlgratis.com/wp-content/uploads/2019/images/page260/mini-profile.jpeg', 'https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page260/mini-profile/', 'Leidy', '123123123', 'asdasdsdasdasd', '', '', 12312.00, 1, 1),
(6, 'https://plantillashtmlgratis.com/wp-content/uploads/2019/images/page245/lumia.jpeg', 'https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page245/lumia/', 'asdasda', 'asdasdasd', 'asdasdasdas', '123123123123', 'https://plantillashtmlgratis.com/wp-content/themes/helium-child/descargas/page245/lumia.zip', 1231231.00, 1, 1),
(8, 'https://plantillashtmlgratis.com/wp-content/uploads/2019/images/page276/diigo.jpeg', 'https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page276/diigo/', 'poipyuiopyi', 'opyuipyuipy', 'hjkgjhtjyuot6nyuior6', '', '', 222.00, 1, 2),
(9, 'https://plantillashtmlgratis.com/wp-content/uploads/2019/images/page273/summer.jpeg', 'https://plantillashtmlgratis.com/wp-content/themes/helium-child/vista_previa/page273/summer/', 'ppppipiipi', 'ippipipi', 'ipippipippip', 'ipipiipippipipippi', 'https://plantillashtmlgratis.com/wp-content/themes/helium-child/descargas/page273/summer.zip', 12312312.00, 12, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` smallint(6) NOT NULL,
  `imagen_usuario` varchar(100) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `apellido_usuario` varchar(50) NOT NULL,
  `telefono` int(15) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  `descargas` varchar(1000) NOT NULL,
  `tipo_usuario` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `imagen_usuario`, `nombre_usuario`, `apellido_usuario`, `telefono`, `pais`, `email`, `contraseña`, `descargas`, `tipo_usuario`) VALUES
(2, '', 'jairo', 'tumiri', 1141430021, 'Argentina', 'prueba.jairo@codear.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 2),
(4, '', 'Diego', 'Rojas', 1141430021, 'Argentina', 'prueba.diego@codear.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 3),
(5, '', 'lucas', 'duarte', 1141430021, 'Argentina', 'prueba.lucas@codear.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 2),
(9, '1.png', 'ADMIN', 'CODEAR', 2147483647, 'Argentina', 'admin@codear.com', '21232f297a57a5a743894a0e4a801fc3', '', 1),
(13, '3.png', 'PREMIUM', 'CODEAR', 1141430021, 'Argentina', 'premium@codear.com', 'a288195832f8717bca4671416014a464', '', 2),
(14, '2.png', 'BASICO', 'CODEAR', 2147483647, 'España', 'basico@codear.com', '4069743c5c82111a7a66113eb450e95d', '', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`id_compra`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
