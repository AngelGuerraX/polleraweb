-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-12-2023 a las 03:46:17
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `polleraweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id` int(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `puesto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id`, `usuario`, `password`, `correo`, `puesto`) VALUES
(1, 'Angel Guerra', '12345678', 'angeldroxpro@gmail.com', ''),
(3, 'aaaa', 'aaaa', 'aaaa@ss', 'administrador'),
(8, 'a', '1234', 'angeldroxpro@gmail.com', 'administrador'),
(13, 'q', 'q', '1234@gmail.com', ''),
(15, 'pablo', '1234', 'angeldroxpro@gmail.com', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ventas_pollo`
--

CREATE TABLE `tbl_ventas_pollo` (
  `id` int(11) NOT NULL,
  `preciocompra` varchar(255) NOT NULL,
  `precioventa` varchar(255) NOT NULL,
  `cantlib` varchar(255) NOT NULL,
  `ganancias` varchar(255) NOT NULL,
  `pollodetalle` varchar(255) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `idusuario` varchar(255) NOT NULL,
  `autofecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_ventas_pollo`
--

INSERT INTO `tbl_ventas_pollo` (`id`, `preciocompra`, `precioventa`, `cantlib`, `ganancias`, `pollodetalle`, `cliente`, `idusuario`, `autofecha`) VALUES
(1, '10', '20', '2', '20', 'muerto', 'pablo', 'a', '2023-12-14'),
(2, '20', '30', '10', '100', 'crudo', 'juan', 'a', '2023-12-14'),
(3, '20', '30', '2', '20', 'pico y pala', 'jose', 'pablo', '2023-12-14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_ventas_pollo`
--
ALTER TABLE `tbl_ventas_pollo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tbl_ventas_pollo`
--
ALTER TABLE `tbl_ventas_pollo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
