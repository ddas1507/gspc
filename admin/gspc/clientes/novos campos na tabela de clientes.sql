alter table tbl_clientes add CLI_SENHA varchar(6) not null after CLI_NOME;
alter table tbl_clientes add CLI_LOGIN varchar(6) not null after CLI_SENHA;

