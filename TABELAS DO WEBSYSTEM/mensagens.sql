-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 31/05/2012 às 14h37min
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
-- Estrutura da tabela `mensagens`
--

CREATE TABLE IF NOT EXISTS `mensagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` varchar(255) NOT NULL,
  `postar` varchar(255) NOT NULL,
  `sessao` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Extraindo dados da tabela `mensagens`
--

INSERT INTO `mensagens` (`id`, `comentario`, `postar`, `sessao`) VALUES
(19, '..', '..', '..'),
(5, 'oi', 'clovisjr@websystem.x10.mx', 'monica@websystem.x10.mx'),
(6, 'oi ', 'monica@websystem.x10.mx', 'clovisjr@websystem.x10.mx'),
(18, '..', '..', '..'),
(13, '.oi.', '.junior.', '.monica.'),
(10, 'isset()?:null', 'isset()?:null', 'isset()?:null'),
(17, '..', '..', '..'),
(12, '..', '..', '..'),
(20, '..', '..', '..'),
(21, '..', '..', '..'),
(22, '.tre.', '.monica@websystem.x10.mx.', '.junior@websystem.x10.mx.'),
(23, 'tre', 'monica@websystem.x10.mx', 'junior@websystem.x10.mx'),
(24, 'tres', 'monica@websystem.x10.mx', 'junior@websystem.x10.mx'),
(25, 'add vc!', 'monica@websystem.x10.mx', 'ze@websystem.x10.mx');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
