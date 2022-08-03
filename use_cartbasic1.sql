-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-08-2022 a las 00:06:38
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `use cartbasic1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `client_email` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart_product`
--

CREATE TABLE `cart_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `q` float DEFAULT NULL,
  `cart_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id` int(254) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `price` float NOT NULL,
  `imagen` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `imagen`) VALUES
(1, 'ASUS-90RC00F1', 800, 'imagen/CP-ASUS-90RC00F1-M0AAY0-ff298c.png'),
(2, 'COOLERMASTER-MLW', 950, 'imagen/CP-COOLERMASTER-MLW-D36M-A18PW-RW-64868c.png'),
(3, 'DEEPCOOL-DP-H12RF', 850, 'imagen/CP-DEEPCOOL-DP-H12RF-GL360V2C-1.png'),
(4, 'ENERMAX-ELC', 900, 'imagen/CP-ENERMAX-ELC-LTTO360-TBP-1.png'),
(5, 'INWIN-101WHITE', 1200, 'imagen/CP-INWIN-101WHITE-1.png'),
(6, 'INWIN', 2000, 'imagen/CP-INWIN-303WHITE-1.png'),
(7, 'INWIN-IW', 1800, 'imagen/CP-INWIN-IW-LC-SR36-1.png'),
(8, 'OCELOTGAMING', 1350, 'imagen/CP-OCELOTGAMING-OGMC01-1.png'),
(9, 'XPG-INVADER', 680, 'imagen/CP-XPG-INVADER-BKCWW-1.png'),
(10, 'XPG-INVADER', 2500, 'imagen/CP-XPG-INVADER-WHCWW-1.png'),
(11, 'DDR2 SDRAM Synchronous dynamic', 900, 'imagen/DDR2_SDRAM_Synchronous_dynamic_access+de+memoria.png'),
(12, 'Ddr3 SDRAM', 900, 'imagen/Ddr3_SDRAM_HYPERX.png'),
(13, 'Ddr4 SDRAM', 950, 'imagen/Ddr4_SDRAM_HYPERX.png'),
(14, 'DDR4 SDRAM16GB CORSAIR', 850, 'imagen/DDR4_SDRAM16GB_CORSAIR.png'),
(15, 'gddr5 sdram gaming', 950, 'imagen/gddr5_sdram__gaming.png'),
(16, 'geforce gtx 1050', 35000, 'imagen/geforce_gtx_1050.png'),
(17, 'geforce GTX 1080', 45000, 'imagen/geforce_GTX_1080.png'),
(18, 'geforce gtx 1080ti', 48000, 'imagen/geforce_gtx_1080ti+_lightning+z.png'),
(19, 'geforc', 25000, 'imagen/geforce_micro_star_gddr5_sdram.png'),
(20, 'Memori RAM 4GB', 1200, 'imagen/Memori_RAM_4GB_Fury.png'),
(21, 'monitor Asus', 1300, 'imagen/monitor_Asus.png'),
(22, 'monitor Den', 2000, 'imagen/monitor_Den.jpg'),
(23, 'monitor GET', 2500, 'imagen/monitor_GET.jpg'),
(24, 'monitor Lenovo', 8000, 'imagen/monitor_Lenovo.png'),
(25, 'monitor View', 9500, 'imagen/monitor_View.jpg'),
(26, 'Monitor Xzeal', 4000, 'imagen/Monitor_Xzeal.jpg'),
(27, 'mouse gamer blinden cw903', 950, 'imagen/mouse gamer blinden cw903.png'),
(28, 'mouse gamer blinden vx7', 850, 'imagen/mouse gamer blinden vx7.png'),
(29, 'mouse gamer pro M915', 700, 'imagen/mouse gamer pro M915.png'),
(30, 'mouse inalambrico blinden 905w', 800, 'imagen/mouse inalambrico blinden 905w.png'),
(31, 'mouse vertical inalambrico 24g ergonomico', 2500, 'imagen/mouse vertical inalambrico 2.4g ergonomico.png'),
(32, 'Procesador CORE +I7', 25000, 'imagen/Procesador_CORE_+I7.png'),
(33, 'Procesador CORE I5', 26000, 'imagen/Procesador_CORE_I5.png'),
(34, 'Procesador CORE I9', 30000, 'imagen/Procesador_CORE_I9.png'),
(35, 'Procesador Xeon Intel', 8000, 'imagen/Procesador_Xeon_Intel.png'),
(36, 'Teclado logitech g413', 4000, 'imagen/Teclado_logitech_+g413_+retroiluminado.png'),
(37, 'Teclado MasterKleys', 3500, 'imagen/Teclado_MasterKleys_pro+_RGB.png'),
(38, 'Teclado modelo rgb', 2500, 'imagen/Teclado_modelo_rgb_gaming.png'),
(39, 'Teclado RAZER', 2000, 'imagen/Teclado_RAZER_+RGB.png'),
(40, 'Teclado V.ROM', 3500, 'imagen/Teclado_V.ROM+_RGB.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cart_product`
--
ALTER TABLE `cart_product`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cart_product`
--
ALTER TABLE `cart_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
