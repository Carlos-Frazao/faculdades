# Artigos e Referências - Banco de Dados Não Relacionais

Durante esta disciplina, os seguintes artigos científicos foram estudados como base teórica:

### 1. Avaliação do desempenho relativo de bancos de dados NoSQL para arquivos de genótipos
* **Autores:** Vinícius Junqueira Schettino, Arthur Lorenzi Almeida, Leojayme Rodrigues Manso Silva e Wagner Arbex
* **Link para leitura:** https://www.alice.cnptia.embrapa.br/alice/bitstream/doc/1052648/1/Cnpgl2016CongSocBrasCompAvaliacao.pdf
* **Meus Apontamentos:**

**Ideia Central:**
* O artigo tem como objetivo avaliar o desempenho relativo entre dois bancos de dados NoSQL (MongoDB e Tarantool) na manipulação de arquivos de genótipos.
* Arquivos de genótipos são classificados como bases de dados não clássicas por serem arquivos de texto com alta dimensionalidade, dados desbalanceados e grande volume, características que tornam os Sistemas Gerenciadores de Bancos de Dados Relacionais (SGBDRs) ineficientes para o seu tratamento.

**Fundamentação Teórica:**
* A bioinformática e a genômica lidam frequentemente com conjuntos de dados genômicos complexos, que incluem sequências de nucleotídeos (*reads*), arquivos de metadados e dados de genotipagem por marcadores moleculares do tipo SNP.
* O volume de dados cresceu significativamente, pois as plataformas modernas de genotipagem conseguem processar desde alguns milhares até mais de 700 mil marcadores SNP em um único ensaio.
* Para resolver os problemas de escalabilidade, armazenamento e paralelismo exigidos pela computação científica e pelo Big Data, os bancos de dados NoSQL (*not-only SQL*) surgiram como uma alternativa robusta.
* O estudo foca em comparar duas "famílias" distintas de bancos NoSQL: o modelo baseado em documentos, representado pelo MongoDB, e o modelo baseado em chave-valor, representado pelo Tarantool.

**Aplicação Prática e Resultados (Foco no Experimento):**
* A metodologia envolveu a execução de um *benchmark* personalizado utilizando a ferramenta *Yahoo! Cloud Serving Benchmark* (YCSB) 0.7.
* A carga de trabalho (*workload*) simulou uma população de 5.000 indivíduos, cada um com 56.000 marcadores SNP, gerando assim 5.000 registros com 56.000 campos de 1 byte cada.
* O teste foi dividido em dois cenários focais: o cenário C1 envolveu operações de carga e inserção de dados, enquanto o cenário C2 focou em operações de leitura e atualização.
* No cenário C1 (inserção), o MongoDB apresentou um desempenho levemente superior (cerca de 11% mais rápido), executando a tarefa em pouco mais de 4,5 minutos contra um tempo ligeiramente superior a 5 minutos do Tarantool.
* No cenário C2 (leitura e atualização), o Tarantool apresentou um desempenho esmagadoramente superior: concluiu a execução em menos de 3 segundos, sendo mais de 5.400 vezes mais rápido que o MongoDB, que levou pouco mais de 2,5 minutos para a mesma tarefa.
* Os autores concluem que o uso de bancos de dados NoSQL baseados em chave-valor, como o Tarantool, deve ser fortemente considerado e apresenta uma solução muito superior para o armazenamento, leitura e atualização de arquivos de genótipos em comparação a sistemas baseados em documentos.

---

### 2. Um modelo de visualização de dados utilizando banco de dados orientado a grafo suportado por big data
* **Autores:** Gustavo Henrique Moreira Alvares da Silva
* **Link para leitura:** https://repositorio.unb.br/handle/10482/22055?locale=fr
* **Meus Apontamentos:**

**Ideia Central:**
* O trabalho propõe um modelo de plataforma de dados baseada em ferramentas de Big Data para dar suporte ao processo de investigação criminal das polícias judiciárias brasileiras.
* O objetivo central é superar as limitações dos bancos de dados tradicionais para lidar com o volume, velocidade e variedade das informações atuais, permitindo a visualização e a análise de vínculos complexos entre milhares de entidades investigadas de forma rápida e eficiente.

**Fundamentação Teórica:**
* O autor explora as dimensões do Big Data e o fenômeno da explosão informacional, destacando como o volume de dados das redes sociais, transações financeiras e dispositivos móveis afeta o trabalho investigativo.
* O documento analisa as limitações dos bancos de dados relacionais tradicionais (SGBDRs) no cenário de Big Data e os contrasta com a escalabilidade das quatro principais famílias NoSQL: chave-valor, documentos, famílias de colunas e grafos.
* Os bancos de dados orientados a grafos são justificados como a solução ideal para investigações porque sua estrutura nativa (vértices, arestas e propriedades) foca em representar relacionamentos e topologias de rede, ao invés de tabelas rígidas.
* O sistema de arquivos HDFS (Hadoop Distributed File System) e o paradigma de programação paralela MapReduce são fundamentados como o suporte necessário para processar terabytes de dados semiestruturados e não estruturados que acompanham as investigações.

**Aplicação Prática (Foco em Desenvolvimento):**
* A arquitetura foi validada através de um cenário hipotético integrando registros de atividades operacionais, interceptações telefônicas, quebras de sigilo telemático e transações bancárias.
* O banco de dados Neo4j foi empregado para armazenar o catálogo de metadados dos investigados. Utilizando a linguagem de consulta Cypher, o autor demonstrou como mapear o rastreio do fluxo de dinheiro ("o caminho do dinheiro") entre laranjas e descobrir a rede central de encontros do grupo criminoso sem a necessidade de comandos de junção (joins) custosos.
* Para o tratamento dos dados brutos (como arquivos de texto soltos de transcrições de grampos), a plataforma definiu a transferência desses arquivos para um cluster Apache Hadoop.
* Uma aplicação prática utilizando a função *WordCount* do modelo MapReduce foi simulada no Hadoop para varrer as transcrições das interceptações telefônicas em paralelo, contando e ranqueando automaticamente os nomes de indivíduos, empresas e localidades mais mencionadas pelos criminosos.

---