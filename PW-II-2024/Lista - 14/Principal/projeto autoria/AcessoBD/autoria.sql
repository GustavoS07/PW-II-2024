-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/10/2024 às 01:54
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
-- Banco de dados: `bd_autoria`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `autor`
--

CREATE TABLE `autor` (
  `Cod_autor` int(11) NOT NULL,
  `NomeAutor` varchar(20) NOT NULL,
  `SobreNome` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Nasc` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `autor`
--

INSERT INTO `autor` (`Cod_autor`, `NomeAutor`, `SobreNome`, `Email`, `Nasc`) VALUES
(1, 'Gabriel', 'Garcia Marquez', 'gabriel.garcia@gmail.com', '1927-03-06'),
(2, 'Leo', 'Tolstoy', 'leo.tolstoy@gmail.com', '1828-09-09'),
(3, 'F. Scott', 'Fitzgerald', 'f.scott.fitzgerald@gmail.com', '1896-09-24'),
(4, 'Isabel', 'Allende', 'isabel.allende@gmail.com', '1942-08-02'),
(5, 'Chimamanda', 'Ngozi Adichie', 'chimamanda.adichie@gmail.com', '1977-09-15'),
(6, 'Haruki', 'Murakami', 'haruki.murakami@gmail.com', '1949-01-12'),
(7, 'Khaled', 'Hosseini', 'khaled.hosseini@gmail.com', '1965-03-04');

-- --------------------------------------------------------

--
-- Estrutura para tabela `autoria`
--

CREATE TABLE `autoria` (
  `Cod_autor` int(11) NOT NULL,
  `Cod_livro` int(11) NOT NULL,
  `Data_lancamento` date NOT NULL,
  `Editora` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `autoria`
--

INSERT INTO `autoria` (`Cod_autor`, `Cod_livro`, `Data_lancamento`, `Editora`) VALUES
(1, 1, '1967-06-05', 'HarperCollins'),
(2, 2, '1869-01-01', 'Penguin Classics'),
(3, 3, '1925-04-10', 'Scribner'),
(4, 4, '1982-11-01', 'Alfred A. Knopf'),
(5, 5, '2013-05-14', 'Alfred A. Knopf'),
(6, 5, '2013-10-01', 'Fourth Estate'),
(7, 6, '2002-10-30', 'Knopf'),
(7, 7, '2003-05-29', 'Riverhead Books');

-- --------------------------------------------------------

--
-- Estrutura para tabela `livro`
--

CREATE TABLE `livro` (
  `Cod_livro` int(11) NOT NULL,
  `Titulo` varchar(30) NOT NULL,
  `Categoria` varchar(30) NOT NULL,
  `ISBN` varchar(13) NOT NULL,
  `Idioma` varchar(20) NOT NULL,
  `QtdePag` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `livro`
--

INSERT INTO `livro` (`Cod_livro`, `Titulo`, `Categoria`, `ISBN`, `Idioma`, `QtdePag`) VALUES
(1, 'Cem Anos de Solidão', 'Realismo Mágico', '9780060883287', 'Português', 417),
(2, 'Guerra e Paz', 'Romance Histórico', '9780143039990', 'Português', 1392),
(3, 'O Grande Gatsby', 'Romance', '9780743273565', 'Português', 180),
(4, 'A Casa dos Espíritos', 'Ficção Histórica', '9788401013883', 'Português', 448),
(5, 'Americanah', 'Ficção', '9780307271082', 'Português', 588);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario` varchar(20) NOT NULL,
  `senha` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`usuario`, `senha`) VALUES
('Guto', 1234),
('Edna', 4321);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`Cod_autor`);

--
-- Índices de tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`Cod_livro`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `Cod_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `Cod_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
