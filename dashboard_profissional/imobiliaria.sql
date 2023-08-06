-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 06-Ago-2023 às 02:52
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `imobiliaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(200) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(150) DEFAULT NULL,
  `endereco_cliente` varchar(250) DEFAULT NULL,
  `nro_end_cliente` int NOT NULL,
  `bairro_cliente` varchar(150) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `uf_cliente` varchar(5) NOT NULL,
  `cep_cliente` varchar(10) NOT NULL,
  `mail_cliente` varchar(50) NOT NULL,
  `cpf_cliente` varchar(15) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `foto`
--

DROP TABLE IF EXISTS `foto`;
CREATE TABLE IF NOT EXISTS `foto` (
  `id_foto` int NOT NULL AUTO_INCREMENT,
  `nome_foto` varchar(100) NOT NULL,
  `id_imovel_foto` int NOT NULL,
  PRIMARY KEY (`id_foto`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imovel`
--

DROP TABLE IF EXISTS `imovel`;
CREATE TABLE IF NOT EXISTS `imovel` (
  `id_imovel` int NOT NULL AUTO_INCREMENT,
  `end_imovel` varchar(150) NOT NULL,
  `nro_end_imovel` int NOT NULL,
  `bairro_imovel` varchar(50) NOT NULL,
  `cidade_imovel` varchar(50) NOT NULL,
  `uf_imovel` int NOT NULL,
  `cep_imovel` varchar(10) NOT NULL,
  `complemento_imovel` varchar(100) NOT NULL,
  `valor_imovel` float NOT NULL,
  `id_modalidade_imovel` int NOT NULL,
  `id_pagamento_imovel` int NOT NULL,
  `id_categoria_imovel` int NOT NULL,
  `id_cliente_imovel` int NOT NULL,
  PRIMARY KEY (`id_imovel`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `modalidade`
--

DROP TABLE IF EXISTS `modalidade`;
CREATE TABLE IF NOT EXISTS `modalidade` (
  `id_modalidade` int NOT NULL AUTO_INCREMENT,
  `tipo_modalidade` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_modalidade`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

DROP TABLE IF EXISTS `pagamento`;
CREATE TABLE IF NOT EXISTS `pagamento` (
  `id_pagamento` int NOT NULL AUTO_INCREMENT,
  `tipo_pagamento` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_pagamento`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(100) NOT NULL,
  `nivel_acesso_usuario` varchar(50) NOT NULL,
  `mail_usuario` varchar(100) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha_usuario` varchar(100) NOT NULL,
  `identificacao_usuario` varchar(10) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
