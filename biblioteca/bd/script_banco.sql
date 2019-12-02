CREATE DATABASE LojaWeb; 
USE LojaWeb;

CREATE TABLE usuario(
idusuario INT(11) NOT NULL AUTO_INCREMENT,
nomeusuario VARCHAR(60) NOT NULL,
email VARCHAR(60) NOT NULL,
senha VARCHAR(60) NOT NULL,
cpf VARCHAR(60) NOT NULL,
datadenascimento VARCHAR(10) NOT NULL,
sexo VARCHAR(60) NOT NULL,
tipousuario VARCHAR(5) NOT NULL,
PRIMARY KEY(idusuario)
);
  
CREATE TABLE endereco(
idendereco INT(11) NOT NULL AUTO_INCREMENT,
idusuario INT(11) NOT NULL,
logradouro VARCHAR(60) NOT NULL,
numero VARCHAR(7) NOT NULL, 
complemento VARCHAR(60) NOT NULL,
bairro VARCHAR(60) NOT NULL,
cidade VARCHAR(60) NOT NULL,
cep VARCHAR(60) NOT NULL,
PRIMARY KEY(idendereco),
FOREIGN KEY(idusuario) REFERENCES usuario(idusuario) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE pedido(
idpedido INT(11) NOT NULL AUTO_INCREMENT,
idusuario INT(11) NOT NULL, 
idendereco INT(11) NOT NULL,
FormaPagamento VARCHAR (11) NOT NULL,
Cupom VARCHAR(11) NOT NULL,
Preco VARCHAR(11) NOT NULL,
datacompra date NOT NULL,
PRIMARY KEY(idpedido),
FOREIGN KEY(idusuario) REFERENCES usuario(idusuario) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY(idendereco) REFERENCES endereco(idendereco) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE categoria(
    idcategoria INT(11) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(60) NOT NULL,
    descricao VARCHAR(60) NOT NULL,
    PRIMARY KEY(idcategoria)
    );

CREATE TABLE produtos(
idproduto INT(11) NOT NULL AUTO_INCREMENT,
idcategoria INT(11) NOT NULL,
preco DOUBLE NOT NULL,
nomeproduto VARCHAR(30) NOT NULL,
descricao VARCHAR(60) NOT NULL,
tamanho VARCHAR(60) NOT NULL,
imagem VARCHAR(60) NOT NULL,
estoque_minimo INT(11) NOT NULL,
estoque_maximo INT(11) NOT NULL,
quantidade INT(11) NOT NULL,
PRIMARY KEY(idproduto),
FOREIGN KEY(idcategoria) REFERENCES categoria(idcategoria) ON DELETE CASCADE ON UPDATE CASCADE 
);

CREATE TABLE estoque(
idestoque INT(11) NOT NULL AUTO_INCREMENT,
id_produto INT(11) NOT NULL,
qtde INT(11) NOT NULL,
PRIMARY KEY(idestoque),
FOREIGN KEY(id_produto) REFERENCES produtos(idproduto) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE pedido_produto(
idproduto INT(11) NOT NULL,
idpedido INT(11) NOT NULL,
quantidade INT(11) NOT NULL,
FOREIGN KEY(idproduto) REFERENCES produtos(idproduto) ON DELETE CASCADE ON UPDATE CASCADE,
FOREIGN KEY(idpedido) REFERENCES pedido(idpedido) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE log_produto(
id_log INT(11) NOT NULL AUTO_INCREMENT,
Tabela VARCHAR(45) NOT NULL, 
Usuario VARCHAR(45) NOT NULL,
Data_hora DATETIME NOT NULL,
acao VARCHAR(45) NOT NULL,
Dados VARCHAR(1000),
PRIMARY KEY(id_log)
);

CREATE TABLE cupom(
idcupom INT(11) NOT NULL AUTO_INCREMENT,
nomecupom VARCHAR(60) NOT NULL,
desconto INT(11) NOT NULL,
PRIMARY KEY(idcupom)
); 

CREATE TABLE formaPagamento(
idForma INT(11) NOT NULL AUTO_INCREMENT,
descricao VARCHAR(60) NOT NULL,
PRIMARY KEY(idForma)
);

INSERT INTO usuario (nomeusuario,email,senha,cpf,datadenascimento,sexo,tipousuario) 
VALUES ('Francisco','fbuenoneto@hotmail.com','admin','435.800.168-81','20/03/2002','M','A');

INSERT INTO usuario (nomeusuario,email,senha,cpf,datadenascimento,sexo,tipousuario) 
VALUES ('Lavinia','lavinia@hotmail.com','123','498.876.168-81','17/01/2003','M','p');

-- Procedures :)

DROP PROCEDURE IF EXISTS cadastrar_pedido ;
DELIMITER $$

CREATE PROCEDURE cadastrar_pedido(IN  idusuario INT(11), idendereco int(11), FormaPagamento INT(11), Preco double)
BEGIN
declare datav date;
IF(idusuario != 0)AND( FormaPagamento != 0) and  (idendereco != 0) and (Preco != 0) THEN
SET datav = CURDATE();
INSERT INTO pedido (idusuario, idendereco,FormaPagamento, Preco, datacompra)  
VALUES(idusuario, idendereco,FormaPagamento, Preco, datav);
ELSE
SELECT "Informe valores válidos" AS Msg;
END IF;
END $$ 
DELIMITER ;


DROP PROCEDURE IF EXISTS MostrarPedidoUsuario ;
DELIMITER $$

CREATE PROCEDURE MostrarPedidoUsuario(IN  idusuario INT(11))
BEGIN
IF(idusuario != 0) THEN
SELECT * FROM pedido WHERE idusuario = idusuario ;
ELSE
SELECT "Informe valores válidos" AS Msg;
END IF;
END $$ 
DELIMITER ;

DROP PROCEDURE DeletarPedido;
DELIMITER $$
CREATE PROCEDURE DeletarPedido(in idpedidof INT(11))
BEGIN
DELETE FROM pedido WHERE idpedido = idpedidof;
END $$
DELIMITER;



DROP TRIGGER IF EXISTS tgr_diminuiestoque;
DELIMITER $$
CREATE TRIGGER tgr_diminuiestoque
AFTER INSERT ON pedido_produto
FOR EACH ROW
BEGIN
update produtos set produtos.quantidade = produtos.quantidade- New.quantidade   
where produtos.idproduto = new.idproduto;
END $$
DELIMITER ;
