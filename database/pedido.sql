-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Out-2019 às 17:08
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

CREATE DATABASE pedido;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pedido`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nomecompleto` varchar(30) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `setor` varchar(30) NOT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `tamanho_id` int(11) NOT NULL,
  `pizza_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nomecompleto`, `endereco`, `setor`, `telefone`, `tamanho_id`, `pizza_id`) VALUES
(1, 'Geovana', 'Princesa', 'Centro', '06399270588', 2, 0),
(2, 'Gustavo', 'Rua Pinto n°15', 'Novo Horizonte', '06399270814', 3, 0),
(3, 'Ruan', 'Rua recife', 'Cavalcante', '06399270521', 2, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pizza`
--

CREATE TABLE `pizza` (
  `nome` varchar(50) NOT NULL,
  `id` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pizza`
--

INSERT INTO `pizza` (`nome`, `id`) VALUES
('Alho e óleo', 1),
('Americana ', 2),
('Atum', 3),
('Atum c/catupiry', 4),
('Bacon', 5),
('Baiana', 6),
('Banana', 7),
('Brasileira ', 8),
('Caipira', 9),
('Calabresa', 10),
('Carne de Sol', 11),
('cecilia', 12),
('Defumada', 13),
('Dois Queijos', 14),
('Executiva', 15),
('Filé', 16),
('Frango c/ Catupiry', 17),
('Imperial', 18),
('Italiana', 19),
('Lombo', 20),
('Marguerita', 21),
('Milho c/ Catupiry', 22),
('Milho verde', 23),
('Mineira', 24),
('Moda ', 25),
('Mussarela', 26),
('Napolitana', 27),
('Nobre', 28),
('Palmito', 29),
('Paulista', 30),
('Peito de Peru c/ Catupiry', 31),
('Portuguesa', 32),
('Presunto', 33),
('Quatro Queijos ', 34),
('Siena', 35),
('Tomate seco', 36),
('Tropical', 37),
('Vegetariana', 38),
('Viena ', 39);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tamanho`
--

CREATE TABLE `tamanho` (
  `id` int(11) NOT NULL,
  `descricao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tamanho`
--

INSERT INTO `tamanho` (`id`, `descricao`) VALUES
(1, 'Pequena'),
(2, 'Média'),
(3, 'Grande');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cliente_tamanho_idx` (`tamanho_id`);

--
-- Índices para tabela `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tamanho`
--
ALTER TABLE `tamanho`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `pizza`
--
ALTER TABLE `pizza`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `tamanho`
--
ALTER TABLE `tamanho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_cliente_tamanho` FOREIGN KEY (`tamanho_id`) REFERENCES `tamanho` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
