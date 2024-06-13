-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 07-Jun-2024 às 20:47
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_clientes`
--
CREATE DATABASE IF NOT EXISTS `bd_clientes` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bd_clientes`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

DROP TABLE IF EXISTS `tb_clientes`;
CREATE TABLE IF NOT EXISTS `tb_clientes` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nascto` date NOT NULL,
  `fotoUrl` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
--
-- Banco de dados: `bd_cliente_camisa`
--
CREATE DATABASE IF NOT EXISTS `bd_cliente_camisa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `bd_cliente_camisa`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `nomeCamisa` varchar(40) NOT NULL,
  `infoProduto` varchar(300) NOT NULL,
  `precoProduto` double NOT NULL,
  `timeProduto` varchar(20) NOT NULL,
  `codProduto` int NOT NULL AUTO_INCREMENT,
  `fotoProduto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`codProduto`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`nomeCamisa`, `infoProduto`, `precoProduto`, `timeProduto`, `codProduto`, `fotoProduto`) VALUES
('camisa vila real', 'aaaaaa', 5, 'sdasda', 1, 'fotosProdutos/6bb96d7014bd7f63caba4a4469464c94.jpg'),
('socorro2', 'asdddad', 132323, 'sdadasda', 2, 'fotosProdutos/6e49c87c914606e07837c9e47a45e0bd.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `registro`
--

DROP TABLE IF EXISTS `registro`;
CREATE TABLE IF NOT EXISTS `registro` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cpf` int NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `telefone` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nascto` date NOT NULL,
  `time` varchar(20) NOT NULL,
  `senha` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fotoUrl` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `registro`
--

INSERT INTO `registro` (`codigo`, `nome`, `email`, `cpf`, `sexo`, `telefone`, `nascto`, `time`, `senha`, `fotoUrl`) VALUES
(1, 'ADM', 'adm@roost.com', 0, 'opcao1', '(00)00000-0000', '0001-01-01', '0', '202cb962ac59075b964b07152d234b70', 'fotosClientes/49440389c5ef144deaf9e706b096bd98.jpg'),
(2, 'gabriel teste', 'gabriel@teste.com', 123123, 'opcao1', '(00)00000-0000', '2000-02-01', '1', '202cb962ac59075b964b07152d234b70', 'fotosClientes/2a37b7cab570322866ea90e6da289ec5.jpg');
--
-- Banco de dados: `tech`
--
CREATE DATABASE IF NOT EXISTS `tech` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `tech`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `registro`
--

DROP TABLE IF EXISTS `registro`;
CREATE TABLE IF NOT EXISTS `registro` (
  `email` varchar(60) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `nomeCompleto` varchar(60) NOT NULL,
  `data` date NOT NULL,
  `Cliente` int NOT NULL,
  PRIMARY KEY (`Cliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
--
-- Banco de dados: `teste`
--
CREATE DATABASE IF NOT EXISTS `teste` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `teste`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

DROP TABLE IF EXISTS `departamento`;
CREATE TABLE IF NOT EXISTS `departamento` (
  `cod_dep` int NOT NULL AUTO_INCREMENT,
  `descr` varchar(40) NOT NULL,
  `localiz` varchar(30) NOT NULL,
  PRIMARY KEY (`cod_dep`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
