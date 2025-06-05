create table conversas(
    idconversa int(11) primary key auto_increment,
    conteudo text not null,
    anexo varchar(2048) DEFAULT "sem anexo",
    emissor int, constraint foreign key (emissor) references usuarios(email) not null,
    receptor int , constraint foreign key (receptor) references usuarios(email) not null,
    dataEnvio date,
    dataVista date,
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;