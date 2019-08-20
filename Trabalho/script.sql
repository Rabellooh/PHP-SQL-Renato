create table contato
(
	id_contato int not null primary key auto_increment,
	nome varchar(40),
	email varchar(40),
	telefone varchar(20),
	modelo varchar(50),
	chassi char(17)
);