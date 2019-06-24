-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Jun-2019 às 18:45
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwebfinal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clubeusuario`
--

CREATE TABLE `clubeusuario` (
  `idUniao` int(11) NOT NULL,
  `loginuser` varchar(45) NOT NULL,
  `idtime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogador`
--

CREATE TABLE `jogador` (
  `idJogador` int(11) NOT NULL,
  `NomeJogador` varchar(45) NOT NULL,
  `FotoJogador` varchar(45) NOT NULL,
  `Habilidade` int(11) NOT NULL,
  `Raca` int(11) NOT NULL,
  `CapFis` int(11) NOT NULL,
  `idtime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `timescad`
--

CREATE TABLE `timescad` (
  `idtime` int(11) NOT NULL,
  `nometime` varchar(45) NOT NULL,
  `fototime` varchar(45) NOT NULL,
  `hp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `loginuser` varchar(45) NOT NULL,
  `nomeuser` varchar(45) NOT NULL,
  `senhauser` varchar(45) NOT NULL,
  `emailuser` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clubeusuario`
--
ALTER TABLE `clubeusuario`
  ADD PRIMARY KEY (`idUniao`),
  ADD KEY `loginuser` (`idUniao`),
  ADD KEY `loginuser_2` (`loginuser`),
  ADD KEY `idtime` (`idtime`);

--
-- Indexes for table `jogador`
--
ALTER TABLE `jogador`
  ADD PRIMARY KEY (`idJogador`),
  ADD KEY `idtime` (`idtime`);

--
-- Indexes for table `timescad`
--
ALTER TABLE `timescad`
  ADD PRIMARY KEY (`idtime`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`loginuser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clubeusuario`
--
ALTER TABLE `clubeusuario`
  MODIFY `idUniao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `jogador`
--
ALTER TABLE `jogador`
  MODIFY `idJogador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `timescad`
--
ALTER TABLE `timescad`
  MODIFY `idtime` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
