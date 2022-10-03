CREATE DATABASE db_solaris;
USE db_solaris;

CREATE TABLE tb_user(
	cd_user INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	ds_email VARCHAR(100) NOT NULL,
	ds_username VARCHAR(80) NOT NULL,
	nr_nivel INT(1) NOT NULL,
	ds_senha VARCHAR(16) NOT NULL,
	ds_tag VARCHAR(20)
);

CREATE TABLE tb_agenda(
	cd_agenda INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nm_evento VARCHAR(45),
	hr_hora TIME,
	dt_data DATE,
	ds_logradouro VARCHAR(80),
	nr_numero INT,
	ds_bairro VARCHAR(45),
	ds_cidade VARCHAR(45),
	nr_tipo INT NOT NULL,
	st_publica BIT,
	id_salvar INT
);

CREATE TABLE tb_agenda_user(
	cd_agenda_user INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	id_user INT,
	ud_agenda INT,
	st_salvo BIT
);

CREATE TABLE tb_artigos(
	cd_artigo INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	id_user INT,
	ds_conteudo TEXT,
	nm_titulo VARCHAR(45),
	img_imagem BLOB
);

CREATE TABLE tb_post(
	cd_post INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nm_titulo VARCHAR(100),
	ds_conteudo TEXT,
	id_user INT,
	dt_data DATE,
	img_imagem BLOB,
	id_comentario INT,
	nr_curtida INT
);

CREATE TABLE tb_comentario(
	cd_comentario INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	ds_conteudo TEXT,
	dt_data DATE,
	nr_curtida INT,
	id_user INT
);

CREATE TABLE tb_colaborador(
	cd_colab INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	ds_email VARCHAR(100) NOT NULL,
	img_logo BLOB,
	nm_nome VARCHAR(80),
	nm_representante VARCHAR(80),
	nr_telefone INT(9),
	id_tipocolab INT,
	ds_tipopat VARCHAR(15),
	nr_cnpj INT(14),
	nr_cpfpat INT(14),
	ds_profissaopal VARCHAR(45),
	ds_crmpal VARCHAR(9),
	nr_cpfpal INT(11),
	ds_profissaocol VARCHAR(45),
	ds_crmcol VARCHAR(9),
	nr_cpfcol INT(11)
);

CREATE TABLE tb_tipocolab(
	cd_tipocolab INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	ds_tipocolab VARCHAR(45),
	id_colab INT
);

INSERT INTO tb_user (ds_email, ds_username, nr_nivel, ds_senha) VALUES
	('pedroaggil@gmail.com', 'pedro_ggil', 2, 'euvimbarganhar'),
	('ianzito@gmail.com', 'calvo', 1, 'dormammu');