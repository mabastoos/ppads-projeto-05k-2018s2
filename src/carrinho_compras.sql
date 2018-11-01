
CREATE DATABASE carrinho_compras;
use carrinho_compras;

CREATE TABLE carrinho(
id int(10) unsigned not null auto_increment,
produto varchar(100) not null,
preço varchar(11) not null,
quantidade varchar(11) not null,
primary key (id));