CREATE TABLE automoveis (
  id int AUTO_INCREMENT,
  descricao varchar(60),
  placa char(7),
  ano_modelo int(4) unsigned,
  ano_fabricacao int(4) unsigned,
  cor varchar(20),
  km int(6) unsigned,
  marca varchar(20),
  preco decimal(8,2),
  preco_fipe decimal(8,2),
  PRIMARY KEY (id)
);