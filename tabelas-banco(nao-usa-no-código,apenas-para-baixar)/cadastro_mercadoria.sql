-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Abr-2022 às 01:52
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_mercadoria`
--

CREATE TABLE `cadastro_mercadoria` (
  `codigoBarra` int(13) NOT NULL,
  `tipoProduto` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantidadeEstoque` int(11) NOT NULL,
  `codigoFornecedor` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  `quantidadeCarrinho` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cadastro_mercadoria`
--

INSERT INTO `cadastro_mercadoria` (`codigoBarra`, `tipoProduto`, `marca`, `quantidadeEstoque`, `codigoFornecedor`, `valor`, `quantidadeCarrinho`) VALUES
(44230000, 'Cachaça', 'Calsberg Group', 0, 44230000, 55, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro_mercadoria`
--
ALTER TABLE `cadastro_mercadoria`
  ADD PRIMARY KEY (`codigoBarra`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
