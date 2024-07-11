CREATE TABLE fornecedores (
	id BIGINT AUTO_INCREMENT NOT NULL,
    nome_fornecedores VARCHAR(50) NOT NULL,
    deleted_at DATE NULL, 
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    primary key (id)
);

CREATE TABLE unidades_medida (
	id BIGINT AUTO_INCREMENT NOT NULL,
    nome_unidade_medida VARCHAR(50) NOT NULL,
    deleted_at DATE NULL, 
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    primary key (id)
);

CREATE TABLE fabricantes (
	id BIGINT AUTO_INCREMENT NOT NULL,
    nome_fabricante VARCHAR(50) NOT NULL,
    deleted_at DATE NULL, 
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    primary key (id)
);

CREATE TABLE categorias (
	id BIGINT AUTO_INCREMENT NOT NULL,
    nome_categoria VARCHAR(50) NOT NULL,
    deleted_at DATE NULL, 
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    primary key (id)
);