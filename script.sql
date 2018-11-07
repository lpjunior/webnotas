create database projetofinal;

use projetofinal;

create table tb_notas(
   id  int primary key auto_increment,
   nome varchar(150) not null,
   email varchar(150) not null,
   nota01 float not null,
   nota02 float not null
);
