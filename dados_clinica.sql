CREATE database dados_clinica;
USE dados_clinica;

CREATE TABLE tabela (
	id int auto_increment primary KEY,
    nome varchar(255),
    filiacao varchar(255),
    dt_nasc date,
    rg varchar(20),
    cpf varchar(14),
    sexo varchar(20),
    email varchar(255),
    telefone varchar(20),
    dt_agendamento date
);

insert into 
tabela 
	(nome, filiacao, rg)
values
	('Eduardo', 'Jose', '20079895055');
    
    alter user 'root'@'localhost' identified with mysql_native_password by '123456'