SET SQL_MODE ="NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;

SET TIME_ZONE= "+00:00";

DROP DATABASE IF EXISTS `ecologistica`;
CREATE DATABASE IF NOT EXISTS `ecologistica` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ecologistica`;
-- ==============================TABELA USUARIO ====================================
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `id` int (10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(200) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `confirma_senha` varchar(10) NOT NULL,
  `rua` varchar(200) NOT NULL,
  `num` varchar(6) NOT NULL,
  `complemento` varchar(100),
  `referencia` varchar(100),
  `bairro` varchar(150) NOT NULL,
  `cidade` varchar(150) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cep` varchar(8) NOT NULL
)
  ENGINE = InnoDB DEFAULT CHARSET=utf8mb4;

    INSERT INTO `usuario`(`id`, `nome`, `telefone`, `email`, `senha`, `confirma_senha`, `rua`, `num`, `complemento`, `referencia`, `bairro`, `cidade`, `estado`, `cep`)
    VALUES ('', 'admin', '1836363636', 'ecologistica@ecologistica.com.br', 'Eco2024@', 'Eco2024@', 'Avenida Prestes Maia', '1764', 'Fatec', 'Rotatória', 'Ipanema', 'Araçatuba', 'SP', '16052-045');

-- ==============================TABELA VEÍCULO ====================================
DROP TABLE IF EXISTS `veiculo`;
CREATE TABLE `veiculo` (
  `id` int (10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `marca` varchar(200) NOT NULL,
  `modelo` varchar(200) NOT NULL,
  `tipo` enum('Motocicleta','Bicicleta','Passeio','Utilitário','Van','Caminhão') NOT NULL,
  `renavam` varchar(100) NOT NULL,
  `carga`decimal (5,3),
  `placa`varchar(100) NOT NULL,
  `conservacao`enum ('0km','-5000km','-30000km','-75000km','-150000km','+200000km') NOT NULL,
  `ano`int (5),
  `combustivel`enum('Gasolina','Etanol','Diesel_S500','Diesel_S10','Híbrido','Elétrico') NOT NULL,
  `licenciamento`date NOT NULL
  )
  ENGINE = InnoDB DEFAULT CHARSET=utf8mb4;

    VALUES ('', 'carro', 'onix', 'passeio', '123456789', 'XYZ1234', '-75000km', 2014, 'Etanol', '2024');

-- ==============================TABELA CONTRATANTE ====================================
CREATE TABLE `contratante` (
  `id` int (10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(200) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rua`varchar(200) NOT NULL,
  `num`varchar(6) NOT NULL,
  `complemento`varchar(100),
  `referencia`varchar(100),
  `bairro` varchar(150) NOT NULL,
  `cidade` varchar(150) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cep` varchar(8) NOT NULL
)
  ENGINE = InnoDB DEFAULT CHARSET=utf8mb4;

    INSERT INTO `contratante`(`id `,`nome`,`telefone`,`email`,`rua`,`num`,`complemento`,`referencia`,`bairro`,`cidade`,`estado`,`cep`)
    VALUES ('', 'contratante', '1836363636', 'contratante@contratante.com.br', 'Avenida Prestes Maia', '1764', 'Fatec', 'Rotatória', 'Ipanema', 'Araçatuba', 'SP', '16052-045');

    -- ==============================TABELA ABASTECIMENTO ====================================
CREATE TABLE `abastecimento` (
  `id` int (10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `dia` date NOT NULL,
  `quantidade` decimal(5,3) NOT NULL,
  `combustivel` enum ('Gasolina', 'Etanol','Diesel_S500','Diesel_S10','Energia') NOT NULL,
  `id_veiculo` int(10) NOT NULL,
  `km_atual` decimal(5,3) NOT NULL,
  `vl_litro` decimal(5,3) NOT NULL,
  `valor_total` decimal(5,3)
  
)
  ENGINE = InnoDB DEFAULT CHARSET=utf8mb4;

    INSERT INTO `abastecimento`(`id `,`dia`,`quantidade`,`combustivel`,`id_veiculo`,`km_atual`,`vl_litro`,`valor_total`)
    VALUES ('', '10052024','45','Etanol',veiculo.id,'70000','3,39',quantidade*vl_litro);
    FROM veiculo
    WHERE id_veiculo = '01';

     -- ==============================TABELA FRETE ====================================
CREATE TABLE `frete` (
  `id` int (10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `dia` date NOT NULL,
  `id_contratante` int(10) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `valor` decimal(5,3) NOT NULL,
  `km_carga`) decimal(5,3), NOT NULL,
  `km_descarga` decimal(5,3) NOT NULL,
  `km_total` decimal(5,3) NOT NULL
  
  
)
  ENGINE = InnoDB DEFAULT CHARSET=utf8mb4;

    INSERT INTO `abastecimento`(`id `,`dia`,`id_contratante`,`tipo`,`valor`,`km_carga`,`km_descarga`,`km_total`)
    VALUES ('', '10052024',contratante.id,'1000,00','15000','20000',km_descarga - km_carga);
    FROM contratante
    WHERE id_contratante = '01';

      -- ==============================TABELA FINANCEIRO ====================================
CREATE TABLE `financeiro` (
  `id` int (10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `valor_frete` decimal (5,3) NOT NULL,
  `custo_abastecimento`decimal(5,3) NOT NULL,
  `vl_alimentacao` varchar(50) NOT NULL,
  `vl_pernoite` decimal(5,3) NOT NULL,
  `vl_ajudante` decimal(5,3), NOT NULL,
  `vl_pedagio` decimal(5,3) NOT NULL,
  `diversos` decimal(5,3) NOT NULL,
  `vl_total` decimal(5,3) NOT NULL
  
  
)
  ENGINE = InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `financeiro`(`id`,`valor_frete`,`custo_abastecimento`,`vl_alimentacao`,`vl_pernoite`,`vl_ajudante`,`vl_pedagio`,`diversos`,`vl_total`)
VALUES ('', frete.valor, abastecimento.valor_total, '50,00', '100,00', '100,00', '30,00', '25,00',
       frete.valor - (abastecimento.valor_total + 50.00 + 100.00 + 100.00 + 30.00 + 25.00));
FROM fornecedor, abastecimento
WHERE fornecedor.valor = '01' AND abastecimento.valor_total = '';

