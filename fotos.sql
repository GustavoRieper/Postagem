-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Abr-2018 às 17:45
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fotos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacao`
--

CREATE TABLE `solicitacao` (
  `cd_solicitacao` int(11) NOT NULL,
  `nm_solicitante` varchar(50) NOT NULL,
  `turma` varchar(50) NOT NULL,
  `txt_postagem` varchar(500) NOT NULL,
  `foto0` text NOT NULL,
  `foto1` text,
  `foto2` text,
  `foto3` text,
  `foto4` text,
  `foto5` text,
  `foto6` text,
  `foto7` text,
  `foto8` text,
  `foto9` text,
  `dt_solicitacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `solicitacao`
--

INSERT INTO `solicitacao` (`cd_solicitacao`, `nm_solicitante`, `turma`, `txt_postagem`, `foto0`, `foto1`, `foto2`, `foto3`, `foto4`, `foto5`, `foto6`, `foto7`, `foto8`, `foto9`, `dt_solicitacao`) VALUES
(215, 'Luciana', 'Berçário', 'Texto para postagem da atividade realizada no dia', 'Luciana2018.04.05-16.29.49-0.jpg', 'Luciana2018.04.05-16.29.49-1.jpg', 'Luciana2018.04.05-16.29.49-2.jpg', 'Luciana2018.04.05-16.29.49-3.jpg', NULL, NULL, NULL, NULL, NULL, NULL, '2018-04-02'),
(216, 'Gustavo Rieper', 'Maternal A', 'Fotos da turma do maternal a Fotos da turma do maternal a Fotos da turma do maternal a Fotos da turma do maternal a Fotos da turma do maternal a Fotos da turma do maternal a Fotos da turma do maternal a Fotos da turma do maternal a Fotos da turma do maternal a Fotos da turma do maternal a Fotos da t', 'Gustavo Rieper2018.04.05-17.04.39-0.jpg', 'Gustavo Rieper2018.04.05-17.04.39-1.jpg', 'Gustavo Rieper2018.04.05-17.04.39-2.jpg', 'Gustavo Rieper2018.04.05-17.04.39-3.jpg', 'Gustavo Rieper2018.04.05-17.04.39-4.jpg', 'Gustavo Rieper2018.04.05-17.04.39-5.jpg', 'Gustavo Rieper2018.04.05-17.04.39-6.jpg', 'Gustavo Rieper2018.04.05-17.04.39-7.jpg', 'Gustavo Rieper2018.04.05-17.04.39-8.jpg', NULL, '2018-04-04'),
(218, 'Elenir', 'Maternal A', 'Fazendo Arte...', 'Elenir2018.04.05-17.16.18-0.jpg', 'Elenir2018.04.05-17.16.18-1.jpg', 'Elenir2018.04.05-17.16.18-2.jpg', 'Elenir2018.04.05-17.16.18-3.jpg', 'Elenir2018.04.05-17.16.18-4.jpg', 'Elenir2018.04.05-17.16.18-5.jpg', 'Elenir2018.04.05-17.16.18-6.jpg', 'Elenir2018.04.05-17.16.18-7.jpg', 'Elenir2018.04.05-17.16.18-8.jpg', 'Elenir2018.04.05-17.16.18-9.jpg', '2018-04-04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE `turmas` (
  `cd_turma` int(11) NOT NULL,
  `ds_turma` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turmas`
--

INSERT INTO `turmas` (`cd_turma`, `ds_turma`) VALUES
(1, 'Berçário'),
(2, 'Maternal A'),
(3, 'Maternal B'),
(4, 'Jardim A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cd_usuario` int(11) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nm_usuario` varchar(50) NOT NULL,
  `sbr_usuario` varchar(50) NOT NULL,
  `nivel` int(2) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cd_usuario`, `senha`, `nm_usuario`, `sbr_usuario`, `nivel`, `email`) VALUES
(1, 'teste', 'Gustavo', 'Rieper', 2, 'gustavo.rieper@ielusc.br');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `solicitacao`
--
ALTER TABLE `solicitacao`
  ADD PRIMARY KEY (`cd_solicitacao`);

--
-- Indexes for table `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`cd_turma`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cd_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `solicitacao`
--
ALTER TABLE `solicitacao`
  MODIFY `cd_solicitacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT for table `turmas`
--
ALTER TABLE `turmas`
  MODIFY `cd_turma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cd_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
