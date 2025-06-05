create table notificacoes(
    idnotify int primary key auto_increment,
    descricao varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci not null,
    categoria enum("solicitação de cadastro","alerta","recuperação de senha","inscrição de curso","interação do curso","compra do curso"),
    emissor int, constraint foreign key (emissor) references usuarios (iduser),
    receptor int, constraint foreign key (receptor) references usuarios (iduser) not null,
    objecto int,
    superEmissor varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci default "A plataforma Tocolern",
    dataCricao date,
    prazo int
);