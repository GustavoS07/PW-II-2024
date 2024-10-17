-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/05/2024 às 19:35
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `BD-RH`
--
CREATE DATABASE `BD-RH`;
USE `BD-RH`;
-- --------------------------------------------------------

--
-- Estrutura para tabela `cargos`
--

CREATE TABLE `Cargos` (
  `CodCargo` varchar(12) NOT NULL,
  `Descricao` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `posicoes`
--

INSERT INTO `Cargos` (`CodCargo`, `Descricao`) VALUES
('Car01', 'Desenvolvedor Full Stack'),
('Car02', 'Engenheiro de Dados'),
('Car03', 'Designer UX/UI'),
('Car04', 'Analista de Segurança da Informação'),
('Car05', 'Especialista em Machine Learning'),
('Car06', 'Gerente de Projeto'),
('Car07', 'Arquiteto de Soluções'),
('Car08', 'Cientista de Dados'),
('Car09', 'Analista de Sistemas'),
('Car10', 'Administrador de Banco de Dados');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Departamentos`
--

CREATE TABLE `Departamentos` (
  `IdDepartamento` varchar(12) NOT NULL,
  `NomeDepartamento` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `departamento`
--

INSERT INTO `Departamentos` (`IdDepartamento`, `NomeDepartamento`) VALUES
('Depto01', 'Seção de Vendas'),
('Depto02', 'Seção de Publicidade'),
('Depto03', 'Setor de Pessoal'),
('Depto04', 'Área de Tecnologia da Informação'),
('Depto05', 'Divisão Financeira'),
('Depto06', 'Seção de Manufatura'),
('Depto07', 'Unidade de Logística'),
('Depto08', 'Setor Jurídico'),
('Depto09', 'Divisão de Engenharia'),
('Depto10', 'Seção de Controle de Qualidade');

-- --------------------------------------------------------

--
-- Estrutura para tabela `dependentes`
--

CREATE TABLE `Dependentes` (
  `IdDependente` varchar(8) NOT NULL,
  `NomeFilho` varchar(80) NOT NULL,
  `DataNascimento` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `dependentes`
--

INSERT INTO `Dependentes` (`IdDependente`, `NomeFilho`, `DataNascimento`) VALUES
('00011', 'Beatriz Ferreira', '2010-02-10'),
('00012', 'Lucas Santos', '2012-08-30'),
('00013', 'Carolina Silva', '2015-11-25'),
('00014', 'Mateus Rocha', '2017-03-14'),
('00015', 'Sofia Ribeiro', '2019-07-19'),
('00016', 'Enzo Barros', '2011-10-15'),
('00017', 'Helena Gonçalves', '2014-12-18'),
('00018', 'Theo Freitas', '2016-04-27'),
('00019', 'Manuela Moreira', '2018-06-09'),
('00020', 'Eduardo Melo', '2020-09-22');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionarios`
--

CREATE TABLE `Funcionarios` (
  `IdFuncionario` varchar(12) NOT NULL,
  `NomeCompleto` varchar(80) NOT NULL,
  `DataNascimento` date NOT NULL,
  `Nacionalidade` varchar(30) NOT NULL,
  `Genero` varchar(10) NOT NULL,
  `EstadoCivil` varchar(30) NOT NULL,
  `RegistroGeral` varchar(9) NOT NULL,
  `DocumentoCPF` varchar(11) NOT NULL,
  `EnderecoResidencial` varchar(50) NOT NULL,
  `TelefoneContato` varchar(11) NOT NULL,
  `DataContratacao` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `funcionarios`
--

INSERT INTO `Funcionarios` (`IdFuncionario`, `NomeCompleto`, `DataNascimento`, `Nacionalidade`, `Genero`, `EstadoCivil`, `RegistroGeral`, `DocumentoCPF`, `EnderecoResidencial`, `TelefoneContato`, `DataContratacao`) VALUES
('00100', 'Rafael Gomes', '1991-04-25', 'Portuguesa', 'Masculino', 'Solteiro', '123123123', '12312312301', 'Rua Nova, 321', '98765432101', '2011-12-05'),
('00101', 'Elisa Martins', '1988-09-15', 'Espanhola', 'Feminino', 'Casada', '321321321', '32132132102', 'Avenida das Amoras, 456', '12345678902', '2009-03-20'),
('00102', 'Thiago Rocha', '1994-07-01', 'Argentina', 'Masculino', 'Divorciado', '456456456', '45645645603', 'Rua das Orquídeas, 789', '98765432103', '2016-08-15'),
('00103', 'Clara Silva', '1996-12-10', 'Brasileira', 'Feminino', 'Solteira', '789789789', '78978978904', 'Travessa dos Girassóis, 123', '45612378904', '2013-04-18'),
('00104', 'Fernando Santos', '1990-02-18', 'Uruguaio', 'Masculino', 'Solteiro', '123789456', '12378945605', 'Rua das Américas, 654', '78945612305', '2014-10-30'),
('00105', 'Cíntia Souza', '1987-05-15', 'Chilena', 'Feminino', 'Divorciada', '789123456', '78912345606', 'Avenida dos Lagos, 987', '45612378906', '2012-02-21'),
('00106', 'Miguel Costa', '1995-03-25', 'Brasileira', 'Masculino', 'Casado', '456789123', '45678912307', 'Rua dos Ventos, 741', '12345678907', '2017-11-09'),
('00107', 'Gabriela Freitas', '1998-08-10', 'Brasileira', 'Feminino', 'Solteira', '123456456', '12345645608', 'Avenida dos Anjos, 852', '78945612308', '2015-05-15'),
('00108', 'Arthur Lima', '1997-06-22', 'Brasileira', 'Masculino', 'Solteiro', '789123123', '78912312309', 'Rua dos Ventos, 963', '12345678909', '2018-06-28'),
('00109', 'Nicole Oliveira', '1986-11-03', 'Brasileira', 'Feminino', 'Casada', '123123123', '12312312310', 'Rua do Sol, 369', '12345678910', '2019-09-10'),
('00110', 'Victor Almeida', '1992-03-01', 'Brasileira', 'Masculino', 'Solteiro', '456456789', '45645678911', 'Avenida do Sol, 741', '78945612311', '2010-05-21'),
('00111', 'Isabela Santos', '1990-07-15', 'Brasileira', 'Feminino', 'Divorciada', '123456789', '12345678912', 'Rua dos Poetas, 258', '12345678912', '2013-10-30'),
('00112', 'Marcos Pereira', '1983-04-10', 'Brasileira', 'Masculino', 'Casado', '789789456', '78978945613', 'Avenida das Palmeiras, 741', '78978945613', '2011-03-17'),
('00113', 'Luiza Martins', '1999-12-28', 'Brasileira', 'Feminino', 'Solteira', '456123123', '45612312314', 'Rua do Mar, 369', '45612312314', '2015-09-11'),
('00114', 'Rodrigo Costa', '1991-11-20', 'Brasileira', 'Masculino', 'Solteiro', '123123456', '12312345615', 'Avenida do Vento, 852', '12312345615', '2017-11-03');

-- --------------------------------------------------------

--
-- Estrutura para tabela `lotacao`
--

CREATE TABLE `Lotacao` (
  `IdFuncionario` varchar(12) NOT NULL,
  `IdDepartamento` varchar(8) NOT NULL,
  `DataInicio` date NOT NULL,
  `DataTermino` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `lotacao`
--

INSERT INTO `Lotacao` (`IdFuncionario`, `IdDepartamento`, `DataInicio`, `DataTermino`) VALUES
('00100', 'Depto01', '2024-01-15', '2024-12-15'),
('00101', 'Depto02', '2024-02-15', '2024-11-15'),
('00102', 'Depto03', '2024-03-15', '2024-10-15'),
('00103', 'Depto01', '2024-04-15', '2024-09-15'),
('00104', 'Depto02', '2024-05-15', '2024-08-15'),
('00105', 'Depto03', '2024-06-15', '2024-07-15'),
('00106', 'Depto01', '2024-07-15', '2024-06-15'),
('00107', 'Depto02', '2024-08-15', '2024-05-15'),
('00108', 'Depto03', '2024-09-15', '2024-04-15'),
('00109', 'Depto01', '2024-10-15', '2024-03-15'),
('00110', 'Depto02', '2024-11-15', '2024-02-15'),
('00111', 'Depto03', '2024-12-15', '2025-01-15'),
('00112', 'Depto01', '2025-01-15', '2025-12-15'),
('00113', 'Depto02', '2025-02-15', '2025-11-15'),
('00114', 'Depto03', '2025-03-15', '2025-10-15');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ocupacao`
--

CREATE TABLE `Ocupacao` (
  `IdFuncionario` varchar(5) NOT NULL,
  `IdPosicao` varchar(8) NOT NULL,
  `DataInicio` date NOT NULL,
  `DataTermino` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `ocupacao`
--

INSERT INTO `Ocupacao` (`IdFuncionario`, `IdPosicao`, `DataInicio`, `DataTermino`) VALUES
('10001', 'Pos01', '2024-01-15', '2024-12-15'),
('10002', 'Pos02', '2024-02-15', '2024-11-15'),
('10003', 'Pos03', '2024-03-15', '2024-10-15'),
('10004', 'Pos04', '2024-04-15', '2024-09-15'),
('10005', 'Pos05', '2024-05-15', '2024-08-15'),
('10006', 'Pos06', '2024-06-15', '2024-07-15'),
('10007', 'Pos07', '2024-07-15', '2024-06-15'),
('10008', 'Pos08', '2024-08-15', '2024-05-15'),
('10009', 'Pos09', '2024-09-15', '2024-04-15'),
('10010', 'Pos10', '2024-10-15', '2024-03-15'),
('10011', 'Pos01', '2024-11-15', '2024-02-15'),
('10012', 'Pos02', '2024-12-15', '2025-01-15'),
('10013', 'Pos03', '2025-01-15', '2025-12-15'),
('10014', 'Pos04', '2025-02-15', '2025-11-15'),
('10015', 'Pos05', '2025-03-15', '2025-10-15');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cargos`
--
ALTER TABLE `Cargos`
  ADD PRIMARY KEY (`CodCargo`);

--
-- Índices de tabela `departamento`
--
ALTER TABLE `Departamentos`
  ADD PRIMARY KEY (`IdDepartamento`);

--
-- Índices de tabela `dependentes`
--
ALTER TABLE `Dependentes`
  ADD PRIMARY KEY (`IdDependente`);

--
-- Índices de tabela `funcionarios`
--
ALTER TABLE `Funcionarios`
  ADD PRIMARY KEY (`IdFuncionario`);

--
-- Índices de tabela `lotacao`
--
ALTER TABLE `Lotacao`
  ADD PRIMARY KEY (`IdFuncionario`);

--
-- Índices de tabela `ocupacao`
--
ALTER TABLE `Ocupacao`
  ADD PRIMARY KEY (`IdFuncionario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
