-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/04/2024 às 06:09
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
-- Banco de dados: `bd_empresa`
--

-- --------------------------------------------------------


CREATE DATABASE bd_empresa;

USE bd_empresa

--
-- Estrutura para tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `Cod_fornecedores` int(11) NOT NULL,
  `Razao_social` varchar(70) NOT NULL,
  `Nome_fantasia` varchar(70) NOT NULL,
  `CNPJ` varchar(20) NOT NULL,
  `Endereco` varchar(50) NOT NULL,
  `Num` varchar(7) NOT NULL,
  `Bairro` varchar(25) NOT NULL,
  `Cidade` varchar(25) NOT NULL,
  `Fone` varchar(18) NOT NULL,
  `Nome_contato` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Site` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `fornecedores`
--

INSERT INTO `fornecedores` (`Cod_fornecedores`, `Razao_social`, `Nome_fantasia`, `CNPJ`, `Endereco`, `Num`, `Bairro`, `Cidade`, `Fone`, `Nome_contato`, `Email`, `Site`) VALUES
(1, ' Mundo das Canetas Comércio de Artigos de Papelaria', 'Papelaria Mundo das Canetas', ' 12.345.678/0001-00', 'Rua das Canetas', '123', 'Centro', 'Cidade Nova', '(01) 2345-6789', 'Kleber', 'contato@mundodascanetas.com', 'www.mundodascanetas.com'),
(2, 'Criativa & Cia Comércio de Materiais de Escritório ', 'Papelaria Criativa & Cia ', '23.456.789/0001-11', ' Avenida das Artes', '523', ' Bairro Criativo', 'Cidade dos Papéis', '(02) 3456-7890', 'Joao', ' contato@criativaeCia.com', 'www.criativaeCia.com'),
(3, ' Expresso dos Papéis Distribuidora de Produtos para Escritório', 'Papelaria Expresso dos Papéis', '34.567.890/0001-22', 'Travessa dos Papéis', '789', 'Distrito Expresso', ' Cidade das Canetas', '(03) 4567-8901', 'Jessica', ' contato@expressodospapeis.com', 'www.expressodospapeis.com'),
(4, 'Arte em Papel Distribuidora de Artigos de Escritório', 'Papelaria Arte em Papel', '45.678.901/0001-33', 'Praça da Arte', '101', 'Vila Papelar', ' Cidade das Cores', ' (04) 5678-9012', 'Joacielio', ' contato@arteempapel.com', 'www.arteempapel.com'),
(5, ' Luxo e Estilo Papelaria e Presentes', 'Papelaria Luxo e Estilo', '56.789.012/0001-44', ' Avenida do Luxo', '4218', 'Bairro Estiloso', 'Cidade das Canetas', '(05) 6789-0123', 'Manuella', ' contato@luxoeestilo.com', 'www.luxoeestilo.com'),
(6, 'TechPapel Soluções para Escritório', 'Papelaria TechPapel', '67.890.123/0001-55', 'Rua da Tecnologia', '652', 'Bairro Tech', 'Cidade dos Papéis', '(06) 7890-1234', 'Paula', ' contato@techpapel.com', ' www.techpapel.com'),
(7, 'Dinâmica Distribuidora de Materiais de Papelaria ', 'Papelaria Dinâmica', '78.901.234/0001-66', 'Avenida da Dinâmica', '153', 'Bairro Dinâmico', 'Cidade das Canetas', '(07) 8901-2345', 'Gabriel', 'contato@dinamicapapel.com', 'www.dinamicapapel.com'),
(8, ' Futuro Brilhante Papelaria e Artigos Escolares ', 'Papelaria Futuro Brilhante', '89.012.345/0001-77', 'Praça do Futuro', '982', 'Bairro Brilhante', 'Cidade dos Papéis', ' (08) 9012-3456', 'Giovana', 'contato@futurobrilhante.com', ' www.futurobrilhante.com'),
(9, 'Expressão Artística Distribuidora de Materiais para Desenho e Pintura', 'Papelaria Expressão Artística', ' 90.123.456/0001-88', 'Rua da Expressão', '635', 'Bairro Artístico', 'Cidade das Cores', '(09) 0123-4567', 'Amanda', 'contato@expressaoartistica.com', 'www.expressaoartistica.com'),
(10, 'Universo das Cores Comércio de Papelaria e Materiais Artísticos', 'Papelaria Universo das Cores', '01.234.567/0001-99', 'Avenida do Universo', '754', 'Bairro Colorido', 'Cidade dos Papéis', '(10) 1234-5678', 'Cassio', 'contato@universodascores.com', 'www.universodascores.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `Cod_produto` int(11) NOT NULL,
  `Descricao` varchar(50) NOT NULL,
  `Unidade` varchar(2) NOT NULL,
  `Qtd_estoque` double NOT NULL,
  `Caracteristicas` varchar(50) NOT NULL,
  `Cod_Fornecedor` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`Cod_produto`, `Descricao`, `Unidade`, `Qtd_estoque`, `Caracteristicas`, `Cod_Fornecedor`) VALUES
(3, 'Caneta', 'un', 100, 'Cor azul', 2),
(4, 'Caneta', 'un', 85, 'Cor vermelha', 2),
(5, 'Caneta', 'un', 60, 'Cor preta', 2),
(6, 'Lápis', 'un', 150, 'Sem borracha', 3),
(7, 'Lápis', 'un', 100, 'Com borracha', 4),
(8, 'Lapís de cor', 'cx', 25, '12 cores', 4),
(9, 'Lápis de cor', 'cx', 50, '24 cores', 4),
(10, 'Lápis de cor', 'cx', 35, '36 cores', 5),
(11, 'Borracha', 'dz', 35, 'Azul/Vermelho', 6),
(12, 'Borracha', 'dz', 25, 'Branca', 7),
(13, 'Papel Sulfite', 'pc', 100, 'colorido', 8),
(14, 'Caderno Universitário', 'pc', 25, '1 matéria', 9),
(15, 'Caderno Universitário', 'pc', 150, '10 matérias', 9),
(16, 'Régua', 'un', 250, 'Acrílica - 30cm', 10),
(17, 'Lapiseira', 'pc', 86, 'Grafite 0.5', 10);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`Cod_fornecedores`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`Cod_produto`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `Cod_fornecedores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `Cod_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
