CREATE TABLE gsa (
  id_gsa INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_empresa TEXT NULL,
  telefone_empresa VARCHAR(45) NULL,
  cnpj_empresa TEXT NULL,
  produto_empresa TEXT NULL,
  PRIMARY KEY(id_gsa)
);

CREATE TABLE gsa_atendente (
  id_atendente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_atendente TEXT NULL,
  telefone_atendente VARCHAR(45) NULL,
  cpf_atendente TEXT NULL,
  cargo_atendente TEXT NULL,
  PRIMARY KEY(id_atendente)
);

CREATE TABLE gsa_final (
  gsa_id_gsa INTEGER UNSIGNED NOT NULL,
  gsa_atendente_id_atendente INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(gsa_id_gsa, gsa_atendente_id_atendente),
  INDEX gsa_has_gsa_atendente_FKIndex1(gsa_id_gsa),
  INDEX gsa_has_gsa_atendente_FKIndex2(gsa_atendente_id_atendente)
);