CREATE TABLE inscricao (
  idinscri int(11) NOT NULL,
  curso int(11) DEFAULT NULL,
  inscrito int(11) DEFAULT NULL,
  dataInscri timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE inscricao
  ADD PRIMARY KEY (idinscri),
  ADD KEY curso (curso),
  ADD KEY inscrito (inscrito);