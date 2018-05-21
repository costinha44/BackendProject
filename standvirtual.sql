-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19-Dez-2017 às 22:27
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `standvirtual`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autcarat`
--

CREATE TABLE `autcarat` (
  `cod_aut` int(11) NOT NULL,
  `cod_carat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `autcarat`
--

INSERT INTO `autcarat` (`cod_aut`, `cod_carat`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `autcomb`
--

CREATE TABLE `autcomb` (
  `cod_aut` int(11) NOT NULL,
  `cod_comb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `autcomb`
--

INSERT INTO `autcomb` (`cod_aut`, `cod_comb`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `autfoto`
--

CREATE TABLE `autfoto` (
  `cod_aut` int(11) NOT NULL,
  `cod_foto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `autfoto`
--

INSERT INTO `autfoto` (`cod_aut`, `cod_foto`) VALUES
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `automoveis`
--

CREATE TABLE `automoveis` (
  `cod_aut` int(11) NOT NULL,
  `marca` int(11) NOT NULL,
  `modelo` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `ano` int(4) NOT NULL,
  `mes` int(2) NOT NULL,
  `cilindrada` int(4) NOT NULL,
  `potencia` int(3) NOT NULL,
  `kms` int(11) NOT NULL,
  `preco` float NOT NULL,
  `cor` varchar(15) NOT NULL,
  `nportas` int(11) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `destaque` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `automoveis`
--

INSERT INTO `automoveis` (`cod_aut`, `marca`, `modelo`, `titulo`, `ano`, `mes`, `cilindrada`, `potencia`, `kms`, `preco`, `cor`, `nportas`, `descricao`, `destaque`) VALUES
(1, 1, 2, 'BMW SERIE1', 1998, 12, 1999, 100, 2000000, 12000, 'vege', 3, 'weiofweoifjwoeifwef', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `autportas`
--

CREATE TABLE `autportas` (
  `cod_aut` int(11) NOT NULL,
  `cod_portas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `autportas`
--

INSERT INTO `autportas` (`cod_aut`, `cod_portas`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `carateristicas`
--

CREATE TABLE `carateristicas` (
  `cod_carat` int(11) NOT NULL,
  `carateristicas` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carateristicas`
--

INSERT INTO `carateristicas` (`cod_carat`, `carateristicas`) VALUES
(1, 'Jantes de liga leve'),
(2, 'Direção assistida');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `cod_cliente` mediumint(9) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `morada` varchar(120) CHARACTER SET latin1 NOT NULL,
  `localidade` varchar(50) CHARACTER SET latin1 NOT NULL,
  `cp` char(8) CHARACTER SET latin1 NOT NULL,
  `telefone` int(10) UNSIGNED NOT NULL,
  `email` varchar(60) CHARACTER SET latin1 NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data_registo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cod_cliente`, `nome`, `morada`, `localidade`, `cp`, `telefone`, `email`, `senha`, `data_registo`) VALUES
(1, 'André Costa', 'aergregerg', 'ergerg', '4100-700', 1346789, 'andre@gmail.com', '$2y$10$oDSH2589IxRZURekghTBJecAd7TpNknDYXHklAhTOgburczx2pk/e', '2017-11-21 21:13:47'),
(2, 'andre', 'anana', 'nfwnef', '4100-100', 123456789, 'andre1@gmail.com', '$2y$10$fmWMvKdTceoAV4NcwnYfqeQv5EgfV8HueJ7sHMUR3C3hP1sHix/jy', '2017-11-25 16:06:20'),
(3, 'andrecosta', 'qwerty', 'qwerty', '1234-500', 123456789, 'andrecosta@gmail.com', '$2y$10$5.arGEPIXEdhfIoN18gGMuWdkhINaOS.n3WEqsq6UzslcB/YpF74WU', '2017-11-25 16:09:22'),
(4, 'andrecosta2', 'andre', 'andre', '3100-100', 123456789, 'andrecosta2@gmail.com', '$2y$10$ruM4MiaW.olbhvExPnnBgODEz9ZHPzb0NxvElDfcoJs2xr0m88Dwa', '2017-11-25 16:13:11'),
(5, 'andre', 'andre', 'andre', '4100', 123123, 'rwerwe@gmail.com', '$2y$10$cZgp0y8wycsVX62a1ZvryuTK7isAuXBns7HSRxxbQBNBvQTAQ.bz6', '2017-11-25 16:58:18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `combustivel`
--

CREATE TABLE `combustivel` (
  `cod_comb` int(11) NOT NULL,
  `combustivel` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `combustivel`
--

INSERT INTO `combustivel` (`cod_comb`, `combustivel`) VALUES
(1, 'gasoleo'),
(2, 'gasolina');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE `fotos` (
  `cod_foto` int(11) NOT NULL,
  `foto` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `fotos`
--

INSERT INTO `fotos` (`cod_foto`, `foto`) VALUES
(1, 'fotos/bmw1.jpg'),
(2, 'fotos/bmw2.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcas`
--

CREATE TABLE `marcas` (
  `cod_marca` tinyint(3) UNSIGNED NOT NULL,
  `marca` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `marcas`
--

INSERT INTO `marcas` (`cod_marca`, `marca`) VALUES
(1, 'Alfa Romeo'),
(2, 'Aston Martin'),
(3, 'Audi'),
(4, 'Austin Morris'),
(5, 'Bentley'),
(6, 'BMW'),
(7, 'Chevrolet'),
(8, 'Chrysler'),
(9, 'Citroën'),
(10, 'Dacia'),
(11, 'Daewoo'),
(12, 'Daihatsu'),
(13, 'Dodge'),
(14, 'DS'),
(15, 'Ferrari'),
(16, 'Fiat'),
(17, 'Ford'),
(18, 'GMC'),
(19, 'Honda'),
(20, 'Hummer'),
(21, 'Hyundai'),
(22, 'Isuzu'),
(23, 'Jaguar'),
(24, 'Jeep'),
(25, 'Kia'),
(26, 'Lada'),
(27, 'Lamborghini'),
(28, 'Lancia'),
(29, 'Land Rover'),
(30, 'Lexus'),
(31, 'Lotus'),
(32, 'Maserati'),
(33, 'Mazda'),
(34, 'Mercedes-Benz'),
(35, 'MG'),
(36, 'MINI'),
(37, 'Mitsubishi'),
(38, 'Nissan'),
(39, 'Opel'),
(40, 'Peugeot'),
(41, 'Porsche'),
(42, 'Renault'),
(43, 'Rolls Royce'),
(44, 'Rover'),
(45, 'Saab'),
(46, 'Seat'),
(47, 'Skoda'),
(48, 'Smart'),
(49, 'SsangYong'),
(50, 'Subaru'),
(51, 'Suzuki'),
(52, 'Tata'),
(53, 'Toyota'),
(54, 'UMM'),
(55, 'Vauxhall'),
(56, 'Volvo'),
(57, 'VW');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelo`
--

CREATE TABLE `modelo` (
  `cod_modelo` int(11) NOT NULL,
  `modelo` int(11) NOT NULL,
  `cod_marca` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `modelo`
--

INSERT INTO `modelo` (`cod_modelo`, `modelo`, `cod_marca`) VALUES
(1, 145, 1),
(2, 146, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `nportas`
--

CREATE TABLE `nportas` (
  `cod_portas` int(11) NOT NULL,
  `n_portas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `nportas`
--

INSERT INTO `nportas` (`cod_portas`, `n_portas`) VALUES
(1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `automoveis`
--
ALTER TABLE `automoveis`
  ADD PRIMARY KEY (`cod_aut`);

--
-- Indexes for table `carateristicas`
--
ALTER TABLE `carateristicas`
  ADD PRIMARY KEY (`cod_carat`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cod_cliente`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `combustivel`
--
ALTER TABLE `combustivel`
  ADD PRIMARY KEY (`cod_comb`);

--
-- Indexes for table `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`cod_foto`);

--
-- Indexes for table `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`cod_marca`);

--
-- Indexes for table `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`cod_modelo`),
  ADD KEY `cod_marca` (`cod_marca`);

--
-- Indexes for table `nportas`
--
ALTER TABLE `nportas`
  ADD PRIMARY KEY (`cod_portas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `automoveis`
--
ALTER TABLE `automoveis`
  MODIFY `cod_aut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `carateristicas`
--
ALTER TABLE `carateristicas`
  MODIFY `cod_carat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cod_cliente` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `combustivel`
--
ALTER TABLE `combustivel`
  MODIFY `cod_comb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fotos`
--
ALTER TABLE `fotos`
  MODIFY `cod_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `marcas`
--
ALTER TABLE `marcas`
  MODIFY `cod_marca` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `modelo`
--
ALTER TABLE `modelo`
  MODIFY `cod_modelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nportas`
--
ALTER TABLE `nportas`
  MODIFY `cod_portas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
