-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/04/2024 às 06:38
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
-- Banco de dados: `bd_extra`
--
CREATE DATABASE bd_extra;

USE bd_extra;
-- --------------------------------------------------------

--
-- Estrutura para tabela `pets`
--

CREATE TABLE `pets` (
  `NumRegistro` int(11) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Especie` varchar(25) NOT NULL,
  `Raca` varchar(25) NOT NULL,
  `Cor` varchar(16) NOT NULL,
  `Nascimento` datetime NOT NULL DEFAULT current_timestamp(),
  `Sexo` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pets`
--

INSERT INTO `pets` (`NumRegistro`, `Nome`, `Especie`, `Raca`, `Cor`, `Nascimento`, `Sexo`) VALUES
(1, 'Lady', 'Gato', 'Siames', 'cinza', '2022-01-12 12:00:00', 'Feminino'),
(2, 'Kiara', 'Gato', 'Vira-Lata', 'Marrom', '2022-09-09 00:00:00', 'Feminino'),
(3, 'Duque', 'Cachorro', 'Shih-tzu', 'branco e marrom', '2016-06-08 00:00:00', 'Masculino'),
(4, 'Xuxa', 'Cachorro', 'Vira-lata', 'Branco', '2020-07-09 00:00:00', 'Feminino'),
(5, 'Louro', 'Papagaio', 'Papagaio-verdadeiro ', 'verde', '2023-10-17 00:00:00', 'Masculino');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`NumRegistro`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pets`
--
ALTER TABLE `pets`
  MODIFY `NumRegistro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
