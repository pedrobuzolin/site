-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/05/2024 às 13:38
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mercadinho`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int(11) NOT NULL,
  `Nome` varchar(30) NOT NULL,
  `Sobrenome` varchar(30) NOT NULL,
  `Cpf` varchar(11) NOT NULL,
  `Endereco` varchar(50) NOT NULL,
  `Numero` varchar(5) NOT NULL,
  `Complemento` varchar(20) NOT NULL,
  `Celular` varchar(11) NOT NULL,
  `idLogin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`idCliente`, `Nome`, `Sobrenome`, `Cpf`, `Endereco`, `Numero`, `Complemento`, `Celular`, `idLogin`) VALUES
(1, 'Pedro', 'Buzolin', '12345678910', 'Rua Feliz', '123', '', '1234567789', 1),
(2, 'Joao', 'Silva', '12345332144', 'Rua Alegre', '432', 'Ap 12', '1233445522', 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `imagens`
--

CREATE TABLE `imagens` (
  `idImg` int(11) NOT NULL,
  `idProd` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `dataImg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `imagens`
--

INSERT INTO `imagens` (`idImg`, `idProd`, `nome`, `dataImg`) VALUES
(1, 1, '594d2367d7521891a41fbe93282e8106.svg', '2024-05-27'),
(2, 2, 'b2410441722d911fecd7fb3453b64353.svg', '2024-05-23'),
(3, 3, '2900d0e8d8a49a51890e197cc8326291.svg', '2024-05-27'),
(4, 4, 'd16d8b07ad2f0662d35d034a7e332b14.svg', '2024-05-27'),
(5, 5, 'ba77a0017371aacaa047d6e688db0a9d.svg', '2024-05-27'),
(6, 6, '7e019f3aa637bd79d9b42f3bee9904fb.svg', '2024-05-27'),
(7, 7, '8e093d1967d77727f9a221b63b3e7ee7.svg', '2024-05-27'),
(8, 8, 'a1eac74c1b81bca93753d246886bbedb.svg', '2024-05-27'),
(9, 9, '9386b947de5c8ff0251adce0f661dd2c.svg', '2024-05-27'),
(10, 10, 'a5280b0ece0b699e4d684adf2b8bc0d7.svg', '2024-05-27'),
(11, 11, '8d6b9aa8ec9604d57210555222f2de20.svg', '2024-05-27'),
(12, 12, '8b8e20abe4a8312ba44c515484d36b5e.svg', '2024-05-27'),
(13, 13, '1a43733860d5e7a6f8dac82c7f25110e.svg', '2024-05-27'),
(14, 14, '2e95b44bdc113ac24fb9c153baab4444.svg', '2024-05-27'),
(15, 15, '9fd34201986f6bbfd32b543715976dca.svg', '2024-05-27'),
(16, 16, '52c37ebc6d1834e4a3594bc4ca69d788.svg', '2024-05-27'),
(17, 17, '28432853964d18dfa1fdafe85ed9dcd2.svg', '2024-05-27'),
(18, 18, 'ecbff50ef6dd5d6f1dbaf0c9874fe2c2.svg', '2024-05-27'),
(19, 19, '471dc841cbe834c7ee9dbdeca127481d.svg', '2024-05-27'),
(20, 20, 'a3df5372662e11db8150c852a96a958f.svg', '2024-05-27'),
(21, 21, 'a20b1391a0145cfb9e7ec2df778e6daa.svg', '2024-05-27'),
(22, 22, '85f56caa7bc649fb80d474bc0ec55680.svg', '2024-05-27'),
(23, 23, '5fc8d829c98059c5357247384d65a63d.svg', '2024-05-27'),
(24, 24, '0542f4390dc6dfcfbc7dccead4812074.svg', '2024-05-27'),
(25, 25, '442c4a515e005131a28d1ce3205aa408.svg', '2024-05-27'),
(26, 26, '8495c1c4b20c9418a34dbbd410ef5768.svg', '2024-05-27'),
(27, 27, '9e46e8c0e985c60ea7bad48ef875c7cd.svg', '2024-05-27'),
(28, 28, '365c4d49e0f18e70bb7d6d1121499ba8.svg', '2024-05-27'),
(29, 29, '946b2a1c23281ab238db4ea04ef254dd.svg', '2024-05-27'),
(30, 30, '119397de9eb4c68f949b298a9a66226f.svg', '2024-05-27'),
(31, 31, '2375861ae3c71f41872b74927ce4a683.svg', '2024-05-27'),
(32, 32, '0adc25da03deffc983a807bcf67b8e96.svg', '2024-05-27'),
(33, 33, 'd5a3717796922f274e64b8e22989baa0.svg', '2024-05-27'),
(34, 34, 'e62453435b0e4ef9245dae261fa89110.svg', '2024-05-27'),
(35, 35, '3b34415fe4159e9812a66c0b76156485.svg', '2024-05-27'),
(36, 36, 'e3e36564bb6376408c72107cc914f040.svg', '2024-05-27'),
(37, 37, '9ae9a7c2c45c792260455d45ddada468.svg', '2024-05-27'),
(38, 38, '89923f500acad14300950276cd3229fd.svg', '2024-05-27'),
(39, 39, '1186f236e1afe6e383595e09006b8ecb.svg', '2024-05-27'),
(40, 40, 'c99675b567914e77964ef6af6b5a556e.svg', '2024-05-27'),
(41, 41, 'cb7ab53837600fb8870209d36dc0df69.svg', '2024-05-27'),
(42, 42, '66735fc588a6f22af94ed69220c1c529.svg', '2024-05-27'),
(43, 43, '835feae8af846b4a4f167eced263de77.svg', '2024-05-27'),
(44, 44, '609cfd4da4d1ed9470b5b605f1c29a2d.svg', '2024-05-27'),
(45, 45, '97734f4c44a9da72b38ba5548000dc18.svg', '2024-05-27'),
(46, 46, '8a8794c5609ae7f4d6eed7ca642ef584.svg', '2024-05-27'),
(47, 47, '32af237a20158c349c71367d52752292.svg', '2024-05-27'),
(48, 48, 'd1d79a8074653ef47a1effb5e17e6329.svg', '2024-05-27');

-- --------------------------------------------------------

--
-- Estrutura para tabela `itens_venda`
--

CREATE TABLE `itens_venda` (
  `idItem` int(11) NOT NULL,
  `idProd` int(11) DEFAULT NULL,
  `idVenda` int(11) DEFAULT NULL,
  `valor_Prod` float DEFAULT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `itens_venda`
--

INSERT INTO `itens_venda` (`idItem`, `idProd`, `idVenda`, `valor_Prod`, `quantidade`) VALUES
(2, 2, 2, 4.59, 1),
(3, 6, 2, 4.9, 1),
(4, 29, 2, 4.59, 6),
(5, 6, 3, 4.9, 1),
(6, 13, 3, 29.25, 1),
(7, 7, 4, 13.99, 1),
(8, 12, 4, 5.99, 2),
(9, 19, 4, 7.99, 1),
(10, 1, 5, 3.99, 1),
(11, 11, 5, 4.19, 1),
(12, 17, 5, 5.25, 1),
(13, 2, 65, 4.59, 1),
(14, 3, 65, 14.9, 1),
(15, 15, 65, 3.99, 1),
(16, 1, 68, 3.99, 1),
(17, 11, 68, 4.19, 1),
(18, 1, 69, 3.99, 1),
(19, 2, 69, 4.59, 1),
(20, 1, 70, 3.99, 1),
(21, 6, 70, 4.9, 1),
(22, 1, 71, 3.99, 1),
(23, 7, 71, 13.99, 1),
(24, 16, 71, 11.99, 1),
(25, 36, 71, 13.99, 1),
(26, 46, 71, 7.99, 1),
(27, 19, 71, 7.99, 1),
(28, 42, 71, 8.25, 1),
(29, 24, 71, 9.99, 1),
(30, 9, 71, 23.99, 1),
(31, 1, 72, 3.99, 1),
(32, 1, 76, 3.99, 1),
(33, 2, 76, 4.59, 1),
(34, 6, 76, 4.9, 1),
(35, 20, 76, 34.99, 1),
(36, 17, 76, 5.25, 1),
(37, 19, 77, 7.99, 1),
(38, 1, 78, 3.99, 1),
(39, 11, 78, 4.19, 1),
(40, 17, 78, 5.25, 1),
(41, 6, 82, 4.9, 1),
(42, 1, 86, 3.99, 1),
(43, 1, 90, 3.99, 1),
(44, 31, 91, 10.56, 1),
(45, 38, 91, 7.55, 1),
(46, 19, 91, 7.99, 1),
(47, 29, 91, 4.59, 1),
(48, 30, 91, 3.99, 2),
(49, 1, 91, 3.99, 1),
(50, 46, 91, 7.99, 1),
(51, 47, 91, 17.99, 1),
(52, 23, 91, 2.99, 1),
(53, 44, 91, 19.95, 1),
(54, 7, 91, 13.99, 1),
(55, 9, 91, 23.99, 1),
(56, 24, 91, 9.99, 1),
(57, 1, 92, 3.99, 1),
(58, 17, 92, 5.25, 1),
(59, 13, 92, 29.25, 1),
(60, 7, 92, 13.99, 1),
(61, 15, 92, 3.99, 1),
(62, 16, 92, 11.99, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `login_adm`
--

CREATE TABLE `login_adm` (
  `idAdm` int(11) NOT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `login_adm`
--

INSERT INTO `login_adm` (`idAdm`, `usuario`, `senha`) VALUES
(1, 'pedro', '123'),
(2, 'bruno', '123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `login_usr`
--

CREATE TABLE `login_usr` (
  `idUsuario` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `login_usr`
--

INSERT INTO `login_usr` (`idUsuario`, `email`, `senha`) VALUES
(1, 'pedro@teste.com', '123'),
(2, 'joao@silva.com', '123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `idProd` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `unidade` varchar(2) NOT NULL,
  `preco` float NOT NULL,
  `secao` int(11) NOT NULL,
  `ofertaDia` varchar(1) NOT NULL,
  `maisVendidos` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`idProd`, `descricao`, `unidade`, `preco`, `secao`, `ofertaDia`, `maisVendidos`) VALUES
(1, 'Banana', 'KG', 3.99, 5, 'S', 'S'),
(2, 'Abobrinha', 'KG', 4.59, 5, 'S', 'N'),
(3, 'Açúcar Cristal', 'UN', 14.9, 4, 'N', 'N'),
(4, 'Açúcar Demerara', 'UN', 23.99, 4, 'N', 'N'),
(5, 'Água Sanitária', 'UN', 6.45, 6, 'N', 'N'),
(6, 'Alface', 'KG', 4.9, 5, 'S', 'N'),
(7, 'Amaciante', 'UN', 13.99, 6, 'N', 'S'),
(8, 'Arroz Arboreo', 'UN', 20.45, 4, 'N', 'N'),
(9, 'Arroz Pateko', 'UN', 23.99, 4, 'N', 'S'),
(10, 'Bala 7 Belo', 'UN', 4.45, 3, 'N', 'N'),
(11, 'Batata', 'KG', 4.19, 5, 'S', 'S'),
(12, 'Bis', 'UN', 5.99, 3, 'N', 'S'),
(13, 'Bisteca de Porco', 'KG', 29.25, 2, 'S', 'N'),
(14, 'Bombril', 'UN', 4.01, 6, 'N', 'N'),
(15, 'Brahma 350ml', 'UN', 3.99, 1, 'N', 'S'),
(16, 'Caixa de Bombom', 'UN', 11.99, 3, 'N', 'S'),
(17, 'Cenoura', 'KG', 5.25, 5, 'S', 'N'),
(18, 'Chocolate Lacta', 'UN', 6.75, 3, 'N', 'N'),
(19, 'Coca-Cola 2L', 'UN', 7.99, 1, 'N', 'S'),
(20, 'Coxão Duro', 'KG', 34.99, 2, 'S', 'N'),
(21, 'Coxa Sobrecoxa', 'KG', 12.99, 2, 'N', 'N'),
(22, 'Detergente', 'UN', 1.99, 6, 'N', 'N'),
(23, 'Esponja', 'UN', 2.99, 6, 'N', 'N'),
(24, 'Feijão Solito', 'UN', 9.99, 4, 'N', 'N'),
(25, 'Fini', 'UN', 13.99, 3, 'N', 'N'),
(26, 'Fraldinha', 'KG', 34.95, 2, 'N', 'N'),
(27, 'Grão de Bico', 'UN', 10.9, 4, 'N', 'N'),
(28, 'Guaraná 2L', 'UN', 6.99, 1, 'N', 'N'),
(29, 'Heineken 350ml', 'UN', 4.59, 1, 'S', 'N'),
(30, 'Leite Integral', 'UN', 3.99, 1, 'N', 'N'),
(31, 'Leite Condensado', 'UN', 10.56, 3, 'N', 'N'),
(32, 'Linguiça Toscana', 'KG', 16.95, 2, 'N', 'N'),
(33, 'Linhaça Marrom', 'UN', 8.95, 4, 'N', 'N'),
(34, 'Maçã', 'KG', 5.73, 5, 'N', 'N'),
(35, 'Milho de Pipoca', 'UN', 5.66, 4, 'N', 'N'),
(36, 'Nutella', 'UN', 13.99, 3, 'N', 'N'),
(37, 'Omo 800g', 'UN', 18.76, 6, 'N', 'N'),
(38, 'Paçoquita', 'UN', 7.55, 3, 'N', 'N'),
(39, 'Patinho', 'KG', 33.99, 2, 'N', 'N'),
(40, 'Peito de Frango', 'KG', 14.95, 2, 'N', 'N'),
(41, 'Picanha', 'KG', 89.9, 2, 'N', 'N'),
(42, 'RedBull', 'UN', 8.25, 1, 'N', 'N'),
(43, 'Red Label', 'UN', 99.99, 1, 'N', 'N'),
(44, 'Sabão em Pedra', 'UN', 19.95, 6, 'N', 'N'),
(45, 'Suco de Laranja', 'UN', 12.99, 1, 'N', 'N'),
(46, 'Tomate', 'KG', 7.99, 5, 'N', 'N'),
(47, 'Uva Thompson', 'KG', 17.99, 5, 'N', 'N'),
(48, 'Veja', 'UN', 10.95, 6, 'N', 'N');

-- --------------------------------------------------------

--
-- Estrutura para tabela `secoes`
--

CREATE TABLE `secoes` (
  `idSecao` int(11) NOT NULL,
  `nomeSecao` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `secoes`
--

INSERT INTO `secoes` (`idSecao`, `nomeSecao`) VALUES
(1, 'Bebidas'),
(2, 'Carnes'),
(3, 'Doces'),
(4, 'Grãos'),
(5, 'Hortifruti'),
(6, 'Limpeza');

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas`
--

CREATE TABLE `vendas` (
  `cod_Venda` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `data_Venda` date DEFAULT NULL,
  `valor_Total` float DEFAULT NULL,
  `pagamento` varchar(20) NOT NULL,
  `entrega` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `vendas`
--

INSERT INTO `vendas` (`cod_Venda`, `idCliente`, `data_Venda`, `valor_Total`, `pagamento`, `entrega`) VALUES
(2, 1, '2024-05-07', 37.03, 'pix', 'retirada'),
(3, 1, '2024-05-07', 34.15, 'credito', 'entrega'),
(4, 1, '2024-05-07', 33.96, 'boleto', 'retirada'),
(5, 1, '2024-05-07', 13.43, 'credito', 'entrega'),
(65, 1, '2024-05-07', 23.48, 'pix', 'retirada'),
(68, 1, '2024-05-07', 8.18, 'credito', 'entrega'),
(69, 1, '2024-05-08', 8.58, 'debito', 'retirada'),
(70, 2, '2024-05-15', 8.89, 'credito', 'retirada'),
(71, 1, '2024-05-16', 102.17, 'pix', 'retirada'),
(72, 2, '2024-05-17', 3.99, 'credito', 'entrega'),
(76, 2, '2024-05-17', 53.72, 'pix', 'retirada'),
(77, 1, '2024-05-22', 7.99, 'credito', 'retirada'),
(78, 2, '2024-05-22', 13.43, 'pix', 'retirada'),
(82, 2, '2024-05-22', 4.9, 'boleto', 'entrega'),
(86, 2, '2024-05-22', 3.99, 'debito', 'entrega'),
(90, 2, '2024-05-27', 3.99, 'pix', 'retirada'),
(91, 1, '2024-05-27', 139.55, 'pix', 'retirada'),
(92, 2, '2024-05-27', 68.46, 'debito', 'entrega');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`),
  ADD KEY `FK_cliente_usuario` (`idLogin`);

--
-- Índices de tabela `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`idImg`),
  ADD KEY `FK_img_produto` (`idProd`);

--
-- Índices de tabela `itens_venda`
--
ALTER TABLE `itens_venda`
  ADD PRIMARY KEY (`idItem`),
  ADD KEY `FK_item_idProd` (`idProd`),
  ADD KEY `FK_item_idVenda` (`idVenda`);

--
-- Índices de tabela `login_adm`
--
ALTER TABLE `login_adm`
  ADD PRIMARY KEY (`idAdm`);

--
-- Índices de tabela `login_usr`
--
ALTER TABLE `login_usr`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idProd`),
  ADD KEY `FK_produto_secao` (`secao`);

--
-- Índices de tabela `secoes`
--
ALTER TABLE `secoes`
  ADD PRIMARY KEY (`idSecao`);

--
-- Índices de tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`cod_Venda`),
  ADD KEY `FK_venda_cliente` (`idCliente`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `imagens`
--
ALTER TABLE `imagens`
  MODIFY `idImg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `itens_venda`
--
ALTER TABLE `itens_venda`
  MODIFY `idItem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de tabela `login_adm`
--
ALTER TABLE `login_adm`
  MODIFY `idAdm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `login_usr`
--
ALTER TABLE `login_usr`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `secoes`
--
ALTER TABLE `secoes`
  MODIFY `idSecao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `cod_Venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `FK_cliente_usuario` FOREIGN KEY (`idLogin`) REFERENCES `login_usr` (`idUsuario`);

--
-- Restrições para tabelas `imagens`
--
ALTER TABLE `imagens`
  ADD CONSTRAINT `FK_img_produto` FOREIGN KEY (`idProd`) REFERENCES `produtos` (`idProd`);

--
-- Restrições para tabelas `itens_venda`
--
ALTER TABLE `itens_venda`
  ADD CONSTRAINT `FK_item_idProd` FOREIGN KEY (`idProd`) REFERENCES `produtos` (`idProd`),
  ADD CONSTRAINT `FK_item_idVenda` FOREIGN KEY (`idVenda`) REFERENCES `vendas` (`cod_Venda`);

--
-- Restrições para tabelas `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `FK_produto_secao` FOREIGN KEY (`secao`) REFERENCES `secoes` (`idSecao`);

--
-- Restrições para tabelas `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `FK_venda_cliente` FOREIGN KEY (`idCliente`) REFERENCES `login_usr` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
