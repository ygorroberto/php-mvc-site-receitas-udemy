-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 12/02/2021 às 14:51
-- Versão do servidor: 5.7.33-0ubuntu0.18.04.1
-- Versão do PHP: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `my-receitas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `receita`
--

CREATE TABLE `receita` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `slug` varchar(120) NOT NULL,
  `linha_fina` varchar(250) NOT NULL,
  `descricao` text NOT NULL,
  `thumb` varchar(250) NOT NULL,
  `data` datetime NOT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Fazendo dump de dados para tabela `receita`
--

INSERT INTO `receita` (`id`, `titulo`, `slug`, `linha_fina`, `descricao`, `thumb`, `data`, `categoria_id`) VALUES
(11, 'Bolo de Uva', 'bolo-de-uva', 'Bolo de uva caramelizado', '&#60;p&#62;Modo de preparo:&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;1 cx de leite mo&#38;ccedil;a;&#60;/li&#62;&#13;&#10;&#9;&#60;li&#62;1 lt de leite&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;&#38;nbsp;&#60;/p&#62;&#13;&#10;', 'https://img.itdg.com.br/tdg/images/recipes/000/017/510/138365/138365_original.jpg?mode=crop&width=710&height=400', '2021-02-11 10:55:16', 2),
(12, 'Pão de Ló', 'pao-de-lo', 'Receita de pão de ló', '&#60;p&#62;O p&#38;atilde;o de l&#38;oacute; &#38;eacute; feito assim:&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;p&#62;1 lata de leite condensado&#60;/p&#62;&#13;&#10;', 'https://s2.glbimg.com/Amq2eoNg6mfkLIhitrO4NY4hHVU=/0x0:1920x1280/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_e84042ef78cb4708aeebdf1c68c6cbd6/internal_photos/bs/2020/9/j/vRFAVZS1CcrV3i0VKQng/pao-de-lo.jpg', '2021-02-11 10:56:36', 1),
(13, 'Bolo de fubá', 'bolo-de-fuba', 'O bolo de fubá da vovó', '&#60;h1&#62;NOVA RECEITA&#38;nbsp;NOVA RECEITA&#60;/h1&#62;&#13;&#10;', 'https://conteudo.imguol.com.br/c/entretenimento/9f/2020/06/15/bolo-de-fuba-1592241605327_v2_900x506.jpg', '2021-02-11 17:33:14', 1),
(14, 'Bolo de milho', 'bolo-de-milho', 'Bolo de milho em forma de pudim', '&#60;p&#62;Ingrediantes:&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;&#38;nbsp;&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;&#13;&#10;&#60;p&#62;Modo de preparo:&#60;/p&#62;&#13;&#10;&#13;&#10;&#60;ul&#62;&#13;&#10;&#9;&#60;li&#62;&#38;nbsp;&#60;/li&#62;&#13;&#10;&#60;/ul&#62;&#13;&#10;', 'https://comidinhasdochef.com/wp-content/uploads/2019/01/Bolo-de-Milho-F%C3%A1cil.jpg', '2021-02-12 13:44:25', 5);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `receita`
--
ALTER TABLE `receita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `receita`
--
ALTER TABLE `receita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
