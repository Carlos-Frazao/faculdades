# Resumo Detalhado: Banco de Dados II

Este documento apresenta os pilares fundamentais da disciplina de Banco de Dados II, focando em performance, consistência e arquiteturas modernas.

---

## 1. Processamento e Otimização de Consultas (Query Tuning)
O SGBD não executa o SQL exatamente como escrito; ele o traduz através de um **Otimizador**.

* **Plano de Execução:** O caminho lógico que o banco cria para acessar os dados (ex: usar um índice vs. percorrer a tabela toda).
* **Custo de I/O:** O principal objetivo da otimização é reduzir a leitura física de disco.
* **Heurísticas de Consulta:** Regras que o motor do banco usa para simplificar a álgebra relacional, como realizar filtros (`WHERE`) o mais cedo possível.

## 2. Controle de Concorrência e Transações
Garante que múltiplos usuários acessando o banco simultaneamente não gerem dados corrompidos.

* **Propriedades ACID:**
  * **Atomicidade:** A transação ocorre por inteiro ou não ocorre nada.
  * **Consistência:** O banco deve sair de um estado válido para outro estado válido.
  * **Isolamento:** Uma transação não deve interferir em outra em execução.
  * **Durabilidade:** Após o "commit", os dados não podem ser perdidos (persistência).
* **Bloqueios (Locks):** Mecanismos para impedir que dois processos alterem o mesmo registro ao mesmo tempo.
* **Deadlock:** Situação de impasse onde dois processos se bloqueiam mutuamente.

## 3. Estruturas de Armazenamento e Indexação
* **Árvores B+ (B-Trees):** Estrutura padrão para índices. Permite buscas, inserções e remoções em tempo logarítmico $O(\log n)$.
* **Índices Hash:** Ideais para buscas de igualdade (`=`), mas ineficientes para buscas de intervalo (`>`).
* **Índices Bitmap:** Otimizados para colunas com baixa cardinalidade (poucas variações de valores).

## 4. Bancos de Dados Distribuídos e NoSQL
Foco em escalabilidade horizontal (vários servidores trabalhando juntos).

* **Teorema CAP:** Em sistemas distribuídos, é impossível garantir simultaneamente:
  1. **C (Consistency):** Consistência.
  2. **A (Availability):** Disponibilidade.
  3. **P (Partition Tolerance):** Tolerância a falhas de rede.
* **Modelos NoSQL Principais:**
  * **Documento:** (Ex: MongoDB) Armazena objetos JSON/BSON.
  * **Chave-Valor:** (Ex: Redis) Focado em latência baixíssima (cache).
  * **Grafos:** (Ex: Neo4j) Focado em relacionamentos complexos.

## 5. Administração, Backup e Recuperação
* **Write-Ahead Logging (WAL):** Técnica de registrar as alterações em um log antes de aplicá-las aos arquivos de dados.
* **Checkpoints:** Sincronização periódica entre os dados em memória RAM e o disco rígido.
* **Estratégias de Backup:**
  * **Full:** Cópia completa.
  * **Diferencial:** Tudo o que mudou desde o último Full.
  * **Incremental:** Tudo o que mudou desde o último backup (de qualquer tipo).

## 6. Data Warehousing e OLAP
* **OLTP (Online Transaction Processing):** Bancos focados em transações rápidas e atuais (dia a dia).
* **OLAP (Online Analytical Processing):** Bancos focados em análise de grandes volumes históricos.
* **Modelagem Estrela (Star Schema):** Organização em tabelas de **Fatos** (eventos quantificáveis) e **Dimensões** (contexto dos eventos).
* **Processos ETL:** Extração (Extract), Transformação (Transform) e Carga (Load).

---