CREATE DATABASE eleicao_gremio2015;
USE eleicao_gremio2015;

CREATE TABLE IF NOT EXISTS chapa(
	id INTEGER PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(10) UNIQUE NOT NULL
);

CREATE TABLE IF NOT EXISTS usuario(
	id INTEGER PRIMARY KEY AUTO_INCREMENT,
	matricula VARCHAR(14) UNIQUE NOT NULL,
	chapa_votada INTEGER DEFAULT NULL,
	momento_voto TIMESTAMP NULL DEFAULT NULL,
    	
    	senha_comite VARCHAR(64) DEFAULT NULL,
    	
    	chapa_pertencente INTEGER DEFAULT NULL,
    	membro_comite BOOL NOT NULL DEFAULT FALSE,
    
    	FOREIGN KEY(chapa_votada) REFERENCES chapa(id),
    	FOREIGN KEY(chapa_pertencente) REFERENCES chapa(id)
);
