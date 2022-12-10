CREATE DATABASE db_solaris DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE db_solaris;

CREATE TABLE tb_user(
	cd_user INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	ds_email VARCHAR(100) NOT NULL,
	ds_username VARCHAR(80) NOT NULL,
	nr_nivel INT(1) NOT NULL,
	ds_senha VARCHAR(100) NOT NULL,
	ds_tag VARCHAR(20)
);

CREATE TABLE tb_agenda(
	cd_agenda INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	ds_email VARCHAR(100) NOT NULL,
	nr_tel VARCHAR(15) NOT NULL,
	hr_hora TIME,
	dt_data DATE,
	ds_endereco VARCHAR(100) NOT NULL,
	nm_bairro VARCHAR(45),
	nm_cidade VARCHAR(45),
	st_publica INT,
	st_aprovada INT,
	id_salvar INT,
    id_user INT,
	nm_tema VARCHAR (100) NOT NULL,
	ds_descricao VARCHAR(300),
	nm_palestrante VARCHAR(100)
);

CREATE TABLE tb_agenda_user(
	cd_agenda_user INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	id_user INT NOT NULL,
	id_agenda INT NOT NULL,
	st_salvo INT
);

CREATE TABLE tb_artigos(
	cd_artigo INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	id_user INT NOT NULL,
	ds_conteudo TEXT,
	nm_titulo VARCHAR(45) NOT NULL,
	ds_tag VARCHAR(100) NOT NULL
);

CREATE TABLE tb_colaborador(
	cd_colab INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	ds_email VARCHAR(100) NOT NULL,
	img_logo BLOB,
	nm_nome VARCHAR(80) NOT NULL,
	nm_representante VARCHAR(80) NOT NULL,
	nr_telefone INT(11) NOT NULL,
	ds_tipopat VARCHAR(15),
	nr_cnpj INT(14),
	ds_crm VARCHAR(9),
	ds_profissao VARCHAR(45),
	nr_aprovado INT
);

INSERT INTO tb_user (ds_email, ds_username, nr_nivel, ds_senha) VALUES
	('pedroaggil@gmail.com', 'pedro_ggil', 2, '1d1dbb098fcd26c4d3935e603a978d14acc58a57'), -- Senha: 'euvimbarganhar'
	('ianzito@gmail.com', 'calvo', 1, '4f0b0dc38c21db0c503f5cba30c7ed12929b5a59'); -- Senha: 'dormammu'

ALTER TABLE tb_agenda_user ADD FOREIGN KEY (`id_user`) REFERENCES `tb_user` (cd_user);
ALTER TABLE tb_agenda_user ADD FOREIGN KEY (`id_agenda`) REFERENCES `tb_agenda` (cd_agenda);