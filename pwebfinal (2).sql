-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Jun-2019 às 22:04
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

--
-- Extraindo dados da tabela `clubeusuario`
--

INSERT INTO `clubeusuario` (`idUniao`, `loginuser`, `idtime`) VALUES
(5, 'kaka', 104),
(6, 'andersonribeir0', 105),
(7, 'luisao', 106);

-- --------------------------------------------------------

--
-- Estrutura da tabela `colocacaoreal`
--

CREATE TABLE `colocacaoreal` (
  `idcolocacaoreal` int(11) NOT NULL,
  `colocacao` int(11) NOT NULL,
  `times_idtime` int(11) NOT NULL,
  `rodada_idrodada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `colocacaotime`
--

CREATE TABLE `colocacaotime` (
  `idcolocacaotime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `colocacaotime`
--

INSERT INTO `colocacaotime` (`idcolocacaotime`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21);

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

--
-- Extraindo dados da tabela `jogador`
--

INSERT INTO `jogador` (`idJogador`, `NomeJogador`, `FotoJogador`, `Habilidade`, `Raca`, `CapFis`, `idtime`) VALUES
(11, 'Rivaldo', '15606217895d0532dd1ce6d.png', 15, 52, 81, 104),
(12, 'Mauricio', '15606217895d0532dd331ea.png', 80, 70, 787887, 104),
(13, 'autruista', '15606220145d0533be1368b.png', 88, 99, 66, 105),
(14, 'Lucao', '15606220145d0533be2d4a1.png', 11, 23, 55, 105),
(15, 'adsadsa', '15606223135d0534e9d4e8d.png', 44, 44, 44, 106),
(16, 'pppopop', '15606223135d0534e9e63e9.png', 12, 12, 12, 106);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontuacao`
--

CREATE TABLE `pontuacao` (
  `idpontuacao` int(11) NOT NULL,
  `pontos` int(11) DEFAULT NULL,
  `usuario_loginuser` varchar(45) NOT NULL,
  `rodada_idrodada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rodada`
--

CREATE TABLE `rodada` (
  `idrodada` int(11) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

--
-- Extraindo dados da tabela `timescad`
--

INSERT INTO `timescad` (`idtime`, `nometime`, `fototime`, `hp`) VALUES
(104, 'JoaoFC', '15606217435d0532afbe959.png', 1000),
(105, 'LuisFc', '15606219965d0533acc9aa6.png', 1000),
(106, 'empiricuas', '15606222915d0534d3509da.png', 1000);

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
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`loginuser`, `nomeuser`, `senhauser`, `emailuser`) VALUES
('admin', 'eu', 'admin', 'eu@gmail.com'),
('andersonribeir0', 'Anderson Luis', 'adriana29', 'anderson.anderson557@gmail.com'),
('kaka', 'kaka', '123', 'kakakaj@gmail.com'),
('luisao', 'Luis', '123', 'luis.feitosa@hotmail.com');

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
-- Indexes for table `colocacaoreal`
--
ALTER TABLE `colocacaoreal`
  ADD PRIMARY KEY (`idcolocacaoreal`),
  ADD KEY `fk_colocacaoreal_times1_idx` (`times_idtime`),
  ADD KEY `fk_colocacaoreal_rodada1_idx` (`rodada_idrodada`);

--
-- Indexes for table `colocacaotime`
--
ALTER TABLE `colocacaotime`
  ADD PRIMARY KEY (`idcolocacaotime`);

--
-- Indexes for table `jogador`
--
ALTER TABLE `jogador`
  ADD PRIMARY KEY (`idJogador`),
  ADD KEY `idtime` (`idtime`);

--
-- Indexes for table `pontuacao`
--
ALTER TABLE `pontuacao`
  ADD PRIMARY KEY (`idpontuacao`),
  ADD KEY `fk_pontuacao_usuario1_idx` (`usuario_loginuser`),
  ADD KEY `fk_pontuacao_rodada1_idx` (`rodada_idrodada`);

--
-- Indexes for table `rodada`
--
ALTER TABLE `rodada`
  ADD PRIMARY KEY (`idrodada`);

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
  MODIFY `idUniao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `colocacaoreal`
--
ALTER TABLE `colocacaoreal`
  MODIFY `idcolocacaoreal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `colocacaotime`
--
ALTER TABLE `colocacaotime`
  MODIFY `idcolocacaotime` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `jogador`
--
ALTER TABLE `jogador`
  MODIFY `idJogador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pontuacao`
--
ALTER TABLE `pontuacao`
  MODIFY `idpontuacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `rodada`
--
ALTER TABLE `rodada`
  MODIFY `idrodada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `timescad`
--
ALTER TABLE `timescad`
  MODIFY `idtime` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `colocacaoreal`
--
ALTER TABLE `colocacaoreal`
  ADD CONSTRAINT `fk_colocacaoreal_rodada1` FOREIGN KEY (`rodada_idrodada`) REFERENCES `rodada` (`idrodada`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_colocacaoreal_times1` FOREIGN KEY (`times_idtime`) REFERENCES `timescad` (`idtime`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pontuacao`
--
ALTER TABLE `pontuacao`
  ADD CONSTRAINT `fk_pontuacao_rodada1` FOREIGN KEY (`rodada_idrodada`) REFERENCES `rodada` (`idrodada`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pontuacao_usuario1` FOREIGN KEY (`usuario_loginuser`) REFERENCES `usuario` (`loginuser`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
