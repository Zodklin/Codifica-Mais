CREATE DATABASE codifica;

USE codifica;

CREATE TABLE filmes (
	id BIGINT AUTO_INCREMENT NOT NULL,
    titulo VARCHAR(255) NOT NULL,
    titulo_original VARCHAR(255) NOT NULL,
    ano_lancamento INT NOT NULL,
    classificacao INT NOT NULL,
    duracao INT NOT NULL,
    genero TEXT NOT NULL,
    avaliacao DECIMAL(3,1) NOT NULL,
    PRIMARY KEY (ID)
);