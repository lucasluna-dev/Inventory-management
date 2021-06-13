-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jun-2021 às 21:34
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.3.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque.cliente`
--

CREATE TABLE `estoque.cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estoque.cliente`
--

INSERT INTO `estoque.cliente` (`id`, `nome`, `cpf`, `endereco`, `telefone`, `email`) VALUES
(6, 'lucas de luna silva mmoreira', '987.551.025-49', 'Rua professotaciel cyllneo 130', '21 99888-2808', 'lucaslinks@htomail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque.login`
--

CREATE TABLE `estoque.login` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cargo` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estoque.login`
--

INSERT INTO `estoque.login` (`id`, `user`, `password`, `nome`, `cargo`) VALUES
(13, 'lucas', 'lucas', 'lucas de luna', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `estoque.cliente`
--
ALTER TABLE `estoque.cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `estoque.login`
--
ALTER TABLE `estoque.login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `estoque.cliente`
--
ALTER TABLE `estoque.cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `estoque.login`
--
ALTER TABLE `estoque.login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
