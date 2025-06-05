create table interacao(
    idinteracao int(4) primary key auto_increment,
    objecto int(4), constraint foreign key (objecto) references cursos(idcurso),
    material int(4), constraint foreign key (objecto) references artigos(idartigo),
    usuario int(4), constraint foreign key (usuario) references usuarios(iduser),
    reacao ENUM("gosto","não gosto"),
    comentario varchar(800) CHARACTER SET utf8 COLLATE utf8_unicode_ci,
    dataInteracao date
)