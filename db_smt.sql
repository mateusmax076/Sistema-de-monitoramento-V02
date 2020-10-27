-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Out-2020 às 17:00
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_smt`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_agente`
--

CREATE TABLE `tbl_agente` (
  `id` int(11) NOT NULL,
  `nomecompleto` varchar(50) NOT NULL,
  `matricula` int(8) NOT NULL,
  `unidadeprisional` varchar(60) NOT NULL,
  `emailinstitucional` varchar(100) NOT NULL,
  `nucleo` varchar(70) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `funcao` varchar(40) DEFAULT NULL,
  `funcionarioativo` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_agente`
--

INSERT INTO `tbl_agente` (`id`, `nomecompleto`, `matricula`, `unidadeprisional`, `emailinstitucional`, `nucleo`, `login`, `senha`, `funcao`, `funcionarioativo`) VALUES
(1, 'Rafael José da Silva', 1, 'CP Paulista', 'teste@teste', 'Paulista', 'admin', 'admin', 'admin', 1),
(2, 'teste', 123456, 'teste', 't@t', 'teste', 'teste', 'teste', 'agente', 1),
(3, 'Agente', 123456, 'essa', 'asas@asas', 'aquele', NULL, NULL, NULL, NULL),
(4, 'Agente', 123456, 'aquela', 'asas@asas', 'aquele', NULL, NULL, NULL, NULL),
(5, 'sas', 321, 'asd', 'asdadsd@rrewrf', 'asd', NULL, NULL, NULL, NULL),
(8, 'asdad', 0, 'asda', 'sdasdsar@rter', 'asda', NULL, NULL, NULL, NULL),
(9, 'asdasd', 123131, 'asdad', 'asdasd@adasda', 'adas', NULL, NULL, NULL, NULL),
(10, 'ewew', 123, 'qeqw', 'qweqwe@qweq', 'qweq', NULL, NULL, NULL, NULL),
(11, 'ertretrr', 1234567, 'rtetw', 'rtsre@rtest', 'trew', NULL, NULL, NULL, NULL),
(12, 'asdasd', 123131, 'asdasd', 'dsda@sad', 'asdasd', NULL, NULL, NULL, NULL),
(13, 'asads', 1232331, 'CP Paulista', 'asas@asas', 'Paulista', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_presos`
--

CREATE TABLE `tbl_presos` (
  `id` int(11) NOT NULL,
  `cadeiapublica` varchar(70) NOT NULL,
  `dataentrada` varchar(10) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `nomemae` varchar(60) NOT NULL,
  `nomepai` varchar(60) NOT NULL,
  `motivo` varchar(60) NOT NULL,
  `origem` varchar(70) NOT NULL,
  `dataprisao` text NOT NULL,
  `nsiap` int(40) NOT NULL,
  `sic` int(40) NOT NULL,
  `documentacao` varchar(60) NOT NULL,
  `crimerepercurssao` varchar(10) NOT NULL,
  `observacoesgerais` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_presos`
--

INSERT INTO `tbl_presos` (`id`, `cadeiapublica`, `dataentrada`, `nome`, `nomemae`, `nomepai`, `motivo`, `origem`, `dataprisao`, `nsiap`, `sic`, `documentacao`, `crimerepercurssao`, `observacoesgerais`) VALUES
(1, 'CP de Aliança', '25/09/2020', 'arewra', 'ad', 'asdfa', 'Expiração de Prazo', 'CP de Altinho', '30/08/2020', 0, 0, 'Auto de Prisão em Flagrante', 'Sim', 'asdfas'),
(2, 'CP de Aliança', '03/10/2020', 'arewra', 'asdad', 'pai', 'Expiração de Prazo', 'CP de Lagoa do Carro', '25/10/2020', 0, 0, 'Auto de Prisão em Flagrante', 'Sim', 'werwr'),
(3, 'CP de Carpina', '26/10/2020', 'r', 'r', 'r', 'Expiração de Prazo', 'CP de Altinho', '25/10/2020', 0, 0, 'Auto de Prisão em Flagrante', 'Sim', 'r');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_agente`
--
ALTER TABLE `tbl_agente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_presos`
--
ALTER TABLE `tbl_presos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_agente`
--
ALTER TABLE `tbl_agente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tbl_presos`
--
ALTER TABLE `tbl_presos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
