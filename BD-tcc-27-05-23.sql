-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Maio-2023 às 16:23
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `statusCli` char(1) NOT NULL DEFAULT 'A',
  `nome` varchar(255) NOT NULL,
  `dataNasc` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` int(20) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `rg` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `obs` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  `nome` varchar(255) NOT NULL,
  `dataCad` date NOT NULL,
  `dataNasc` date NOT NULL,
  `dataAdmi` date NOT NULL,
  `dataDemi` date DEFAULT NULL,
  `endereco` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `telefone` int(20) NOT NULL,
  `cep` int(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `rg` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `salario` double NOT NULL,
  `obs` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcaproduto`
--

CREATE TABLE `marcaproduto` (
  `id` int(11) NOT NULL,
  `nomeMarcaP` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `marcaveiculo`
--

CREATE TABLE `marcaveiculo` (
  `id` int(100) NOT NULL,
  `nomeMarcaV` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  `nome` varchar(255) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `valor` double NOT NULL,
  `id_tipoProduto` int(11) NOT NULL,
  `id_marcaProduto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `id` int(11) NOT NULL,
  `staus` char(1) NOT NULL DEFAULT 'A',
  `nome` varchar(255) NOT NULL,
  `valor` double NOT NULL,
  `tempoEstimado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipoproduto`
--

CREATE TABLE `tipoproduto` (
  `id` int(11) NOT NULL,
  `nomeTipoP` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipoveiculo`
--

CREATE TABLE `tipoveiculo` (
  `id` int(100) NOT NULL,
  `nomeTipoV` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sexo` char(1) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `sexo`, `foto`, `email`, `senha`) VALUES
(2, 'bruno crepaldi', 'M', 'testeFoto.jpeg', 'brunocrepaldi.2009@gmail.com', '$2y$10$IlubdW/KayafEgY7SfUPK.By//2yKb71qUXGHnQ5oziV1VJxeQnmC'),
(3, 'michele', 'F', '', 'mih@gmail.com', '$2y$10$BDtjefBrho1MbxoMKSurA./4rl.VBvzVCzB3t6pgcO2RVi8r3V8Ce'),
(4, 'karla', 'F', '', 'karla@gmail.com', '$2y$10$EzTFi3YWaQ7ECsUOvoa7q.9WFSGHHbpeqBhRp22hby0xfBYhoeAUS'),
(5, 'mi', 'F', '', 'michele@gmail.com', '$2y$10$pAmqytI1cxKlCJPL.JkU2u1RncioCFogUhfIw1YzjiwY4kQmUA.ga');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `id` int(100) NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  `chassi` int(100) DEFAULT NULL,
  `cor` varchar(255) NOT NULL,
  `ano` int(50) NOT NULL,
  `placa` int(11) NOT NULL,
  `km` int(100) NOT NULL,
  `nomeVeiculo` varchar(255) NOT NULL,
  `id_marcaVeiculo` int(100) NOT NULL,
  `id_tipoVeiculo` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `marcaproduto`
--
ALTER TABLE `marcaproduto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `marcaveiculo`
--
ALTER TABLE `marcaveiculo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_marcaProduto_Produto` (`id_marcaProduto`),
  ADD KEY `fk_tipoProduto_Produto` (`id_tipoProduto`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tipoproduto`
--
ALTER TABLE `tipoproduto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tipoveiculo`
--
ALTER TABLE `tipoveiculo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_marcaVeiculo_veiculo` (`id_marcaVeiculo`),
  ADD KEY `fk_tipoVeiculo_veiculo` (`id_tipoVeiculo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `marcaproduto`
--
ALTER TABLE `marcaproduto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `marcaveiculo`
--
ALTER TABLE `marcaveiculo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipoproduto`
--
ALTER TABLE `tipoproduto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipoveiculo`
--
ALTER TABLE `tipoveiculo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_marcaProduto_Produto` FOREIGN KEY (`id_marcaProduto`) REFERENCES `marcaproduto` (`id`),
  ADD CONSTRAINT `fk_tipoProduto_Produto` FOREIGN KEY (`id_tipoProduto`) REFERENCES `tipoproduto` (`id`);

--
-- Limitadores para a tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD CONSTRAINT `fk_marcaVeiculo_veiculo` FOREIGN KEY (`id_marcaVeiculo`) REFERENCES `marcaveiculo` (`id`),
  ADD CONSTRAINT `fk_tipoVeiculo_veiculo` FOREIGN KEY (`id_tipoVeiculo`) REFERENCES `tipoveiculo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
