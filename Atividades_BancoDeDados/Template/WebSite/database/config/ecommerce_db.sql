-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 03, 2024 at 03:41 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `ecommerce_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(0, 'Indefinido'),
(1, 'Eletrônicos'),
(2, 'Acessórios para Automóveis'),
(3, 'Brinquedos'),
(4, 'Esporte e Fitness'),
(5, 'Casa e Jardim'),
(6, 'Saúde'),
(7, 'Suprimentos para Bebês'),
(8, 'Alimentos e Bebidas'),
(9, 'Suprimentos para Animais de Estimação');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `price` decimal(6,0) NOT NULL,
  `discount` int DEFAULT '0',
  `quantity` int NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `discount`, `quantity`, `image`, `createdAt`, `updatedAt`, `category_id`) VALUES
(1, 'Tênis Runner', 'Tênis Esportivo para Caminhada', '195', 0, 786, 'shoes1', '2024-07-02 14:26:33', '2024-07-03 02:23:38', 4),
(2, 'Tênis Power II', 'Tênis Esportivo Academia Fitness', '150', 0, 1000, 'shoes2', '2024-07-02 14:26:33', '2024-07-02 17:53:18', 4),
(3, 'Tênis Light', 'Tênis Esportivo Ultraleve', '240', 0, 1000, 'shoes3', '2024-07-02 14:26:33', '2024-07-02 17:53:18', 4),
(4, 'Tênis Race', 'Tênis Esportivo para Exercícios Tecido', '135', 0, 1000, 'shoes4', '2024-07-02 14:26:33', '2024-07-02 17:53:18', 4),
(5, 'Tênis Runner Plus', 'Tênis Esportivo para Caminhada', '190', 5, 1000, 'shoes5', '2024-07-02 14:26:33', '2024-07-02 17:53:18', 4),
(6, 'Tênis Power Fit', 'Tênis Esportivo Academia Fitness', '320', 5, 1000, 'shoes6', '2024-07-02 14:26:33', '2024-07-02 17:53:18', 4),
(7, 'Tênis Light Plus', 'Tênis Esportivo Ultraleve', '234', 5, 1000, 'shoes7', '2024-07-02 14:26:33', '2024-07-02 17:53:18', 4),
(8, 'Tênis Racing', 'Tênis Esportivo para Exercícios Tecido', '170', 10, 1000, 'shoes8', '2024-07-02 14:26:33', '2024-07-02 17:53:18', 4);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `id` int NOT NULL,
  `quantity` int NOT NULL DEFAULT '0',
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shopping_cart`
--

INSERT INTO `shopping_cart` (`id`, `quantity`, `createdAt`, `updatedAt`, `user_id`, `product_id`) VALUES
(1, 2, '2024-07-02 23:18:27', '2024-07-02 23:18:27', 3, 1),
(2, 50, '2024-07-02 23:18:27', '2024-07-02 23:18:27', 3, 1),
(3, 2, '2024-07-02 23:23:38', '2024-07-02 23:23:38', 3, 1),
(4, 50, '2024-07-02 23:23:38', '2024-07-02 23:23:38', 3, 1),
(5, 10, '2024-07-02 23:23:38', '2024-07-02 23:23:38', 2, 1),
(6, 100, '2024-07-02 23:23:38', '2024-07-02 23:23:38', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `administrator` tinyint(1) NOT NULL DEFAULT '0',
  `createdAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `administrator`, `createdAt`, `updatedAt`) VALUES
(1, 'admin', 'admin@support.mycompany.com.br', 'admin', 1, '2024-03-19 14:30:43', '2024-03-19 14:30:43'),
(2, 'visitante', 'visitante@support.mycompany.com.br', 'visitante', 0, '2024-03-19 14:32:45', '2024-03-19 14:32:45'),
(3, 'user1', 'user1@provedor1.com', '123', 0, '2024-07-02 23:18:24', '2024-07-02 23:18:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category_id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD CONSTRAINT `shopping_cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shopping_cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
