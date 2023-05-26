-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Maio-2023 às 00:34
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `movus_site`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos_usuarios`
--

CREATE TABLE `enderecos_usuarios` (
  `id` int(11) NOT NULL,
  `usuarios_id` int(11) NOT NULL,
  `rua` varchar(500) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(250) NOT NULL,
  `bairro` varchar(300) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `cidade` varchar(150) NOT NULL,
  `pais` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `tipo` varchar(40) NOT NULL,
  `celular` varchar(40) NOT NULL,
  `nivel` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `data_nascimento` date NOT NULL,
  `cpf` varchar(25) NOT NULL,
  `ativo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`, `nome`, `tipo`, `celular`, `nivel`, `email`, `data_nascimento`, `cpf`, `ativo`) VALUES
(1, 'tavinho', '53cf9e8538a66281df7578819eb5a783', 'Otávio Thadeu Franklin da Cunha', 'aluno', '(19) 9 8114-3104', 2, 'otavio.cunha01@fatec.sp.gov.br', '0000-00-00', '', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `enderecos_usuarios`
--
ALTER TABLE `enderecos_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `enderecos_usuarios`
--
ALTER TABLE `enderecos_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
