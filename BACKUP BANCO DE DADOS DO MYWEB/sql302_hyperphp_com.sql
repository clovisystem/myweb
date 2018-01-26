-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Servidor: sql302.hyperphp.com
-- Tempo de Geração: 18/01/2018 às 13:08:24
-- Versão do Servidor: 5.6.35-81.0
-- Versão do PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `hp_18627480_usuario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ana_paula`
--

CREATE TABLE IF NOT EXISTS `ana_paula` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `ana_paula`
--

INSERT INTO `ana_paula` (`codigo`, `id`, `mensagens`, `contatos`, `imagem`) VALUES
(1, NULL, NULL, 'ana_paula', 'arquivos/0,,11266601,00.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `arnaldo_chioquetta`
--

CREATE TABLE IF NOT EXISTS `arnaldo_chioquetta` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Extraindo dados da tabela `arnaldo_chioquetta`
--

INSERT INTO `arnaldo_chioquetta` (`codigo`, `id`, `mensagens`, `contatos`, `imagem`, `dia`, `mes`) VALUES
(21, '21', NULL, 'arnaldo_chioquetta', 'arquivos/arnaldo_chioquetta/xevious-simpson.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `carlos_alves`
--

CREATE TABLE IF NOT EXISTS `carlos_alves` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` varchar(60) DEFAULT NULL,
  `mes` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `carlos_alves`
--

INSERT INTO `carlos_alves` (`codigo`, `id`, `mensagens`, `contatos`, `imagem`, `dia`, `mes`) VALUES
(1, NULL, NULL, 'carlos_alves', 'arquivos/carlos_alves/', '05', '09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `CELSO__CORREIA`
--

CREATE TABLE IF NOT EXISTS `CELSO__CORREIA` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clovis_jnior`
--

CREATE TABLE IF NOT EXISTS `clovis_jnior` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `clovis_jnior`
--

INSERT INTO `clovis_jnior` (`codigo`, `id`, `mensagens`, `contatos`, `imagem`) VALUES
(1, NULL, NULL, 'clovis_jnior', 'arquivos/clovis_jnior/1236692_164207770451264_1023545717_n_(1).jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clovis_junior`
--

CREATE TABLE IF NOT EXISTS `clovis_junior` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `clovis_junior`
--

INSERT INTO `clovis_junior` (`codigo`, `id`, `mensagens`, `contatos`, `imagem`, `dia`, `mes`) VALUES
(1, NULL, NULL, 'clovis_junior', 'arquivos/clovis_junior/1236692_164207770451264_1023545717_n_(1).jpg', 0, 0),
(2, NULL, NULL, 'arnaldo_chioquetta', 'arquivos/arnaldo_chioquetta/xevious-simpson.jpg', 0, 0),
(3, NULL, NULL, 'celso__correia', '', 0, 0),
(4, NULL, NULL, 'vasco_couto', 'arquivos/vasco_couto/papagaios.jpg', 16, 1),
(6, NULL, NULL, 'renato_felix_rodrigues', 'arquivos/renato_felix_rodrigues/Foto.jpg', 0, 0),
(8, NULL, NULL, 'gilberto_oliveira', 'arquivos/gilberto_oliveira/gao.jpg', 11, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `DAVID_SODRE_SILVA`
--

CREATE TABLE IF NOT EXISTS `DAVID_SODRE_SILVA` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `mensagens` varchar(255) NOT NULL,
  `contatos` varchar(255) NOT NULL,
  `dia` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dayse_machado_`
--

CREATE TABLE IF NOT EXISTS `dayse_machado_` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` varchar(60) DEFAULT NULL,
  `mes` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `dayse_machado_`
--

INSERT INTO `dayse_machado_` (`codigo`, `id`, `mensagens`, `contatos`, `imagem`, `dia`, `mes`) VALUES
(1, NULL, NULL, 'dayse_machado_', 'arquivos/dayse_machado_/Eu-Grupo-Hare-Krishna.jpg', '10', '10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gilberto_oliveira`
--

CREATE TABLE IF NOT EXISTS `gilberto_oliveira` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `gilberto_oliveira`
--

INSERT INTO `gilberto_oliveira` (`codigo`, `id`, `mensagens`, `contatos`, `imagem`, `dia`, `mes`) VALUES
(1, NULL, NULL, 'gilberto_oliveira', 'arquivos/gilberto_oliveira/gao.jpg', 11, 5),
(3, NULL, NULL, 'clovis_junior', 'arquivos/clovis_junior/1236692_164207770451264_1023545717_n_(1).jpg', 0, 0),
(4, NULL, NULL, 'clovis_junior', 'arquivos/clovis_junior/1236692_164207770451264_1023545717_n_(1).jpg', 0, 0),
(5, NULL, NULL, 'clovis_junior', 'arquivos/clovis_junior/1236692_164207770451264_1023545717_n_(1).jpg', 0, 0),
(6, NULL, NULL, 'clovis_junior', 'arquivos/clovis_junior/1236692_164207770451264_1023545717_n_(1).jpg', 0, 0),
(7, NULL, NULL, 'clovis_junior', 'arquivos/clovis_junior/1236692_164207770451264_1023545717_n_(1).jpg', 0, 0),
(8, NULL, NULL, 'clovis_junior', 'arquivos/clovis_junior/1236692_164207770451264_1023545717_n_(1).jpg', 0, 0),
(9, NULL, NULL, 'clovis_junior', 'arquivos/clovis_junior/1236692_164207770451264_1023545717_n_(1).jpg', 0, 0),
(10, NULL, NULL, 'clovis_junior', 'arquivos/clovis_junior/1236692_164207770451264_1023545717_n_(1).jpg', 0, 0),
(11, NULL, NULL, 'clovis_junior', 'arquivos/clovis_junior/1236692_164207770451264_1023545717_n_(1).jpg', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `haroldo_costa_beca`
--

CREATE TABLE IF NOT EXISTS `haroldo_costa_beca` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `haroldo_costa_beca`
--

INSERT INTO `haroldo_costa_beca` (`codigo`, `id`, `mensagens`, `contatos`, `imagem`) VALUES
(1, NULL, NULL, 'haroldo_costa_beca', 'arquivos/haroldo_costa_beca/maxresdefault.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `huarlem_lima`
--

CREATE TABLE IF NOT EXISTS `huarlem_lima` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `huarlem_lima`
--

INSERT INTO `huarlem_lima` (`codigo`, `id`, `mensagens`, `contatos`, `imagem`, `dia`, `mes`) VALUES
(1, NULL, NULL, 'huarlem_lima', 'arquivos/huarlem_lima/', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jailce_alves_`
--

CREATE TABLE IF NOT EXISTS `jailce_alves_` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `jailce_alves_`
--

INSERT INTO `jailce_alves_` (`codigo`, `id`, `mensagens`, `contatos`, `imagem`, `dia`, `mes`) VALUES
(1, NULL, NULL, 'jailce_alves_', 'arquivos/jailce_alves_/', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `junior_prestes`
--

CREATE TABLE IF NOT EXISTS `junior_prestes` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `junior_prestes`
--

INSERT INTO `junior_prestes` (`codigo`, `id`, `mensagens`, `contatos`, `imagem`) VALUES
(1, NULL, NULL, 'junior_prestes', 'arquivos/junior_prestes/3d3e429d01324-47-1.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `leticia_sa`
--

CREATE TABLE IF NOT EXISTS `leticia_sa` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` varchar(60) DEFAULT NULL,
  `mes` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `leticia_sa`
--

INSERT INTO `leticia_sa` (`codigo`, `id`, `mensagens`, `contatos`, `imagem`, `dia`, `mes`) VALUES
(1, NULL, NULL, 'leticia_sa', 'arquivos/leticia_sa/_leid.jpg', '18', '12'),
(2, NULL, NULL, 'vagner_fernandes_bacanhim', 'arquivos/vagner_fernandes_bacanhim/img7.jpg', NULL, NULL),
(3, NULL, NULL, 'vagner_fernandes_bacanhim', 'arquivos/vagner_fernandes_bacanhim/img7.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `luiz_otavio`
--

CREATE TABLE IF NOT EXISTS `luiz_otavio` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mr_mr`
--

CREATE TABLE IF NOT EXISTS `mr_mr` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` varchar(60) DEFAULT NULL,
  `mes` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `mr_mr`
--

INSERT INTO `mr_mr` (`codigo`, `id`, `mensagens`, `contatos`, `imagem`, `dia`, `mes`) VALUES
(1, NULL, NULL, 'mr_mr', 'arquivos/mr_mr/', '01', '01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `priscila_canto`
--

CREATE TABLE IF NOT EXISTS `priscila_canto` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `priscila_canto`
--

INSERT INTO `priscila_canto` (`codigo`, `id`, `mensagens`, `contatos`, `imagem`) VALUES
(1, NULL, NULL, 'priscila_canto', 'arquivos/0f5f8a12b6344187807391527826d3f0_A.jpeg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `renato_felix_rodrigues`
--

CREATE TABLE IF NOT EXISTS `renato_felix_rodrigues` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `renato_felix_rodrigues`
--

INSERT INTO `renato_felix_rodrigues` (`codigo`, `id`, `mensagens`, `contatos`, `imagem`) VALUES
(1, NULL, NULL, 'renato_felix_rodrigues', 'arquivos/renato_felix_rodrigues/Foto.jpg'),
(3, NULL, NULL, 'clovis_junior', 'arquivos/clovis_junior/1236692_164207770451264_1023545717_n_(1).jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `rodrigo_pereira`
--

CREATE TABLE IF NOT EXISTS `rodrigo_pereira` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` varchar(60) DEFAULT NULL,
  `mes` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `rodrigo_pereira`
--

INSERT INTO `rodrigo_pereira` (`codigo`, `id`, `mensagens`, `contatos`, `imagem`, `dia`, `mes`) VALUES
(1, NULL, NULL, 'rodrigo_pereira', 'arquivos/rodrigo_pereira/', '28', '02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagner_fernandes_bacanhim`
--

CREATE TABLE IF NOT EXISTS `vagner_fernandes_bacanhim` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `dia` varchar(60) DEFAULT NULL,
  `mes` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `vagner_fernandes_bacanhim`
--

INSERT INTO `vagner_fernandes_bacanhim` (`codigo`, `id`, `mensagens`, `contatos`, `imagem`, `dia`, `mes`) VALUES
(1, NULL, NULL, 'vagner_fernandes_bacanhim', 'arquivos/vagner_fernandes_bacanhim/img7.jpg', '13', '10'),
(2, NULL, NULL, 'leticia_sa', 'arquivos/leticia_sa/_leid.jpg', '18', '12'),
(3, NULL, NULL, 'leticia_sa', 'arquivos/leticia_sa/_leid.jpg', '18', '12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vasco_couto`
--

CREATE TABLE IF NOT EXISTS `vasco_couto` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(255) DEFAULT NULL,
  `mensagens` varchar(255) DEFAULT NULL,
  `contatos` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `vasco_couto`
--

INSERT INTO `vasco_couto` (`codigo`, `id`, `mensagens`, `contatos`, `imagem`) VALUES
(1, NULL, NULL, 'vasco_couto', 'arquivos/vasco_couto/papagaios.jpg'),
(2, NULL, NULL, 'clovis_junior', 'arquivos/clovis_junior/1236692_164207770451264_1023545717_n_(1).jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `_image`
--

CREATE TABLE IF NOT EXISTS `_image` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `arquivo` varchar(255) NOT NULL,
  `nome` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `tituloPerfil` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `_image`
--

INSERT INTO `_image` (`id`, `arquivo`, `nome`, `tituloPerfil`) VALUES
(2, 'arquivos/{02A95197-04DA-4B2A-9D13-A331F9DE7DA5}_canario.jpg', 'clovisjr@websystem.hostzi.com', 'CLOVIS_JR');

-- --------------------------------------------------------

--
-- Estrutura da tabela `_mensagens`
--

CREATE TABLE IF NOT EXISTS `_mensagens` (
  `id` int(255) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `postar` varchar(255) NOT NULL,
  `sessao` varchar(255) NOT NULL,
  `diaDaSemana` blob NOT NULL,
  `mes` blob NOT NULL,
  `ano` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `_mensagens`
--

INSERT INTO `_mensagens` (`id`, `comentario`, `postar`, `sessao`, `diaDaSemana`, `mes`, `ano`) VALUES
(0, 'Te adicionei.', 'xeviousbr@gmail.com', 'CLOVIS_JUNIOR', 0x3131, 0x4a616e6569726f, 0x32303138),
(0, 'Te adicionei.', 'celsinho.ment@gmail.com', 'CLOVIS_JUNIOR', 0x3131, 0x4a616e6569726f, 0x32303138),
(0, 'Seja bem-vindo a myWeb', 'xeviousbr@gmail.com', 'CLOVIS_JUNIOR', 0x3132, 0x4a616e6569726f, 0x32303138),
(0, 'Te adicionei.', 'vascocouto@gmail.com', 'CLOVIS_JUNIOR', 0x3132, 0x4a616e6569726f, 0x32303138),
(0, 'Te adicionei.', 'renatofelix@hotmail.com', 'CLOVIS_JUNIOR', 0x3135, 0x4a616e6569726f, 0x32303138),
(0, 'Tamo junto!', 'renatofelix@hotmail.com', 'CLOVIS_JUNIOR', 0x3135, 0x4a616e6569726f, 0x32303138),
(0, 'Te adicionei.', 'renatofelix@hotmail.com', 'CLOVIS_JUNIOR', 0x3135, 0x4a616e6569726f, 0x32303138),
(0, 'Te adicionei.', 'GOLIVEIR@gmail.com', 'CLOVIS_JUNIOR', 0x3135, 0x4a616e6569726f, 0x32303138),
(0, 'Te adicionei.', 'GOLIVEIR@gmail.com', 'CLOVIS_JUNIOR', 0x3135, 0x4a616e6569726f, 0x32303138),
(0, 'Te adicionei.', 'GOLIVEIR@gmail.com', 'CLOVIS_JUNIOR', 0x3135, 0x4a616e6569726f, 0x32303138),
(0, 'Te adicionei.', 'GOLIVEIR@gmail.com', 'CLOVIS_JUNIOR', 0x3135, 0x4a616e6569726f, 0x32303138),
(0, 'Te adicionei.', 'GOLIVEIR@gmail.com', 'CLOVIS_JUNIOR', 0x3135, 0x4a616e6569726f, 0x32303138),
(0, 'Te adicionei.', 'GOLIVEIR@gmail.com', 'CLOVIS_JUNIOR', 0x3135, 0x4a616e6569726f, 0x32303138),
(0, 'Te adicionei.', 'GOLIVEIR@gmail.com', 'CLOVIS_JUNIOR', 0x3135, 0x4a616e6569726f, 0x32303138),
(0, 'Te adicionei.', 'GOLIVEIR@gmail.com', 'CLOVIS_JUNIOR', 0x3135, 0x4a616e6569726f, 0x32303138),
(0, 'Te adicionei.', 'GOLIVEIR@gmail.com', 'CLOVIS_JUNIOR', 0x3135, 0x4a616e6569726f, 0x32303138),
(0, 'Te adicionei.', 'GOLIVEIR@gmail.com', 'CLOVIS_JUNIOR', 0x3135, 0x4a616e6569726f, 0x32303138),
(0, 'Te adicionei.', 'GOLIVEIR@gmail.com', 'CLOVIS_JUNIOR', 0x3135, 0x4a616e6569726f, 0x32303138),
(0, 'Te adicionei.', 'leticiasa@gmail.com', 'VAGNER_FERNANDES_BACANHIM', 0x3136, 0x4a616e6569726f, 0x32303138),
(0, 'Te adicionei.', 'leticiasa@gmail.com', 'VAGNER_FERNANDES_BACANHIM', 0x3136, 0x4a616e6569726f, 0x32303138),
(0, 'Bem vinda, estou testando o site. ...\r\n\r\nBoa tarde.\r\n\r\nhttp://myweb.is-great.net', 'leticiasa@gmail.com', 'VAGNER_FERNANDES_BACANHIM', 0x3136, 0x4a616e6569726f, 0x32303138);

-- --------------------------------------------------------

--
-- Estrutura da tabela `_users`
--

CREATE TABLE IF NOT EXISTS `_users` (
  `codigo` int(255) NOT NULL AUTO_INCREMENT,
  `tituloPerfil` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `dia` int(2) NOT NULL,
  `mes` varchar(20) NOT NULL,
  `ano` int(4) NOT NULL,
  `atividades` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `textoPerfil` varchar(1500) NOT NULL,
  `status` varchar(255) NOT NULL,
  `imagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `background` varchar(255) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Extraindo dados da tabela `_users`
--

INSERT INTO `_users` (`codigo`, `tituloPerfil`, `email`, `senha`, `estado`, `cidade`, `dia`, `mes`, `ano`, `atividades`, `hobby`, `textoPerfil`, `status`, `imagem`, `background`) VALUES
(39, 'JAILCE_ALVES_', 'jailcealves@gmail.com', 'teste', 'to', 'araguaina', 28, '05', 1985, 'eSTUDO', 'NADAR', 'tESTE P CLOVIS', 'casado(a)', 'arquivos/jailce_alves_/', '#B5C0C3'),
(8, 'HAROLDO_CoSTA_BECA', 'juniorcavalcante@hotmail.com', '123', 'sp', 'santo andré', 16, '04', 1997, 'nada', 'nadda', 'fdgdfgfdgfdgfdgfdg', 'solteiro', 'null', 'yellow'),
(6, 'ANA_PAULA', 'anapaula@gmail.com', '123', 'rj', 'Rio de janeiro', 1, '01', 1990, 'O que você faz?', 'De que você gosta?', 'Digite aqui o que você quer exibir no seu perfil.', 'solteiro', 'arquivos/0,,11266601,00.jpg', 'yellow'),
(14, 'ROBERTO_JOAQUIM_DO_BARRO', 'robertojoaquimdobarro@gmail.com', '123', 'pe', 'recife', 1, '01', 1962, 'O que você faz?', 'De que você gosta?', 'Digite aqui o que você quer exibir no seu perfil.', 'solteiro', 'null', 'yellow'),
(38, 'HUARLEM_LIMA', 'huarlem@gmail.com@gmail.com', 'secret', '>>', 'Amadora ', 1, '01', 2011, 'O que vocï¿½ faz?', 'De que vocï¿½ gosta?', 'Digite aqui o que vocï¿½ quer exibir no seu perfil.', 'solteiro', 'arquivos/huarlem_lima/', '#B5C0C3'),
(37, 'RENATO_FELIX_RODRIGUES', 'renatofelix@hotmail.com', 'minhasenha2018', 'PR', 'Curitiba', 7, '10', 1988, '', '', '', 'casado(a)', 'arquivos/renato_felix_rodrigues/Foto.jpg', '#B5C0C3'),
(36, 'DAVID_SODRE_SILVA', 'Davidsodrelins@gmail.com', 'secret', 'BA', 'Salvador', 2, '08', 1991, 'Trabalho', 'Tv', '.', 'casado(a)', 'null', '#B5C0C3'),
(35, 'GILBERTO_OLIVEIRA', 'GOLIVEIR@gmail.com', 'mOW2018', 'mg', 'iTUIUTABA', 11, '05', 1963, 'PROFESSOR da rede Estadual de Minas Gerais', 'InformÃ¡tica, MatemÃ¡tica, mÃºsica e viajar', '', 'outro...', 'arquivos/gilberto_oliveira/gao.jpg', '#045506'),
(24, 'JUNIOR_PRESTES', 'prestes@gmail.com', '123', 'sc', 'itajai', 1, '01', 2011, 'O que vocï¿½ faz?', 'De que vocï¿½ gosta?', 'Digite aqui o que vocï¿½ quer exibir no seu perfil.', 'solteiro', 'arquivos/junior_prestes/3d3e429d01324-47-1.jpg', '#B5C0C3'),
(22, 'CLOVIS_JAºNIOR', 'clovisjr@bol.com.br', 'XCV123xcv456', 'sp', 'Santo AndrÃ©', 3, '03', 1979, 'Desenvolvo Aplicativos', 'Internet, Jesus e ufos', 'Bem-vindos ao MyWeb', 'solteiro', 'null', '#B5C0C3'),
(33, 'VASCO_COUTO', 'vascocouto@gmail.com', '3456', 'rj', 'petropolis', 1, '01', 2011, 'viajo', 'navegar', 'Deus salve portugal', 'casado(a)', 'arquivos/vasco_couto/papagaios.jpg', '#B5C0C3'),
(34, 'PRISCILA_CANTO', 'pri@uol.com.br', '9o9', 'mg', 'paracatu', 1, '01', 2011, 'estudo', 'andar de bike', 'viva respeitando', 'solteiro', 'arquivos/priscila_canto/PREPARA_CURSOS.jpg', '#B5C0C3'),
(28, 'CLOVIS_JUNIOR', 'clovisjr@hotmail.com', 'XCV123xcv456', 'sp', 'Santo AndrÃ©', 3, '03', 1979, 'AnÃ¡lise e desenvolvimento de sistemas', 'Internet', 'Sejam bem-vindos ao MyWeb', 'solteiro', 'arquivos/clovis_junior/1236692_164207770451264_1023545717_n_(1).jpg', '#045506'),
(29, 'CELSO__CORREIA', 'celsinho.ment@gmail.com', 'MENT01', 'MG', 'BELO HORIZONTE', 1, '09', 1987, 'Trabalho', 'Ler e assistir filmes e sÃ©ries.', 'GN 1:1', 'casado(a)', 'null', 'red'),
(31, 'ARNALDO_CHIOQUETTA', 'xeviousbr@gmail.com', 'ufrs3753', 'RS', 'Porto Alegre', 3, '11', 1966, 'Programador', 'Sexo', 'Sou feito de atomos.\r\nE meus atomos de energia.', 'casado(a)', 'arquivos/arnaldo_chioquetta/xevious-simpson.jpg', '#B5C0C3'),
(46, 'DAYSE_MACHADO_', 'dayserosana@gmail.com@gmail.com', 'ufrsufrs', 'RS', 'Porto Alegre', 10, '10', 1964, 'Sou administradora do Forum Portal da Luz.', 'Praia, sol e cerveja.', 'http://www.portaldaluz.com', 'casado(a)', 'arquivos/dayse_machado_/Eu-Grupo-Hare-Krishna.jpg', '#B5C0C3'),
(45, 'LETICIA_SA', 'leticiasa@gmail.com', 'secret', 'rj', 'rio de janeiro', 18, '12', 2004, 'estudo', 'fazer amigos', 'me add no myweb!', 'solteiro', 'arquivos/leticia_sa/_leid.jpg', '#B5C0C3'),
(47, 'RODRIGO_PEREIRA', 'rodriguinhooliveira2@gmail.com', 'Rodrigo2018', 'MG', 'UnaÃ­', 28, '02', 1997, 'O que vocï¿½ faz?', 'De que vocï¿½ gosta?', 'Digite aqui o que vocï¿½ quer exibir no seu perfil.', 'solteiro', 'arquivos/rodrigo_pereira/', '#B5C0C3'),
(48, 'MR_MR', 'Mr@gmail.com', 'ts12', 'Pb', 'Pb', 1, '01', 2011, 'O que vocï¿½ faz?', 'De que vocï¿½ gosta?', 'Digite aqui o que vocï¿½ quer exibir no seu perfil.', 'solteiro', 'arquivos/mr_mr/', 'red'),
(49, 'CARLOS_ALVES', 'carlosalvesg12@gmail.com', 'descubra', 'ba', 'juazeiro', 5, '09', 1992, 'Programador c# web e desktop', 'Musico', 'Digite aqui o que vocï¿½ quer exibir no seu perfil.', 'solteiro', 'arquivos/carlos_alves/', 'purple'),
(50, 'VAGNER_FERNANDES_BACANHIM', 'Vfb.1393@gmail.com', 'vagner1316', 'Sp', 'Barueri', 13, '10', 1993, 'Trabalho na Ã¡rea de TI', 'Fazer novas amizades', 'Bem vindo a todos\r\n\r\n', 'casado(a)', 'arquivos/vagner_fernandes_bacanhim/img7.jpg', '#0eb8d7');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
