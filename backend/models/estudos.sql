create table estudos(
    idestud int(5) not null auto_increment primary key,
    usuario int(5), constraint foreign key (usuario) references usuarios(iduser),
    curso int(5), constraint foreign key (curso) references curso(idcurso),
    pontos int(5) DEFAULT 0,
    interacao int, constraint foreign key (interacao) references interacaoCursos(idintera),
    estado enum("completou","em progresso","parado"),
    dataInicio date,
    ultimaData date,
    dataTermino date
)