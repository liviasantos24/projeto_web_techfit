-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/12/2025 às 15:13
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
  `email` varchar(100) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `codigo` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastros`
--

INSERT INTO `cadastros` (`id`, `nome`, `email`, `cpf`, `codigo`) VALUES
(1, 'maria julia', 'mariajulia12@gmail.com', '71774332321', '8743'),
(2, 'maria julia', 'mariaclaralacerda127@gmail.com', '71774332321', '2147'),
(3, 'maria clara lacerda', 'mariaclaralacerda127@gmail.com', '71774847442', '8485'),
(4, 'maria julia', 'mariajulia12@gmail.com', '71774332321', '1800'),
(5, 'maria julia', 'mariajulia12@gmail.com', '71774332321', '8318');

-- --------------------------------------------------------

--
-- Estrutura para tabela `planos_usuarios`
--

CREATE TABLE `planos_usuarios` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `plano` varchar(100) DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `planos_usuarios`
--
ALTER TABLE `planos_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
