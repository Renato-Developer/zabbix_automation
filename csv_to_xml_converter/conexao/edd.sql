-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Maio-2020 às 22:31
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `edd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `hosts_temp`
--

CREATE TABLE `hosts_temp` (
  `id` int(3) NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `circuito` varchar(50) NOT NULL,
  `ip_estacao` varchar(50) NOT NULL,
  `ip_cliente` varchar(50) NOT NULL,
  `switch` varchar(50) NOT NULL,
  `porta` varchar(50) NOT NULL,
  `vlan` varchar(50) NOT NULL,
  `estacao` varchar(50) NOT NULL,
  `tipo1` varchar(50) NOT NULL,
  `tipo2` varchar(50) NOT NULL,
  `selementid_estacao` varchar(50) NOT NULL,
  `selementid_cliente` varchar(50) NOT NULL,
  `pos_x_estacao` varchar(50) NOT NULL,
  `pos_y_estacao` varchar(50) NOT NULL,
  `pos_x_cliente` varchar(50) NOT NULL,
  `pos_y_cliente` varchar(50) NOT NULL,
  `cabo` varchar(5) NOT NULL,
  `dgo` varchar(50) NOT NULL,
  `pos` varchar(50) NOT NULL,
  `fila` varchar(32) NOT NULL,
  `fibra` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `registro_hosts`
--

CREATE TABLE `registro_hosts` (
  `id` int(50) NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `circuito` varchar(50) NOT NULL,
  `ip_estacao` varchar(50) NOT NULL,
  `ip_cliente` varchar(50) NOT NULL,
  `switch` varchar(50) NOT NULL,
  `porta` varchar(50) NOT NULL,
  `vlan` varchar(50) NOT NULL,
  `estacao` varchar(50) NOT NULL,
  `tipo1` varchar(50) NOT NULL,
  `tipo2` varchar(50) NOT NULL,
  `selementid_estacao` varchar(50) NOT NULL,
  `selementid_cliente` varchar(50) NOT NULL,
  `pos_x_estacao` varchar(50) NOT NULL,
  `pos_y_estacao` varchar(50) NOT NULL,
  `pos_x_cliente` varchar(50) NOT NULL,
  `pos_y_cliente` varchar(50) NOT NULL,
  `cabo` varchar(50) NOT NULL,
  `dgo` varchar(50) NOT NULL,
  `pos` varchar(50) NOT NULL,
  `fila` varchar(32) NOT NULL,
  `fibra` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `hosts_temp`
--
ALTER TABLE `hosts_temp`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `registro_hosts`
--
ALTER TABLE `registro_hosts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `hosts_temp`
--
ALTER TABLE `hosts_temp`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2103;

--
-- AUTO_INCREMENT de tabela `registro_hosts`
--
ALTER TABLE `registro_hosts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1686;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
