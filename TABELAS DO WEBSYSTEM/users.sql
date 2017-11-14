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
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `tituloPerfil` varchar(36) NOT NULL,
  `email` varchar(36) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `dia` int(11) NOT NULL,
  `mes` varchar(255) NOT NULL,
  `ano` int(11) NOT NULL,
  `atividades` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `textoPerfil` varchar(255) NOT NULL,
  `objetivo` varchar(255) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`codigo`, `tituloPerfil`, `email`, `senha`, `estado`, `cidade`, `dia`, `mes`, `ano`, `atividades`, `hobby`, `textoPerfil`, `objetivo`) VALUES
(1, 'clovis jr', 'clovisjr@websystem.x10.mx', '987', 'sp', 'santo andré', 3, '03', 2001, 'Trabalho com Informática', 'Programar e mexer em aparelhos eletronicos', 'Digite aqui o que você quer exibir no seu perfil.', 'namorando'),
(2, 'angelina valois', 'angelinavalois@websystem.x10.mx', '987', 'rj', 'rio de janeiro', 30, '08', 2000, 'O que você faz?', 'De que você gosta?', 'Digite aqui o que você quer exibir no seu perfil.', 'casado(a)'),
(3, 'ze', 'ze@websystem.x10.mx', '123', 'pe', 'olinda', 1, '01', 2011, 'O que você faz?', 'De que você gosta?', 'Digite aqui o que você quer exibir no seu perfil.', 'solteiro'),
(4, 'junior', 'junior@websystem.x10.mx', '987', 'mg', 'juiz de fora', 1, '01', 2011, 'O que você faz?', 'De que você gosta?', 'Digite aqui o que você quer exibir no seu perfil.', 'solteiro'),
(5, 'monica', 'monica@websystem.x10.mx', '123', 'rn', 'natal', 1, '01', 2011, 'O que você faz?', 'De que você gosta?', 'Digite aqui o que você quer exibir no seu perfil.', 'namorando');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
