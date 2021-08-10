DROP DATABASE IF EXISTS clinica;
CREATE DATABASE clinica;

DROP table IF EXISTS profissionais;
CREATE TABLE `profissionais`(
      `id` INTEGER AUTO_INCREMENT,
      `nome` VARCHAR(100) NOT NULL,
      `especializacao` VARCHAR(50),

      primary key(id)
)ENGINE=InnoDB default charset=utf8;

 insert into `profissionais` (nome , especializacao)VALUES
 ("Joao da Silva", "clinico geral"),("Maria Santana das Neves","Cardiologista"),
 ("Maria de Lurdes", "dermatologista"),("Francisnei dos Santos","Otorrinolaringologista"),
 ('Jeyce Lima', '');

DROP table IF EXISTS procedimentos;
CREATE TABLE `procedimentos`(
      `id` INTEGER AUTO_INCREMENT,
      `nome` VARCHAR(50) NOT NULL,
      `valor` DECIMAL(8,2) NOT NULL,
      `porcentagem_especialista` DECIMAL(8,2)NOT NULL

      primary key(id)
)ENGINE=InnoDB default charset=utf8;

 insert into `procedimentos` (nome , valor)VALUES
 ("Clinico Geral", "80.00"),("Cardiologia","120.00"),
 ("Dermatologia", "150.00"),("otorrinolaringologia","130.00");

DROP table IF EXISTS clientes;
CREATE TABLE `clientes`(
      `id` INTEGER AUTO_INCREMENT ,
      `nome` VARCHAR(50) NOT NULL,
      `cpf` CHARACTER(11) UNIQUE NOT NULL,

      primary key(id)
)ENGINE=InnoDB default charset=utf8;

 insert into `clientes` (nome, cpf)VALUES
 ("Amanda de Barros", "00000000001"),("Alvaro de Goes Monteiro","00000000002"),
 ("Luiza Amaral", "00000000003"),("Paulo Henrique Santos","00000000004");

DROP table IF EXISTS agenda;
CREATE TABLE `agenda`( 
      `id` INTEGER AUTO_INCREMENT ,
      `cliente_id` VARCHAR(50) NOT NULL,
      `procedimento_id` CHARACTER(11) UNIQUE NOT NULL,
      `valor` DECIMAL(8,2) NOT NULL
      

      primary key(id)
)ENGINE=InnoDB default charset=utf8;
