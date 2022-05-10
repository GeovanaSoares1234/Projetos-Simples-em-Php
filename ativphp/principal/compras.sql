--
-- -----------------------------------------------------
-- Table `banco_pedidos`.`TB_COMPRAS`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `banco_pedidos`.`TB_COMPRAS` ;

CREATE TABLE IF NOT EXISTS `banco_pedidos`.`TB_COMPRAS` (
  `numero_pedido` INT NOT NULL AUTO_INCREMENT,
  `nome_produto` VARCHAR(255) NOT NULL,
  `data_pedido` DATE NOT NULL,
  `previsao_entrega` DATE NOT NULL,
  `data_recebido` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`numero_pedido`));

--
-- -----------------------------------------------------
-- Dados para popular o banco
-- -----------------------------------------------------

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Queijo', '2018-01-07', '2018-02-06', '2018-01-17');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Pão', '2018-07-03', '2018-07-28', '2018-07-23');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Carne', '2018-12-27', '2019-01-26', '2019-01-31');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Ketchup', '2019-06-22', '2019-07-02', '2019-08-01');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Maionese', '2019-12-16', '2020-01-15', '2019-12-26');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Mostarda', '2019-06-10', '2019-07-05', '2019-06-30');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Tomate', '2019-12-04', '2020-01-03', '2020-01-08');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Cebola', '2019-05-30', '2019-06-09', '2019-07-09');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Alface', '2019-11-23', '2019-12-23', '2019-12-03');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Copo descartável', '2019-05-19', '2019-06-13', '2019-06-08');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Guardanapos', '2019-11-12', '2019-12-12', '2019-12-17');
INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Canudos', '2019-05-08', '2019-05-18', '2019-06-17');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Embalagens', '2019-11-01', '2019-12-01', '2019-11-11');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Batata palha', '2019-04-26', '2019-05-21', '2019-05-16');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Ovo', '2019-10-20', '2019-11-19', '2019-11-24');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Presunto', '2019-04-15', '2019-04-25', '2019-05-25');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Óleo', '2019-10-09', '2019-11-08', '2019-10-19');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Bacon', '2019-04-04', '2019-04-29', '2019-04-24');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Batata frita', '2019-09-28', '2019-10-28', '2019-11-02');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Farinha de trigo', '2019-03-24', '2019-04-03', '2019-05-03');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Farinha de rosca', '2019-09-17', '2019-10-17', '2019-09-27');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Manteiga', '2019-03-12', '2019-04-06', '2019-04-01');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Cebola', '2019-09-05', '2019-10-05', '2019-10-10');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Alface', '2019-03-01', '2019-03-11', '2019-04-10');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Copo descartável', '2019-08-25', '2019-09-24', '2019-09-04');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Guardanapos', '2019-02-18', '2019-03-15', '2019-03-10');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Canudos', '2019-08-14', '2019-09-13', '2019-09-18');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Embalagens', '2019-02-07', '2019-02-17', '2019-03-19');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Ovo', '2019-08-03', '2019-09-02', '2019-08-13');

INSERT INTO `banco_pedidos`.`tb_compras` (`numero_pedido`, `nome_produto`, `data_pedido`, `previsao_entrega`, `data_recebido`) VALUES (NULL, 'Presunto', '2019-01-27', '2019-02-26', '2019-02-16');
