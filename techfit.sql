-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/11/2025 às 11:58
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `techfit`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastros`
--

CREATE TABLE `cadastros` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `plano` enum('publico','particular') NOT NULL,
  `ajuda_governo` enum('sim','nao') DEFAULT NULL,
  `documento` varchar(255) DEFAULT NULL,
  `codigo_particular` varchar(20) DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastros`
--

INSERT INTO `cadastros` (`id`, `nome`, `email`, `plano`, `ajuda_governo`, `documento`, `codigo_particular`, `data_cadastro`) VALUES
(1, 'maria clara lacerda', 'mariaclaralacerda127@gmail.com', 'particular', 'nao', '', 'P001', '2025-11-12 16:10:04'),
(2, 'maria clara lacerda', 'mariaclaralacerda127@gmail.com', 'particular', 'nao', NULL, 'P0765', '2025-11-12 16:18:46'),
(3, 'maria clara lacerda', 'mariaclaralacerda127@gmail.com', 'particular', 'nao', NULL, 'P1469', '2025-11-12 16:22:22'),
(4, 'maria julia', 'mariajulia12@gmail.com', 'particular', 'nao', NULL, 'P7963', '2025-11-12 16:23:33'),
(5, 'maria julia', 'mariajulia12@gmail.com', 'particular', 'nao', NULL, 'P8650', '2025-11-12 16:29:18'),
(6, 'maria julia', 'mariaclaralacerda127@gmail.com', 'particular', 'nao', NULL, 'P5937', '2025-11-12 18:39:03'),
(7, 'nome', 'email', 'publico', NULL, NULL, NULL, '2025-11-12 22:53:49'),
(8, 'maria julia', 'mariaclaralacerda127@gmail.com', 'particular', 'nao', NULL, 'P9276', '2025-11-13 04:16:46'),
(9, 'clara', 'mariaclaralacerda127@gmail.com', 'publico', 'nao', NULL, 'Array', '2025-11-19 23:45:12');

-- --------------------------------------------------------

--
-- Estrutura para tabela `entregas`
--

CREATE TABLE `entregas` (
  `id` int(11) NOT NULL,
  `cliente` varchar(255) DEFAULT NULL,
  `destino` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `entregas`
--

INSERT INTO `entregas` (`id`, `cliente`, `destino`, `status`) VALUES
(1, 'samuel', 'valentina', 'Pendente');

-- --------------------------------------------------------

--
-- Estrutura para tabela `planos_usuarios`
--

CREATE TABLE `planos_usuarios` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `plano` varchar(100) DEFAULT NULL,
  `esporte` varchar(100) DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `planos_usuarios`
--

INSERT INTO `planos_usuarios` (`id`, `usuario_id`, `plano`, `esporte`, `data_cadastro`) VALUES
(1, 1, '1 Esporte + Academia', 'Basquete', '2025-11-11 13:26:51'),
(2, 1, '1 Esporte', 'Basquete', '2025-11-11 13:27:04'),
(3, 1, '1 Esporte', 'Basquete', '2025-11-11 13:29:31'),
(4, 1, '1 Esporte', 'Basquete', '2025-11-11 13:29:38'),
(5, 1, '1 Esporte', 'Basquete', '2025-11-11 13:31:37'),
(6, 1, '1 Esporte', 'Basquete', '2025-11-11 13:33:40'),
(7, 1, '1 Esporte', 'Basquete', '2025-11-11 13:34:04'),
(8, 1, '1 Esporte', 'Basquete', '2025-11-11 13:45:48'),
(9, 1, '1 Esporte', 'Basquete', '2025-11-11 13:46:43'),
(10, 1, '1 Esporte', 'Basquete', '2025-11-11 13:47:32'),
(11, 1, '1 Esporte', 'Basquete', '2025-11-11 13:48:05'),
(12, 1, '1 Esporte', '', '2025-11-11 13:59:05'),
(13, 1, '1 Esporte', '', '2025-11-11 14:04:07');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `ajuda_governo` enum('sim','nao') DEFAULT 'nao',
  `documento` varchar(100) DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `ajuda_governo`, `documento`, `data_cadastro`) VALUES
(1, 'maria clara ', 'mariaclaralacerda127@gmail.com', '$2y$10$EBkY2SausX.BSIDqG2CGa.8bJ0L.CqoP3Y0uhPor3wilML4F.fH6K', 'nao', NULL, '2025-11-10 02:09:20'),
(2, 'maria clara ', 'mariaclaralacerda127@gmail.com', '$2y$10$Bg9Z0j1.I3Ojnz6lVjAM8.gOX/PLyQ7btMcHKJAWIFa.xm5nQxjb6', 'nao', NULL, '2025-11-10 02:12:36'),
(3, 'maria clara lacerda', 'mariaclaralacerda127@gmail.com', '$2y$10$yJc4HumkD7YRsbk8iVDQAeUu/rW28nV1TsVc2AyzCd759DfR7OYIi', 'sim', NULL, '2025-11-11 18:58:43');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastros`
--
ALTER TABLE `cadastros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `entregas`
--
ALTER TABLE `entregas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `planos_usuarios`
--
ALTER TABLE `planos_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastros`
--
ALTER TABLE `cadastros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `planos_usuarios`
--
ALTER TABLE `planos_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
