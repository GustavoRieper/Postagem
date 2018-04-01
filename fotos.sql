-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Mar-2018 às 23:28
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
  `fotos` text NOT NULL,
  `dt_solicitacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `solicitacao`
--

INSERT INTO `solicitacao` (`cd_solicitacao`, `nm_solicitante`, `turma`, `txt_postagem`, `fotos`, `dt_solicitacao`) VALUES
(2, 'Gustavo Rieper', 'Maternal A', 'Hoje a turma do Maternal A aprender a escrever as vogais na caixa de areia.', '7.jpg', '2018-03-28'),
(3, 'Perla', 'Maternal A', 'A turma do maternal a se divertir bastante hoje na escola.', 'IMG-20180328-WA0008.jpeg', '2018-03-28'),
(4, 'Josiane', 'Berçário', 'Xxxxxxx', 'IMG-20180328-WA0002.jpeg', '2018-03-28'),
(5, 'Tatiane', 'Maternal A', 'Descrição do que aconteceu no dia', 'bom_jesus_ielusc_colorido(1).png', '2018-03-28'),
(6, 'Luciana', 'Berçário', 'Aqui deve ser digitado a descrição para realizar a postagem.', '7.jpg', '2018-03-28'),
(7, 'Thiago', 'Maternal A', 'Trabalhado o alfabeto .', 'IMG-20180326-WA0004.jpeg', '2018-03-28'),
(8, 'Yuri', 'Berçário', 'Hoje foi trabalhado tal coisa.', 'Tulips.jpg', '2018-03-28'),
(9, '123', 'Berçário', '213', 'Version.txt', '2018-03-28');

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
(2, 'Maternal A');

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
  MODIFY `cd_solicitacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `turmas`
--
ALTER TABLE `turmas`
  MODIFY `cd_turma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cd_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
