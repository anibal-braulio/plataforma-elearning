CREATE TABLE usuarios (
  iduser int(5) NOT NULL auto_increment primary key,
  foto_perfil varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT 'backend/uploads/foto/user.png',
  nome varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  genero enum('M','F') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  morada varchar(300) COLLATE utf8mb4_unicode_ci default "sem morada",
  telefone int(9) DEFAULT NULL,
  dataNasc varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  escolaridade varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  tipo enum('Estudante','Professora','Professor','Administrador','Administradora') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  nomeUser varchar(30) COLLATE utf8mb4_unicode_ci default nome,
  email varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  senha varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  desricao varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT "sem observação"
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;