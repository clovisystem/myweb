-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 31/05/2012 às 14h39min
-- Versão do Servidor: 5.1.62
-- Versão do PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `websyste_usuario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `arquivo` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `tituloPerfil` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `image`
--

INSERT INTO `image` (`id`, `arquivo`, `nome`, `tituloPerfil`) VALUES
(1, 'arquivos/DSC0000007.jpg', 'clovisjr@websystem.x10.mx', 'clovis jr'),
(2, 'arquivos/DSC0000009.jpg', 'angelinavalois@websystem.x10.mx', 'angelina valois'),
(3, 'arquivos/sem título08.bmp', '', ''),
(4, 'arquivos/shania-twain-12.jpg', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
