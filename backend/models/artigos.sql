create table artigos(
    idartigo int primary key auto_increment,
    titulo varchar(100) not null unique,
    descricao varchar(500) not null,
    autor int, constraint foreign key (autor) references usuarios(iduser),
    dataPublicacao date,
    url_artigo varchar(2048) not null unique
);