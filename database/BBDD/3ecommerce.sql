-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-09-2021 a las 23:27:28
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `3ecommerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart`
--

CREATE TABLE `cart` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `amount` int(10) UNSIGNED NOT NULL,
  `price` double(12,2) UNSIGNED NOT NULL,
  `total` double(12,2) UNSIGNED DEFAULT NULL,
  `user_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `company_id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
(1, 1, 'Celulares', 'celulares.svg', '2021-07-15 17:43:21', '2021-07-15 17:43:21'),
(2, 1, 'Portatiles', 'Portatiles.svg', '2021-07-30 02:58:36', '2021-07-30 02:58:36'),
(3, 1, 'Hardware', 'Hardware.svg', '2021-07-30 03:00:18', '2021-07-30 03:00:18'),
(4, 1, 'Videovigilancia', 'Videovigilancia.svg', '2021-07-30 03:01:29', '2021-07-30 03:01:29'),
(5, 1, 'Cursos Online', 'Cursos Online.svg', '2021-07-30 03:04:14', '2021-07-30 03:04:14'),
(6, 1, 'Consolas', 'Consolas.svg', '2021-07-30 03:08:33', '2021-07-30 03:08:33'),
(7, 1, 'Videojuegos', 'videojuegos.svg', '2021-07-30 03:08:45', '2021-07-30 03:08:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `domain` varchar(50) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `companies`
--

INSERT INTO `companies` (`id`, `name`, `address`, `city`, `domain`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'DEMO', 'Av. Siempre Viva Cl 123', 'Valledupar, Cesar', 'demo', 1, '2021-08-22 02:17:33', '2021-08-22 02:17:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invoice`
--

CREATE TABLE `invoice` (
  `id` int(10) UNSIGNED NOT NULL,
  `total` double(12,2) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `paidout` tinyint(1) DEFAULT NULL,
  `delivered` tinyint(1) DEFAULT NULL,
  `company_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `invoice`
--

INSERT INTO `invoice` (`id`, `total`, `user_id`, `paidout`, `delivered`, `company_id`, `created_at`, `updated_at`) VALUES
(27, 6187500.00, 1, 1, 1, 1, '2021-09-04 17:44:38', '2021-09-04 17:44:38'),
(28, 1237500.00, 1, 1, 1, 1, '2021-09-04 17:45:36', '2021-09-04 17:45:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invoicelist`
--

CREATE TABLE `invoicelist` (
  `id` int(10) UNSIGNED NOT NULL,
  `invoice_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `amount` int(10) UNSIGNED NOT NULL,
  `unit_value` double(12,2) UNSIGNED NOT NULL,
  `total_value` double(12,2) UNSIGNED NOT NULL,
  `discount` tinyint(1) NOT NULL,
  `discount_percentage` double(12,2) UNSIGNED NOT NULL,
  `saving_perunit` double(12,2) UNSIGNED NOT NULL,
  `total_saving` double(12,2) UNSIGNED NOT NULL,
  `shippingtype_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `invoicelist`
--

INSERT INTO `invoicelist` (`id`, `invoice_id`, `product_id`, `amount`, `unit_value`, `total_value`, `discount`, `discount_percentage`, `saving_perunit`, `total_saving`, `shippingtype_id`, `created_at`, `updated_at`) VALUES
(16, 27, 22, 1, 1237500.00, 1237500.00, 1, 23.00, 287500.00, 287500.00, 2, '2021-09-04 17:44:38', '2021-09-04 17:44:38'),
(17, 27, 21, 4, 1237500.00, 4950000.00, 1, 25.00, 312500.00, 1250000.00, 1, '2021-09-04 17:44:39', '2021-09-04 17:44:39'),
(18, 28, 21, 1, 1237500.00, 1237500.00, 1, 25.00, 312500.00, 312500.00, 1, '2021-09-04 17:45:36', '2021-09-04 17:45:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `link` varchar(60) NOT NULL,
  `image` varchar(60) DEFAULT NULL,
  `detail_id` int(10) UNSIGNED DEFAULT NULL,
  `stock` int(10) UNSIGNED NOT NULL,
  `price` double(12,2) UNSIGNED DEFAULT NULL,
  `discount` tinyint(1) DEFAULT NULL,
  `discount_percentage` double(12,2) UNSIGNED DEFAULT NULL,
  `realprice` double(12,2) UNSIGNED DEFAULT NULL,
  `free_send` tinyint(1) DEFAULT NULL,
  `shippingtype_id` int(10) UNSIGNED DEFAULT NULL,
  `outstanding` tinyint(1) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `clavewords` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `category_id`, `company_id`, `name`, `link`, `image`, `detail_id`, `stock`, `price`, `discount`, `discount_percentage`, `realprice`, `free_send`, `shippingtype_id`, `outstanding`, `active`, `user_id`, `created_at`, `updated_at`, `clavewords`) VALUES
(21, 1, 1, 'Oferta Samsung A20s De 32gb + Gratis Forro', 'oferta-samsung-a20s-de-32gb-+-gratis-forro', 'oferta-samsung-a20s-de-32gb-+-gratis-forro.jpg', NULL, 18, 1250000.00, 1, 25.00, 1237500.00, 1, 1, 1, 1, 1, '2021-08-24 00:36:17', '2021-09-04 17:45:36', 'Celular Celulares Oferta Samsung A20s De 32gb + Gratis Forro'),
(22, 1, 1, 'Motorola G8 Play 2021', 'motorola-g8-play-2021', 'motorola-g8-play-2021.jpg', NULL, 22, 1250000.00, 1, 23.00, 1237500.00, 1, 2, 1, 1, 1, '2021-08-25 23:25:47', '2021-09-04 17:44:39', 'Celular Celulares Motorola G8 Play 2021'),
(23, 1, 1, 'Celular LG 2478 A30', 'celular-lg-2478-a30', 'celular-lg-2478-a30.jpg', NULL, 456, 1250000.00, 0, 25.00, 1250000.00, 1, 2, 1, 1, 1, '2021-08-25 23:32:59', '2021-08-26 00:18:23', 'Celular Celulares Celular LG 2478 A30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products_details`
--

CREATE TABLE `products_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) DEFAULT NULL,
  `details` varchar(2000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products_details`
--

INSERT INTO `products_details` (`id`, `product_id`, `details`, `created_at`, `updated_at`) VALUES
(14, 21, 'lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam eracles eurides premium lorem ipsum rapsodam', '2021-08-24 00:36:17', '2021-08-24 00:36:17'),
(15, 22, 'lorem imsup lorem imsuplorem imsuplorem imsuplorem imsuplorem imsuplorem imsuplorem imsuplorem imsuplorem imsuplorem imsuplorem imsuplorem imsuplorem imsuplorem imsuplorem imsuplorem imsuplorem imsuplorem imsuplorem imsuplorem imsuplorem imsuplorem imsuplorem imsuplorem imsuplorem imsuplorem imsuplorem imsup', '2021-08-25 23:25:47', '2021-08-25 23:25:47'),
(16, 23, 'lpoasadsjsd lpoasadsjsd lpoasadsjsd lpoasadsjsd lpoasadsjsd lpoasadsjsd lpoasadsjsd lpoasadsjsd lpoasadsjsd lpoasadsjsd lpoasadsjsd lpoasadsjsd lpoasadsjsd lpoasadsjsd lpoasadsjsd lpoasadsjsd lpoasadsjsd lpoasadsjsd lpoasadsjsd lpoasadsjsd lpoasadsjsd', '2021-08-25 23:32:59', '2021-08-25 23:32:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products_features`
--

CREATE TABLE `products_features` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `feature` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products_features`
--

INSERT INTO `products_features` (`id`, `product_id`, `feature`, `created_at`, `updated_at`) VALUES
(48, 21, 'Memoria ROM de 32 GB', '2021-08-24 00:36:17', '2021-08-24 00:36:17'),
(49, 21, 'Memoria RAM de 3 GB', '2021-08-24 00:36:17', '2021-08-24 00:36:17'),
(50, 21, 'Memoria expandible hasta 512 GB', '2021-08-24 00:36:17', '2021-08-24 00:36:17'),
(51, 21, 'Procesador Qualcomm SDM450 Snapdragon 450', '2021-08-24 00:36:17', '2021-08-24 00:36:17'),
(52, 21, 'Octa-core 1.8GHz GPU Adreno 506', '2021-08-24 00:36:17', '2021-08-24 00:36:17'),
(53, 21, 'Pantalla TFT touchscreen capacitivo, 16M colores', '2021-08-24 00:36:17', '2021-08-24 00:36:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products_images`
--

CREATE TABLE `products_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `route` varchar(110) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products_images`
--

INSERT INTO `products_images` (`id`, `product_id`, `route`, `created_at`, `updated_at`) VALUES
(69, 20, 'oferta-samsung-a20s-de-32gb-+-gratis-forro0.jpg', '2021-08-24 00:35:29', '2021-08-24 00:35:29'),
(70, 20, 'oferta-samsung-a20s-de-32gb-+-gratis-forro1.jpg', '2021-08-24 00:35:29', '2021-08-24 00:35:29'),
(71, 20, 'oferta-samsung-a20s-de-32gb-+-gratis-forro2.jpg', '2021-08-24 00:35:29', '2021-08-24 00:35:29'),
(72, 20, 'oferta-samsung-a20s-de-32gb-+-gratis-forro3.jpg', '2021-08-24 00:35:29', '2021-08-24 00:35:29'),
(73, 21, 'oferta-samsung-a20s-de-32gb-+-gratis-forro0.jpg', '2021-08-24 00:36:17', '2021-08-24 00:36:17'),
(74, 21, 'oferta-samsung-a20s-de-32gb-+-gratis-forro1.jpg', '2021-08-24 00:36:17', '2021-08-24 00:36:17'),
(75, 21, 'oferta-samsung-a20s-de-32gb-+-gratis-forro2.jpg', '2021-08-24 00:36:17', '2021-08-24 00:36:17'),
(76, 21, 'oferta-samsung-a20s-de-32gb-+-gratis-forro3.jpg', '2021-08-24 00:36:17', '2021-08-24 00:36:17'),
(77, 22, 'motorola-g8-play-20210.jpg', '2021-08-25 23:25:47', '2021-08-25 23:25:47'),
(78, 22, 'motorola-g8-play-20211.jpg', '2021-08-25 23:25:47', '2021-08-25 23:25:47'),
(79, 22, 'motorola-g8-play-20212.jpg', '2021-08-25 23:25:47', '2021-08-25 23:25:47'),
(80, 22, 'motorola-g8-play-20213.jpg', '2021-08-25 23:25:47', '2021-08-25 23:25:47'),
(81, 23, 'celular-lg-2478-a300.jpg', '2021-08-25 23:32:59', '2021-08-25 23:32:59'),
(82, 23, 'celular-lg-2478-a301.jpg', '2021-08-25 23:32:59', '2021-08-25 23:32:59'),
(83, 23, 'celular-lg-2478-a302.jpg', '2021-08-25 23:32:59', '2021-08-25 23:32:59'),
(84, 23, 'celular-lg-2478-a303.jpg', '2021-08-25 23:32:59', '2021-08-25 23:32:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products_specs`
--

CREATE TABLE `products_specs` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `spec` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `products_specs`
--

INSERT INTO `products_specs` (`id`, `product_id`, `spec`, `created_at`, `updated_at`) VALUES
(57, 21, 'Cámara trasera Triple, 13 MP (f/1.8) + 8 MP (f/2.2', '2021-08-24 00:36:17', '2021-08-24 00:36:17'),
(58, 21, 'Cámara frontal 8 MP, f/2.0, 1080p', '2021-08-24 00:36:17', '2021-08-24 00:36:17'),
(59, 21, 'Batería Ion-litio de 4000 mAh , integrada', '2021-08-24 00:36:17', '2021-08-24 00:36:17'),
(60, 21, 'Sistema operativo Android 9.0', '2021-08-24 00:36:17', '2021-08-24 00:36:17'),
(61, 21, 'Wi-Fi 802.11 b/g/n; Wi-Fi Direct', '2021-08-24 00:36:17', '2021-08-24 00:36:17'),
(62, 21, 'autofocus, flash LED, IA, geo-tagging, HDR', '2021-08-24 00:36:17', '2021-08-24 00:36:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'ADMIN'),
(2, 'USER'),
(3, 'OWNER');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shippingtypes`
--

CREATE TABLE `shippingtypes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `shippingtypes`
--

INSERT INTO `shippingtypes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Envio gratis', '2021-09-04 17:11:30', '2021-09-04 17:11:38'),
(2, 'Envio a acordar con el vendedor', '2021-09-04 17:11:48', '2021-09-04 17:11:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED DEFAULT NULL,
  `names` varchar(50) NOT NULL,
  `lastnames` varchar(50) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(70) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(150) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `active` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `company_id`, `names`, `lastnames`, `phonenumber`, `role_id`, `email`, `email_verified_at`, `password`, `remember_token`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 'Enrique Jose', 'De Armas Osia', '3227477211', 1, 'ejdao2015@hotmail.com', NULL, '$2y$10$STcY1ZJhKg3yp4Sr3FZ8X.pX14sgmQa.UVlaF7HYBGNMKLWxyju4G', NULL, 1, '2021-07-15 16:44:28', '2021-07-15 16:44:28'),
(2, NULL, 'Raquel', 'Osias', '3045395095', 2, 'raquel@hotmail.com', NULL, '$2y$10$e/ZMum2fg6IBcoiEMD.LpOvsHjfaMOT3LBtvh7e0LeBBiNmRld2ve', NULL, 1, '2021-07-29 03:38:14', '2021-08-22 23:21:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `wishlist`
--

INSERT INTO `wishlist` (`id`, `product_id`, `user_id`, `company_id`, `created_at`, `updated_at`) VALUES
(31, 21, 2, 1, '2021-09-02 17:48:46', '2021-09-02 17:48:46'),
(32, 23, 2, 1, '2021-09-02 17:48:48', '2021-09-02 17:48:48');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `invoicelist`
--
ALTER TABLE `invoicelist`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products_details`
--
ALTER TABLE `products_details`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products_features`
--
ALTER TABLE `products_features`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products_specs`
--
ALTER TABLE `products_specs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `shippingtypes`
--
ALTER TABLE `shippingtypes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `invoicelist`
--
ALTER TABLE `invoicelist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `products_details`
--
ALTER TABLE `products_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `products_features`
--
ALTER TABLE `products_features`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de la tabla `products_specs`
--
ALTER TABLE `products_specs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `shippingtypes`
--
ALTER TABLE `shippingtypes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
