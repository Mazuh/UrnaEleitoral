CREATE DATABASE sistemaeleitoral

CREATE TABLE IF NOT EXISTS 'eleitor'(
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

INSERT INTO 'chapa'('id_chapa', 'nome_chapa') VALUES
(1,'SUPER AÇÃO'), 
(2, 'IAE');
