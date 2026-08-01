# Artigos e Referências - Banco de Dados Não Relacionais

Durante esta disciplina, os seguintes artigos científicos foram estudados como base teórica:

### 1. NoSQL - A análise da modelagem e consistência dos dados na era do Big Data.
* **Autores:** Wagner Braz Rodrigues
* **Link para leitura:** https://repositorio.pucsp.br/jspui/handle/handle/20590
* **Meus Apontamentos:**

**Ideia Central:**
* A dissertação analisa os modelos de armazenamento NoSQL como solução para os desafios estruturais do Big Data (Volume, Velocidade e Variedade) através da computação distribuída e da escalabilidade horizontal.
* O trabalho explora como o NoSQL abandona a forte estruturação do modelo relacional para reaproximar as estruturas de dados persistentes das estruturas transientes, lidando com os efeitos de consistência explicados pelo Teorema CAP.

**Fundamentação Teórica:**
* O modelo relacional tradicional utiliza as propriedades ACID (Atomicidade, Consistência, Isolamento e Durabilidade) para garantir a consistência forte dos dados, o que gera incompatibilidade e gargalos em ambientes de computação distribuída.
* Em sistemas distribuídos, o Teorema CAP (Consistência, Disponibilidade e Tolerância a Partição) prova que é impossível garantir as três propriedades simultaneamente.
* Para contornar isso, os bancos NoSQL adotam o modelo transacional BASE (*Basically Available, Soft state, Eventual consistency*), que sacrifica a consistência imediata em favor da alta disponibilidade e tolerância a falhas na rede.
* O ecossistema NoSQL divide-se em quatro categorias principais baseadas em suas estruturas de dados: Chave-Valor (dicionários e tabelas hash), Colunar (listas e famílias de colunas), Documentos (estruturas semiestruturadas como JSON/BSON e XML) e Grafos (vértices e arestas matemáticos).

**Aplicação Prática (Foco em Desenvolvimento):**
* A modelagem em bancos NoSQL é *orientada a consultas* (focada nas perguntas que a aplicação fará e no fluxo de dados), diferentemente do modelo relacional que é guiado pela estrutura rígida das entidades e normalização.
* O estudo analisa o funcionamento de quatro SGBDs práticos para ilustrar as categorias: Aerospike (Chave-Valor), Cassandra (Colunar), MongoDB (Documentos) e Neo4j (Grafos).
* Para evitar as custosas operações de junção (*joins*) em clusters distribuídos, bases de Chave-Valor, Documentos e Colunares utilizam o conceito de "Agregados", agrupando objetos associados em uma única unidade de armazenamento.
* Os bancos de dados orientados a grafos (como o Neo4j) não utilizam agregados ou chaves estrangeiras, sendo ideais para mapear relações complexas nativamente através de verbos que conectam os objetos, embora a escalabilidade dependa fortemente da capacidade de alocar o grafo na memória RAM.

---