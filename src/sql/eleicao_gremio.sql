CREATE DATABASE eleicao_gremio2015;
USE eleicao_gremio2015;

CREATE TABLE IF NOT EXISTS 'usuario'(
	'id_aluno' NOT NULL AUTO_INCREMENT,
	'matricula' varchar(14) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
	'voto' INTEGER FOREIGN KEY (voto) REFERENCES chapa(id_chapa) NOT NULL ,
	'chapa' INTEGER FOREIGN KEY (voto) REFERENCES chapa(id_chapa),
	'data' TIMESTAMP default current_timestamp()
)

CREATE TABLE IF NOT EXISTS 'chapa'(
	'id_chapa' NOT NULL AUTO_INCREMENT,
	'nome_chapa' varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
	PRIMARY KEY ('id_chapa')
)
