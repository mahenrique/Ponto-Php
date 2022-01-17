-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Maio-2017 às 20:49
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 
*/;

--
-- Database: `db_registro`

CREATE TABLE `tb_funcionarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `senha` int(6) NOT NULL,
  `senha_entrada` int(6) NOT NULL,
  `funcao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--
-- Extraindo dados da tabela `tb_funcionarios`
--


INSERT INTO `tb_funcionarios` (`id`, `nome`, `cpf`, `senha`, `senha_entrada`, `funcao`) VALUES
(1, 'Wendel da Silva Oliveira', '888.888.888-88', 123456, 111111, 'Programador php'),
(2, 'Beatriz Oliveira', '999.999.999-99', 123456, 222222, 'Gerente de Projeto'),
(3, 'Ary Enzo Galdino', '777.777.777-77', 123456, 333333, 'Analista de Sistemas'),
(4, 'Arthur Ary Galdino', '111.111.111-11', 123456, 444444, 'Arquiteto ti'),
(5, 'ricardo boache', '222.222.222-22', 999999, 987654, 'jornalista');




--
-- 

--


CREATE TABLE `tb_registro` (
  `id` int(11) NOT NULL,
  `senha` int(6) NOT NULL,
  `senha_entrada` int(6) NOT NULL,
  `datas` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--
-- Extraindo dados da tabela `tb_registro`
--


INSERT INTO `tb_registro` (`id`, `senha`, `senha_entrada`, `datas`) VALUES
(1, 123456, 111111, '2017-04-30 00:41:07'),
(7, 123456, 222222, '2017-05-01 01:17:15'),
(9, 123456, 333333, '2017-05-01 12:22:45');



--
-- Indexes for dumped tables
--

--
-- 


ALTER TABLE `tb_funcionarios`
  ADD PRIMARY KEY (`id`);



--
-- Indexes for table `tb_registro`
--

ALTER TABLE `tb_registro`
  ADD PRIMARY KEY (`id`);



--
-- AUTO_INCREMENT for dumped tables
--

--



ALTER TABLE `tb_funcionarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;


--
-- AUTO_INCREMENT for table `tb_registro`
--

ALTER TABLE `tb_registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
