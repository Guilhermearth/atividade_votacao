-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Set-2022 às 01:31
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco_voto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `votacao`
--

CREATE TABLE `votacao` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` int(11) NOT NULL,
  `idade` tinyint(3) NOT NULL,
  `voto` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `votacao`
--

INSERT INTO `votacao` (`id`, `nome`, `cpf`, `idade`, `voto`, `data`) VALUES
(1, 'GUILHERME ARTHUR CARVALHO SILVA', 2147483647, 19, '13', '2022-09-14 18:45:15'),
(2, 'joao pedro', 2147483647, 18, '22', '2022-09-14 20:13:48'),
(3, 'kaka', 2147483647, 25, '13', '2022-09-14 21:54:30'),
(4, 'GUILHERME ARTHUR CARVALHO SILVA', 2147483647, 19, '22', '2022-09-14 23:23:56');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `votacao`
--
ALTER TABLE `votacao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `votacao`
--
ALTER TABLE `votacao`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
