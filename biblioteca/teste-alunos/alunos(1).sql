-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 17/05/2018 às 12:38
-- Versão do servidor: 10.1.28-MariaDB
-- Versão do PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `codigo_aluno` int(11) DEFAULT NULL,
  `data_retirada` date DEFAULT NULL,
  `data_entrega` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `codigo_aluno`, `data_retirada`, `data_entrega`) VALUES
(2, NULL, '2018-05-14', '2018-05-22'),
(17, 73, '2018-05-14', '2018-05-25'),
(18, 75, '2018-05-14', '2018-05-25'),
(20, 68, '2018-05-15', '2018-05-25'),
(21, 73, '2018-05-07', '2018-05-23');

--
-- Índices de tabelas apagadas
--


--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `codigo_aluno` (`codigo_aluno`);

--
-- AUTO_INCREMENT de tabelas apagadas
--


--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`codigo_aluno`) REFERENCES `aluno` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
