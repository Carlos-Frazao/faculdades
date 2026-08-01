# Artigos e Referências - Banco de Dados Não Relacionais

Durante esta disciplina, os seguintes artigos científicos foram estudados como base teórica:

### 1. Uma Proposta de Arquitetura de Big Data para Detecção de Fake News
* **Autores:** DANIELE MOURA DE QUEIROZ
* **Link para leitura:** https://repositorio.ufpa.br/server/api/core/bitstreams/ea1f7de6-43bf-4ede-8c7c-5dbc1a7ebe52/content
* **Meus Apontamentos:**

**Ideia Central:**
* O artigo propõe a utilização de uma arquitetura baseada em tecnologias de Big Data para auxiliar na detecção e combate às notícias falsas (fake news) na internet.
* O estudo destaca que a quantidade massiva de informações geradas diariamente em diversos formatos (textos, imagens, vídeos) exige ferramentas capazes de armazenar, processar e analisar esses dados de maneira eficiente e em larga escala.

**Fundamentação Teórica:**
* Os autores definem o fenômeno do Big Data baseando-se em cinco "Vs": Volume, Velocidade, Variedade, Veracidade e Valor.
* O documento aborda a necessidade da computação paralela e distribuída, através de clusters, para lidar com a complexidade e o volume dessas informações.
* O estudo foca no ecossistema Apache Hadoop, detalhando o uso do HDFS (armazenamento distribuído), MapReduce (processamento paralelo) e do banco de dados não relacional HBase.
* Ferramentas complementares também são fundamentadas, como o Hive para consultas SQL em petabytes de dados, o Sqoop para transferência de dados estruturados e o Mahout para algoritmos de aprendizado de máquina em álgebra linear distribuída.

**Aplicação Prática (Foco em Desenvolvimento):**
* A pesquisa estruturou uma arquitetura real dividida em cinco camadas principais: fontes de dados, armazenamento, processamento, acesso aos dados e análise de Big Data.
* Durante os experimentos, a equipe processou um corpus de 8300 notícias (4150 verdadeiras e 4150 falsas). 
* O pipeline de dados envolveu o armazenamento inicial em bancos relacionais (MariaDB), transferência para o HDFS via Apache Sqoop, e a aplicação do algoritmo de aprendizado de máquina Naive Bayes (através do Apache Mahout) de forma distribuída nos nós do cluster Hadoop. 
* O modelo criado alcançou uma acurácia de 99,85% na classificação correta das instâncias analisadas.

---

### 2. Auto-Tuning de banco de dados NoSQL com dados de Internet das Coisas: um estudo de caso com o Cassandra
* **Autores:** Lucas Benevides Dias
* **Link para leitura:** https://repositorio.unb.br/bitstream/10482/34423/1/2018_LucasBenevidesDias.pdf
* **Meus Apontamentos:**

**Ideia Central:**
* O trabalho propõe o desenvolvimento de um mecanismo de auto-tuning, chamado C*DynaConf, capaz de configurar de forma autônoma e dinâmica os parâmetros de compactação do SGBD NoSQL Apache Cassandra.
* O foco principal é otimizar o banco de dados especificamente para o armazenamento de dados de Internet das Coisas (IoT), maximizando o throughput (número de operações por segundo) e minimizando a latência (tempo de resposta).

**Fundamentação Teórica:**
* Os dados gerados em ambientes IoT possuem características muito próprias (como geração em escala massiva, buscas guiadas por selos temporais e expiração/descarte de dados antigos) que exigem bancos de dados NoSQL altamente escaláveis e flexíveis.
* No Cassandra, a arquitetura de armazenamento funciona gravando dados temporariamente na memória (Memtable) e depois os descarregando em arquivos imutáveis no disco, chamados SSTables.
* Como esses arquivos em disco não podem ser alterados, o SGBD precisa realizar "compactações" periodicamente para fundir SSTables antigas e expurgar dados deletados ou expirados (tombstones).
* A pesquisa explora diferentes estratégias de compactação e foca na Time Window Compaction Strategy (TWCS), que organiza as páginas de dados em janelas temporais, sendo a mais apropriada para lidar com os dados ordenados cronologicamente do universo IoT.
* O conceito de *auto-tuning* (ou *self-tuning*) na ciência da computação refere-se à habilidade de um software determinar sua própria configuração ideal em tempo de execução, adaptando-se a mudanças na carga de trabalho sem a necessidade de intervenção humana.

**Aplicação Prática (Foco em Desenvolvimento):**
* Os experimentos da pesquisa comprovaram que a estratégia de compactação TWCS é cerca de 20% mais rápida e possui latência 22% menor que sua predecessora (DTCS) para armazenar dados de IoT.
* Para automatizar a performance, foi desenvolvido o C*DynaConf, um software em Java que captura métricas do cluster Cassandra (como a proporção entre operações de leitura e escrita e o Time To Live dos dados) a cada 30 segundos usando o protocolo JMX.
* Com base nessas métricas, o algoritmo calcula o cenário ideal e executa comandos de alteração de tabela no banco para ajustar dinamicamente os parâmetros essenciais da estratégia TWCS (`compaction_window_size` e `min_threshold`).
* Em simulações de cenários de IoT com flutuações de carga, o uso do C*DynaConf trouxe uma melhoria de 4,52% no número de operações concluídas em comparação com um banco de dados estaticamente configurado, comprovando o valor do ajuste dinâmico.

---