CREATE DATABASE gestao_produtos
USE gestao_produtos
CREATE TABLE produtos (
    id bigint AUTO_INCREMENT NOT NULL,
    NOME VARCHAR(50) NOT NULL,
    SKU VARCHAR(20) NOT NULL UNIQUE,
    descricao VARCHAR(100) NOT NULL,
    categoria VARCHAR(50) NOT NULL,
    preco FLOAT NOT NULL,
    unidade_medida VARCHAR(10) NOT NULL,
    peso FLOAT NOT NULL,
    quantidade_estoque int NOT NULL,
    fabricante VARCHAR(50) NOT NULL,
    fornecedor VARCHAR(50) NOT NULL,
    deleted_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    updated_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);

