CREATE DATABASE db_solaris; 
USE db_solaris;

CREATE TABLE tb_user(
	cd_user INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	ds_email VARCHAR(100) NOT NULL,
	ds_username VARCHAR(80) NOT NULL,
	nr_nivel INT(1) NOT NULL,
	ds_senha VARCHAR(100) NOT NULL,
	img_perfil VARCHAR(200),
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
	st_publica BIT,
	st_aprovada BIT,
	id_salvar INT,
    id_user INT
);

CREATE TABLE tb_agenda_user(
	cd_agenda_user INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	id_user INT NOT NULL,
	id_agenda INT NOT NULL,
	st_salvo BIT
);

CREATE TABLE tb_artigos(
	cd_artigo INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	id_user INT NOT NULL,
	ds_conteudo VARCHAR(200) NOT NULL,
	nm_titulo VARCHAR(45) NOT NULL,
	ds_tag VARCHAR(100) NOT NULL
);

CREATE TABLE tb_colaborador(
	cd_colab INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	ds_email VARCHAR(100) NOT NULL,
	img_logo BLOB,
	nm_nome VARCHAR(80) NOT NULL,
	nm_representante VARCHAR(80) NOT NULL,
	nr_telefone INT(9) NOT NULL,
	ds_tipopat VARCHAR(15),
	nr_cnpj INT(14),
	nr_cpfpat INT(14),
	ds_profissaopal VARCHAR(45),
	ds_crmpal VARCHAR(9),
	nr_cpfpal INT(11),
	ds_profissaocol VARCHAR(45),
	ds_crmcol VARCHAR(9),
	nr_cpfcol INT(11),
	nr_aprovado BIT
);

INSERT INTO tb_user (ds_email, ds_username, nr_nivel, ds_senha) VALUES
	('pedroaggil@gmail.com', 'pedro_ggil', 2, '1d1dbb098fcd26c4d3935e603a978d14acc58a57'), -- Senha: 'euvimbarganhar'
	('ianzito@gmail.com', 'calvo', 1, '4f0b0dc38c21db0c503f5cba30c7ed12929b5a59'); -- Senha: 'dormammu'

ALTER TABLE tb_agenda ADD FOREIGN KEY (`id_user`) REFERENCES `tb_user` (cd_user);
ALTER TABLE tb_artigos ADD FOREIGN KEY (`id_user`) REFERENCES `tb_user` (cd_user);
ALTER TABLE tb_agenda_user ADD FOREIGN KEY (`id_user`) REFERENCES `tb_user` (cd_user);
ALTER TABLE tb_agenda_user ADD FOREIGN KEY (`id_agenda`) REFERENCES `tb_agenda` (cd_agenda);