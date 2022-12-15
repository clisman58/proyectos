-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-01-2021 a las 17:09:02
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

create database usuarios;
use usuarios;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioss`
--

CREATE TABLE `usuarioss` (
  `id` int(11) NOT NULL,
  `usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DNI` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `sexo` text COLLATE utf8_unicode_ci NOT NULL,
  `cargo` text COLLATE utf8_unicode_ci NOT NULL,
  `estado` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `clientes` (
 `id_cli` int(11) not null,
 `nom_user` varchar(20) not null,
 `ape_user` varchar(45) not null,
 `telf_user` varchar(9) not null,
 `dni_user` char(8) not null,
 `sex_user` char(1) not null,
 `direc_user` varchar(45) not null
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

create table producto(
 id_pro int(11) not null,
 tipo_pro varchar(60) not null,
 marca_pro varchar(60) not null,
 precio_pro char(10) not null,
 detalle_pro varchar(100) not null
);

create table tienda(
 id_ti int(11) not null,
 nom_ti varchar(60) not null,
 nom_prop_ti varchar(60) not null,
 direc_ti varchar(45) not null,
 telf_ti varchar(9) not null,
 rubro_ti varchar(40) not null
);

create table detalle_de_pedido(
 id_DdP int(11) not null,
 distrito varchar(100) not null
);

create table pedido(
 id_pe int(11) not null,
 nom_pe varchar(60) not null,
 Estado_pe int not null,
 Precio_pe char(10) not null
);
--
-- Volcado de datos para la tabla `usuarioss`
--

INSERT INTO `usuarioss` (`id`, `usuario`, `password`, `email`, `nombre`, `apellidos`, `DNI`, `telefono`, `sexo`, `cargo`, `estado`) VALUES
(1, 'clis10', '$2y$10$6kpJ0.9ZJGBprayv3Wf0iOdeUeArECoTCVJhYy0JWv7lJdWNAjKSu', 'kibar_623@hotmail.com', 'dqwd', 'qd', 72641240, 941041092, 'Masculino', 'administrador', 'activo'),
(2, 'clis10', '$2y$10$VuYSOGrKVKdjPjFrIluQCegsyRWEJcjuYB5z/UvQpOqLRcQhZeF3u', 'kibar_623@hotmail.com', 'dqwd', 'qd', 72641240, 941041092, 'Masculino', 'administrador', 'activo'),
(3, 'clisman58', '$2y$10$.KgNz4TWyPDQd1p7E4.LIeKEvTObo.L6faHykds4Csbg3RmmKgBM2', 'kibar_623@hotmail.com', 'clisman', 'tucto venturo', 72641240, 941041092, 'Masculino', 'repartidor', 'activo'),
(4, 'clis10', '$2y$10$JZYI06oC5nGzajxDMlMwBeHupc9DpFN1HaSRWyf4xtRezpeo9QMpO', 'kibar_623@hotmail.com', 'dqwd', 'qd', 72641240, 941041092, 'Masculino', 'administrador', 'activo'),
(5, 'clis10', '$2y$10$3CubCWp09a7dZQ.a0uwtiunWo9SDj0cdLIW3xvHkhbWn4vxs9GCu.', 'maryori_tv_123@hotmail.com', 'clisman', 'tucto venturo', 72641240, 941041092, 'Femenino', 'administrador', 'activo');

INSERT INTO `clientes` (`id_cli`, `nom_user`, `ape_user`, `telf_user`, `dni_user`, `sex_user`, `direc_user`) VALUES
(1, 'Chuan', 'Picon', 987654321, 12345678, 'Masculino', 'Jr. Crespo Castillo #674'),
(2, 'Daniel', 'Cortez', 987532321, 12323478, 'Masculino', 'Jr. Abtao #233'),
(3, 'Laura', 'Bernachea', 987643221, 125442678, 'Femenino', 'Jr. Ayancocha #323');

INSERT INTO `producto` (`id_pro`, `tipo_pro`, `marca_pro`, `precio_pro`, `detalle_pro`) VALUES
(1, 'Fragil', 'Peru', 50, 'Vasos de vidrio'),
(2, 'Fragil', 'Phillips', 20, 'Focos LED'),
(3, 'Fragil', 'Queirolo', 60, 'Caja de Vino');

INSERT INTO `tienda` (`id_ti`, `nom_ti`, `nom_prop_ti`, `direc_ti`, `telf_ti`, `rubro_ti`) VALUES
(1, 'Plaza Vea', 'Juan Pancho Gutierritos', 'Jr. Crespo Castillo #674', 987654321, 'Hogar'),
(2, 'Tottus', 'Sushi Alvarado Morales', 'Jr. Dos de Mayo #674', 987654321, 'Ferreteria'),
(3, 'Casa de Vino', 'Wyski Champan  Rikolino', 'Jr. Abtao #674', 987654321, 'Licoreria');

INSERT INTO `detalle_de_pedido` (`id_DdP`, `distrito`) VALUES
(1, 'Huánuco'),
(2, 'Huánuco'),
(3, 'Amarilis');

INSERT INTO `pedido` (`id_pe`, `nom_pe`, `Estado_pe`, `Precio_pe`) VALUES
(1, 'Pedido 001', 'Por etregar', 50),
(2, 'Pedido 002', 'Por etregar', 20),
(3, 'Pedido 003', 'Por etregar', 60);

-- Índices para tablas volcadas
ALTER TABLE `usuarioss`
  ADD PRIMARY KEY (`id`);
-- AUTO_INCREMENT de la tabla `usuarioss`
ALTER TABLE `usuarioss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cli`);
-- AUTO_INCREMENT de la tabla `usuarioss`
ALTER TABLE `clientes`
  MODIFY `id_cli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_pro`);
-- AUTO_INCREMENT de la tabla `usuarioss`
ALTER TABLE `producto`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

ALTER TABLE `tienda`
  ADD PRIMARY KEY (`id_ti`);
-- AUTO_INCREMENT de la tabla `usuarioss`
ALTER TABLE `tienda`
  MODIFY `id_ti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

ALTER TABLE `detalle_de_pedido`
  ADD PRIMARY KEY (`id_DdP`);
-- AUTO_INCREMENT de la tabla `usuarioss`
ALTER TABLE `detalle_de_pedido`
  MODIFY `id_DdP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pe`);
-- AUTO_INCREMENT de la tabla `usuarioss`
ALTER TABLE `pedido`
  MODIFY `id_pe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


