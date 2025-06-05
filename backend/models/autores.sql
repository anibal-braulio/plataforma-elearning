create table autores(
	idautor int primary key auto_increment,
	autor int, constraint foreign key (autor) references usuarios(iduser),
	curso int, constraint foreign key (curso) references cursos(idcurso),
);