-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16/05/2024 às 18:57
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE exemplocurso;

USE exemplocurso;

-- Estrutura para tabela `produto`
CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `estoque` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Despejando dados para a tabela `produto`
INSERT INTO `produto` (`id`, `nome`, `estoque`) VALUES
(1, 'Lapis de cor', 53),
(2, 'Caneta azul ', 120),
(3, 'Caderno', 130),
(4, 'Apontador', 27),
(5, 'Papel colorido', 38);

-- Índices para tabelas despejadas
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

-- AUTO_INCREMENT de tabela `produto`
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

COMMIT;
