ALTER TABLE produtos 
MODIFY unidade_medida BIGINT NOT NULL;

ALTER TABLE produtos
ADD CONSTRAINT fk_unidade_medida
FOREIGN KEY (unidade_medida) REFERENCES unidades_medida(id);