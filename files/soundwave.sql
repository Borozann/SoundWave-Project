-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Jan-2024 às 16:17
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `soundwave`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carts`
--

CREATE TABLE `carts` (
  `ID_CART` int(11) NOT NULL,
  `WAS_PAID` enum('paid','not paid') DEFAULT NULL,
  `QUANTITY` int(11) DEFAULT NULL,
  `ID_CLIENT` int(11) DEFAULT NULL,
  `ID_PRODUCT` int(11) DEFAULT NULL,
  `ID_TRANSACTION` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carts`
--

INSERT INTO `carts` (`ID_CART`, `WAS_PAID`, `QUANTITY`, `ID_CLIENT`, `ID_PRODUCT`, `ID_TRANSACTION`) VALUES
(183, 'paid', 1, 19, 6, 6),
(184, 'paid', 1, 19, 6, 6),
(185, 'paid', 1, 19, 8, 7),
(186, 'paid', 1, 19, 8, 8),
(187, 'paid', 1, 19, 9, 8),
(188, 'paid', 1, 19, 9, 8),
(189, 'paid', 1, 19, 9, 9),
(190, 'paid', 1, 19, 9, 9),
(191, 'paid', 1, 19, 6, 11),
(192, 'paid', 1, 19, 6, 11),
(193, 'paid', 1, 19, 8, 11),
(194, 'paid', 1, 19, 6, 12),
(195, 'paid', 1, 19, 6, 12),
(196, 'paid', 1, 19, 9, 12),
(197, 'paid', 1, 19, 8, 13),
(198, 'paid', 1, 19, 6, 15),
(199, 'paid', 1, 19, 6, 16),
(200, 'paid', 1, 19, 8, 16),
(201, 'paid', 1, 19, 6, 17),
(202, 'paid', 1, 19, 6, 17),
(203, 'paid', 1, 19, 8, 17),
(204, 'paid', 1, 19, 6, 18),
(205, 'paid', 1, 19, 6, 18),
(206, 'paid', 1, 19, 9, 18),
(207, 'paid', 1, 19, 8, 19),
(208, 'paid', 1, 19, 8, 19),
(209, 'paid', 1, 19, 6, 20),
(210, 'paid', 1, 19, 6, 20),
(211, 'paid', 1, 19, 8, 21),
(212, 'paid', 1, 19, 9, 21),
(213, 'paid', 1, 20, 10, 22),
(214, 'paid', 1, 20, 9, 24),
(215, 'paid', 1, 20, 9, 27),
(216, 'paid', 1, 20, 9, 34),
(217, 'paid', 1, 20, 8, 35),
(218, 'paid', 1, 20, 9, 35),
(219, 'paid', 1, 20, 9, 35),
(220, 'paid', 1, 20, 6, 36),
(221, 'paid', 1, 20, 6, 38),
(222, 'paid', 1, 20, 8, 38),
(223, 'paid', 1, 20, 9, 39),
(224, 'paid', 1, 20, 9, 39),
(225, 'paid', 1, 20, 9, 40),
(226, 'paid', 1, 20, 8, 40),
(227, 'paid', 1, 20, 6, 42),
(228, 'paid', 1, 20, 9, 43),
(229, 'paid', 1, 20, 6, 45),
(230, 'paid', 1, 20, 9, 45),
(231, 'paid', 1, 20, 8, 45),
(232, 'paid', 1, 20, 9, 46),
(233, 'paid', 1, 20, 9, 46),
(234, 'paid', 1, 19, 8, 47),
(235, 'paid', 1, 34, 15, 48),
(236, 'paid', 1, 34, 15, 48),
(237, 'paid', 1, 34, 15, 48),
(238, 'paid', 1, 34, 15, 48),
(239, 'paid', 1, 34, 15, 48),
(240, 'paid', 1, 34, 15, 48),
(241, 'paid', 1, 34, 17, 49),
(242, 'paid', 1, 34, 17, 49),
(243, 'paid', 1, 34, 19, 50),
(244, 'paid', 1, 34, 15, 51),
(245, 'paid', 1, 34, 15, 51),
(246, 'paid', 1, 34, 15, 51),
(247, 'paid', 1, 34, 15, 51),
(248, 'paid', 1, 34, 16, 51),
(249, 'paid', 1, 34, 16, 51),
(250, 'paid', 1, 34, 6, 52),
(251, 'paid', 1, 34, 6, 52),
(252, 'paid', 1, 34, 6, 53),
(253, 'paid', 1, 34, 6, 53),
(254, 'paid', 1, 34, 6, 53),
(255, 'paid', 1, 34, 22, 54),
(256, 'paid', 1, 34, 22, 54),
(257, 'paid', 1, 34, 22, 54),
(258, 'paid', 1, 34, 22, 55),
(259, 'paid', 1, 34, 22, 55),
(260, 'paid', 1, 34, 16, 55),
(261, 'paid', 1, 19, 22, 56),
(262, 'paid', 1, 19, 23, 56),
(263, 'paid', 1, 19, 23, 56),
(264, 'paid', 1, 19, 22, 57),
(265, 'paid', 1, 19, 23, 57),
(266, 'paid', 1, 19, 23, 57),
(267, 'paid', 1, 19, 25, 57),
(268, 'paid', 1, 34, 22, 58),
(269, 'paid', 1, 34, 22, 58),
(270, 'paid', 1, 34, 23, 59),
(271, 'paid', 1, 34, 23, 59),
(272, 'paid', 1, 34, 25, 59),
(273, 'paid', 1, 34, 22, 59),
(274, 'not paid', 1, 34, 23, NULL),
(275, 'not paid', 1, 34, 23, NULL),
(276, 'not paid', 1, 34, 23, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `ID_CATEGORY` int(11) NOT NULL,
  `NAME` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`ID_CATEGORY`, `NAME`) VALUES
(1, 'HeadPhones'),
(2, 'Speakers'),
(5, 'Desconhecido');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `ID_CLIENT` int(11) NOT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `NAME` varchar(25) DEFAULT NULL,
  `SURNAME` varchar(25) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(250) DEFAULT NULL,
  `DATE_CREATION` date DEFAULT NULL,
  `ADMIN` tinyint(1) DEFAULT 0,
  `IP` varchar(40) DEFAULT NULL,
  `ACTIVE` enum('on','off') DEFAULT 'off',
  `LAST_BEAT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`ID_CLIENT`, `USERNAME`, `NAME`, `SURNAME`, `EMAIL`, `PASSWORD`, `DATE_CREATION`, `ADMIN`, `IP`, `ACTIVE`, `LAST_BEAT`) VALUES
(18, 'Jose14', 'José', 'Santos', 'jsanto@gmail.com', '$2y$10$KUt4WDdotO2J.kaXUbCwE.yYUk5e7y1gKq1OOZQ89ZdkjyScjBxoW', '2023-11-28', NULL, NULL, 'off', NULL),
(19, 'Diogo', 'Diogo', 'Silva', 'silv@gmail.com', '$2y$10$W2ZgxsLrP4VjrSkw5J25QeMJM8pVcTwgKjbEPaAmg/a2mwwbsVd82', '2023-11-28', NULL, NULL, 'off', NULL),
(20, 'Gabriel', 'Gabriel', 'Borozan', 'gab@gmail.com', '$2y$10$C6LQmF3aJgpmO6jOT8.Mme71XjTTEOGPAPcH56MDer9raE.IcRw0q', '2023-11-30', 1, NULL, 'off', NULL),
(22, 'teste', 'teste', 'teste', 'teste@gmail.com', '$2y$10$PK45DC01irHFOGZuC8ayROcXNIEbLirXUnu6v6E9vLps6Rb8.Nzza', '2023-11-30', NULL, NULL, 'off', NULL),
(23, 'teste123', 'teste123', 'teste123', 'teste123@gmail.com', '$2y$10$nUkoVKCPeVSQehQMmbq6oOZXAwHbP65ViQtBcCXpzBb3kjgsyHz.2', '2023-12-04', NULL, NULL, 'off', NULL),
(24, 'teste', 'teste', 'teste', 'teste@gmail.com', '$2y$10$8XuCo/sEk8lSMYJEdvnFkOBNRDGbch0ptrJGYcaBS2o/PciIeQu2i', '2023-12-06', NULL, NULL, 'off', NULL),
(25, 'teste141', 'dsa', 'fdsa', 'fds@gmnsgjs', '$2y$10$lCDtYTZnTs3q/QKIm9vfDub9T3YyBavy./uKs3X8dY6v/K973xp6i', '2023-12-06', NULL, NULL, 'off', NULL),
(26, 'manel', 'manel', 'manel', 'manel@gmail.com', '$2y$10$QLwfzD9k8nS8/6ILSCdBxuPRxJlnCGxC8dAC2iyYlR6sjbjgeLDzO', '2023-12-06', NULL, NULL, 'off', NULL),
(31, 'aadwaaa', 'awdadaaa', 'awdawdaw', 'awdawad@gmail.com', '$2y$10$KWxEAEoosS.aeMu6o3Rv8OC0cbkBa8Nc0pdtUPQ8GlDmBrGmY.oj6', '2023-12-07', NULL, '::1', 'off', NULL),
(34, 'admin', 'admin', 'admin', 'admin@gmail.com', '$2y$10$maz9.wIQAIqa5T.F0bS3iuJLHx7j9fyZrTZjwkBpoiJ7tDuMrwgBC', '2024-01-10', 1, NULL, 'on', '2024-01-19'),
(35, 'testeee', '123', '123', '123@gmail.com', '$2y$10$N1u9oUFhmuJQUHmoxpRls.1vSot.GhXgkM39LClCxxlSTXcl0CKD.', '2024-01-10', NULL, '::1', 'off', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `comments`
--

CREATE TABLE `comments` (
  `ID_COMMENT` int(11) NOT NULL,
  `TEXT` varchar(300) DEFAULT NULL,
  `ID_RATING` int(11) DEFAULT NULL,
  `ID_PRODUCT` int(11) DEFAULT NULL,
  `ID_CLIENT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `comments`
--

INSERT INTO `comments` (`ID_COMMENT`, `TEXT`, `ID_RATING`, `ID_PRODUCT`, `ID_CLIENT`) VALUES
(3, 'podia ser melhor', 4, 22, 9),
(4, 'fixe...', 3, 22, 9),
(5, 'olaaa', 5, 22, 9),
(6, 'Uauauuuuu', 6, 22, 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `discounts`
--

CREATE TABLE `discounts` (
  `ID_DISCOUNT` int(11) NOT NULL,
  `AMOUNT` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `discounts`
--

INSERT INTO `discounts` (`ID_DISCOUNT`, `AMOUNT`) VALUES
(1, 0),
(2, 10),
(3, 20),
(4, 25),
(5, 30),
(6, 50);

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `ID_PRODUCT` int(11) NOT NULL,
  `NAME` varchar(100) DEFAULT 'Sem Nome.',
  `IMAGE` varchar(200) DEFAULT NULL,
  `DESCRIPTION` varchar(300) DEFAULT 'Sem Texto.',
  `PRICE` decimal(10,2) DEFAULT 0.00,
  `STOCK` int(11) DEFAULT 0,
  `ID_SUPPLIER` int(11) DEFAULT 3,
  `ID_CATEGORY` int(11) DEFAULT 5,
  `ID_DISCOUNT` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`ID_PRODUCT`, `NAME`, `IMAGE`, `DESCRIPTION`, `PRICE`, `STOCK`, `ID_SUPPLIER`, `ID_CATEGORY`, `ID_DISCOUNT`) VALUES
(22, 'Auriculares Bluetooth True Wireless JBL', 'imagens_produtos/65ae9114f1c0d.png', 'Fones Wireless', '70.00', 6, 1, 1, 1),
(23, 'Auscultador BEATS Studio Pro (Preto)', 'imagens_produtos/65afb99faf1ae.png', '', '399.00', 10, 1, 1, 1),
(24, 'Coluna Bluetooth JBL Flip 5 Ecco Forest', 'imagens_produtos/65afba39d4992.png', '', '273.00', 0, 1, 2, 1),
(25, 'Auriculares  JLAB (Preto)', 'imagens_produtos/65afba6da5e32.png', '', '29.00', 3, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `purchase_history`
--

CREATE TABLE `purchase_history` (
  `ID_PURCHASE` int(11) NOT NULL,
  `PURCHASE_DATE` date DEFAULT NULL,
  `ID_CLIENT` int(11) DEFAULT NULL,
  `TOTAL_PAID` decimal(10,2) DEFAULT NULL,
  `PURCHASE_TIME` time DEFAULT NULL,
  `ID_TRANSACTION` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `purchase_history`
--

INSERT INTO `purchase_history` (`ID_PURCHASE`, `PURCHASE_DATE`, `ID_CLIENT`, `TOTAL_PAID`, `PURCHASE_TIME`, `ID_TRANSACTION`) VALUES
(51, '2023-12-12', 20, '129.99', '15:09:40', 45),
(52, '2023-12-12', 20, '139.98', '15:10:41', 46),
(53, '2024-01-10', 19, '10.00', '14:35:08', 47),
(54, '2024-01-13', 34, '738.00', '14:12:39', 48),
(55, '2024-01-16', 34, '400.00', '12:13:00', 49),
(56, '2024-01-16', 34, '19.00', '14:14:14', 50),
(57, '2024-01-16', 34, '738.00', '16:49:10', 51),
(58, '2024-01-17', 34, '100.00', '14:38:26', 52),
(59, '2024-01-22', 34, '231.00', '14:15:13', 53),
(60, '2024-01-22', 34, '210.00', '16:00:34', 54),
(61, '2024-01-22', 34, '1373.00', '16:16:15', 55),
(62, '2024-01-23', 19, '868.00', '15:49:26', 56),
(63, '2024-01-23', 19, '897.00', '16:04:44', 57),
(64, '2024-01-23', 34, '140.00', '17:25:14', 58),
(65, '2024-01-23', 34, '897.00', '17:26:48', 59);

-- --------------------------------------------------------

--
-- Estrutura da tabela `rating_stars`
--

CREATE TABLE `rating_stars` (
  `ID_RATING` int(11) NOT NULL,
  `RATING` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `rating_stars`
--

INSERT INTO `rating_stars` (`ID_RATING`, `RATING`) VALUES
(1, 0),
(2, 1),
(3, 2),
(4, 3),
(5, 4),
(6, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `shipping_addresses`
--

CREATE TABLE `shipping_addresses` (
  `ID_ADDRESS` int(11) NOT NULL,
  `PROFILE_NAME` varchar(25) DEFAULT NULL,
  `ADDRESS` varchar(100) DEFAULT NULL,
  `POST_COD` varchar(25) DEFAULT NULL,
  `PHONE_NUMBER` decimal(9,0) DEFAULT NULL,
  `ID_CLIENT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `shipping_addresses`
--

INSERT INTO `shipping_addresses` (`ID_ADDRESS`, `PROFILE_NAME`, `ADDRESS`, `POST_COD`, `PHONE_NUMBER`, `ID_CLIENT`) VALUES
(1, 'teste', 'Rua teste', '1234567', '123456789', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `suppliers`
--

CREATE TABLE `suppliers` (
  `ID_SUPPLIER` int(11) NOT NULL,
  `NAME` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `suppliers`
--

INSERT INTO `suppliers` (`ID_SUPPLIER`, `NAME`) VALUES
(1, 'JBL'),
(3, 'Desconhecido'),
(5, 'Marshall');

-- --------------------------------------------------------

--
-- Estrutura da tabela `transactions`
--

CREATE TABLE `transactions` (
  `ID_TRANSACTION` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `transactions`
--

INSERT INTO `transactions` (`ID_TRANSACTION`) VALUES
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31),
(32),
(33),
(34),
(35),
(36),
(37),
(38),
(39),
(40),
(41),
(42),
(43),
(44),
(45),
(46),
(47),
(48),
(49),
(50),
(51),
(52),
(53),
(54),
(55),
(56),
(57),
(58),
(59);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`ID_CART`);

--
-- Índices para tabela `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID_CATEGORY`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID_CLIENT`);

--
-- Índices para tabela `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ID_COMMENT`);

--
-- Índices para tabela `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`ID_DISCOUNT`);

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID_PRODUCT`);

--
-- Índices para tabela `purchase_history`
--
ALTER TABLE `purchase_history`
  ADD PRIMARY KEY (`ID_PURCHASE`);

--
-- Índices para tabela `rating_stars`
--
ALTER TABLE `rating_stars`
  ADD PRIMARY KEY (`ID_RATING`);

--
-- Índices para tabela `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  ADD PRIMARY KEY (`ID_ADDRESS`);

--
-- Índices para tabela `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`ID_SUPPLIER`);

--
-- Índices para tabela `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`ID_TRANSACTION`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carts`
--
ALTER TABLE `carts`
  MODIFY `ID_CART` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=277;

--
-- AUTO_INCREMENT de tabela `categories`
--
ALTER TABLE `categories`
  MODIFY `ID_CATEGORY` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID_CLIENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `comments`
--
ALTER TABLE `comments`
  MODIFY `ID_COMMENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `discounts`
--
ALTER TABLE `discounts`
  MODIFY `ID_DISCOUNT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `ID_PRODUCT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `purchase_history`
--
ALTER TABLE `purchase_history`
  MODIFY `ID_PURCHASE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de tabela `rating_stars`
--
ALTER TABLE `rating_stars`
  MODIFY `ID_RATING` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `shipping_addresses`
--
ALTER TABLE `shipping_addresses`
  MODIFY `ID_ADDRESS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `ID_SUPPLIER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `transactions`
--
ALTER TABLE `transactions`
  MODIFY `ID_TRANSACTION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
