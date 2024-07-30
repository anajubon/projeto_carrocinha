drop database if exists controle_animais;

create database if not exists controle_animais;

use controle_animais;

create table cidade
(
    id          int auto_increment,
    nomecidade        varchar(100),
    estado      varchar(002),
    primary key(id)    
);

create table pessoa
(
    id          	int auto_increment,
    nomepessoa		varchar(100),
    email      		varchar(100),
    endereco		varchar(200),
    bairro			varchar(100),
    id_cidade		int,
    cep				varchar(009),
    primary key(id),
	constraint fk_pessoacidade
        foreign key (id_cidade) references cidade(id)
);

create table animal
(
    id          	int auto_increment,
    nomeanimal        	varchar(100),
    especie			varchar(100),
    raca			varchar(050),
    datanascimento 	date,
    idade			int,
    castrado       bool,
    id_pessoa   int,
    primary key(id),
    constraint fk_pessoaanimal
        foreign key (id_pessoa) references pessoa(id)  
);