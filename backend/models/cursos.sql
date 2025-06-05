CREATE TABLE cursos (
  idcurso int(4) auto_increment primary key,
  url_banner varchar(2048) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT 'backend/uploads/banners/curso-video.png',
  titulo varchar(80) NOT NULL,
  descricao varchar(500) NOT NULL,
  autor int(4), constraint foreign key (autor) references usuarios (iduser),
  estado enum("completo","em progresso"),
  nivelAcesso enum("privado","publico","restrito") DEFAULT "publico",
  tipo enum("gratis","pago") not null,
  preco decimal(6,2) DEFAULT 0.00,
  popularidade int(5) DEFAULT 0,
  url_curso varchar(50) NOT NULL,
  dataPublicacao date DEFAULT NULL,
  url_artigos varchar(50) default "sem artigos" ,
  classificacao int(1) default 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;