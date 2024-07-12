-- 1. Listar apenas o nome do filme em inglês e a nota, ordenados por ordem do mais
-- bem avaliado para o mais mal avaliado
SELECT
	titulo_original,
    avaliacao
FROM 
	filmes
ORDER BY 
	avaliacao DESC;

-- 2. Exibir apenas um filme, o mais longo da lista
SELECT
	titulo,
    duracao
FROM
	filmes
ORDER BY
	duracao DESC
LIMIT 
	1

-- 3. Listar apenas o título (em pt-br), duração e classificação, dos três filmes mais
-- curtos, com classificação menor ou igual a 16 anos
SELECT
	titulo,
    duracao,
    classificacao
FROM
	filmes
WHERE
	classificacao <= 16
ORDER BY
	duracao ASC
LIMIT 
	3;

-- 4. Listar os filmes, do mais antigo para o mais atual, e caso empatados, ordenar
-- por avaliação, do mais bem avaliado para o mais mal avaliado
SELECT
	titulo,
    ano_lancamento, 
    avaliacao
FROM
	filmes
ORDER BY
	ano_lancamento, avaliacao DESC;

-- 5. Listar filmes que contenham a palavra “Drama” na categoria
SELECT
	titulo,
    genero
FROM 
	filmes
WHERE
	genero LIKE '%Drama%';

-- 6. Exibir o total de registros da tabela
SELECT
	count(*) as "TOTAL DE REGISTROS"
FROM
	filmes;

-- 7. Exibir o total de registros agrupados por classificação
SELECT
	count(*) as "TOTAL DE REGISTROS",
    classificacao
FROM
	filmes
GROUP BY
	classificacao;

-- 8. Desafio: Exibir o total de registros, a soma da duração, a nota média, agrupados
-- por classificação
SELECT
    CASE 
		WHEN classificacao = 0 then "Livre"
        ELSE CONCAT(classificacao, " Anos")
	END AS "CLASSIFICAÇÃO IDADE",
	count(*) as "TOTAL DE REGISTROS",
    sum(duracao) as "SOMA DURAÇÃO DOS MINUTOS",
	round(sum(avaliacao) / count(*), 2) as "MÉDIA AVALIAÇÃO"
FROM
	filmes
GROUP BY
	classificacao


