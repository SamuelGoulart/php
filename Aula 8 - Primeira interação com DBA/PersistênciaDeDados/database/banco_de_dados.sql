create database dbtasklist;

use dbtasklist;

create table tbl_tasks(
    id int not null auto_increment primary key,
    descricao varchar(255) not null
);

select * from tbl_tasks;

insert tbl_tasks(descricao) values ("Estudar JAVA");

insert tbl_tasks(descricao) values ("Fazer exercicíos PHP");

insert tbl_tasks(descricao) values ("Fazer comida saudavél");



delete from tbl_tasks;

DELETE FROM tbl_tasks idWHERE ID <> 21;

DELETE FROM tbl_tasks WHERE id = 28;

update tbl_task SET descricao = "Estudar JavaScript" where ID = 4;


select  * from tbl_tasks;