# Artigos e Referências - Banco de Dados Não Relacionais

Durante esta disciplina, os seguintes artigos científicos foram estudados como base teórica:

### 1. NoSQL - Critérios para Seleção de SGBD NoSQL: o Ponto de Vista de Especialistas com base na Literatura
* **Autores:** Alexandre Morais de Souza 1, Edmir P. V. Prado 1 Violeta Sun1 Marcelo Fantinato1
* **Link para leitura:** https://sol.sbc.org.br/index.php/sbsi/article/view/6109
* **Meus Apontamentos:**

**Ideia Central:**
* O artigo tem como objetivo identificar e consolidar os principais critérios que devem ser usados para a seleção de um SGBD NoSQL em organizações privadas.
* A pesquisa busca preencher uma lacuna de estudos sobre o processo de escolha dessas ferramentas, auxiliando as empresas na adoção de tecnologias capazes de lidar com o Big Data, a escalabilidade e o alto grau de disponibilidade requeridos pelas aplicações web.

**Fundamentação Teórica:**
* O modelo NoSQL (*Not Only SQL*) surgiu devido à ineficiência dos bancos de dados relacionais tradicionais (criados na década de 70) em lidar com o crescente volume de dados semiestruturados e não estruturados gerados na Web 2.0.
* As características essenciais que diferenciam os SGBDs NoSQL incluem a escalabilidade horizontal, a ausência de esquema fixo (esquema flexível), o suporte nativo à replicação e a consistência eventual baseada no Teorema CAP (Consistência, Disponibilidade e Tolerância à Partição).
* Os modelos de dados NoSQL são classificados em quatro categorias principais para atender a diferentes contextos: chave-valor, orientado a colunas, orientado a documentos e orientado a grafos.

**Aplicação Prática e Resultados (Foco no Experimento):**
* A metodologia iniciou-se com uma revisão sistemática da literatura, que identificou 19 critérios de seleção divididos em quatro grupos: Fornecedor, Produto, Organização e Qualidade (este último baseado no modelo SQuaRE da série ISO/IEC 9126).
* Em seguida, esses critérios foram submetidos à avaliação de um painel de 32 especialistas com vivência prática e acadêmica em NoSQL (DBAs, desenvolvedores e gerentes) por meio de um questionário online.
* Os especialistas validaram a importância de todos os 19 critérios originais da literatura e acrescentaram três novos requisitos considerados fundamentais no dia a dia: "Software livre", "Apoio da comunidade" e "Escalabilidade horizontal".

---

### 2. Estudo Comparativo de Bancos de Dados NoSQL
* **Autores:** Dinei A. Rockenbach1, Nadine Anderle1 , Dalvan Griebler1,2, Samuel Souza1
* **Link para leitura:** https://revistas.setrem.com.br/index.php/reabtic/article/view/286
* **Meus Apontamentos:**

**Ideia Central:**
* O artigo tem como objetivo realizar um estudo comparativo detalhado do estado da arte e das características relevantes de diversos bancos de dados NoSQL.
* A pesquisa busca abstrair as informações mercadológicas das ferramentas para auxiliar os tomadores de decisão a avaliarem as funcionalidades reais e escolherem o sistema de armazenamento adequado para cada cenário.

**Fundamentação Teórica:**
* O texto destaca que bancos de dados relacionais dependem do modelo ACID (Atomicidade, Consistência, Isolamento e Durabilidade) para manter a integridade, o que limita o desempenho em cenários de grande volume.
* Como contraponto, os bancos NoSQL utilizam o princípio BASE (*Basically Available, Soft-state, Eventually consistent*) para alcançar melhor desempenho, disponibilidade e escalabilidade.
* A fundamentação utiliza o Teorema CAP (Consistência, Disponibilidade e Tolerância a Partições) para analisar os *trade-offs* de cada sistema quando submetidos a falhas de comunicação em redes distribuídas.
* Os sistemas são divididos e estudados em quatro categorias principais baseadas em otimizações de arquitetura: chave-valor, família de colunas, orientados a documentos e bancos de grafos (ou triplos).
* Há também a menção aos Bancos de Dados em Memória (IMDB), que utilizam a memória RAM como armazenamento primário para reduzir drasticamente as latências de acesso a disco.

**Aplicação Prática e Resultados (Foco no Experimento):**
* Os autores compilaram tabelas comparativas detalhadas de 16 tecnologias NoSQL (como Redis, Voldemort, HBase, Cassandra, MongoDB, OrientDB, Neo4j, entre outras).
* A comparação foi dividida em três frentes: características mercadológicas (licenciamento, linguagens, protocolos), características de projeto (escalabilidade, controle de concorrência, transações, persistência, failover) e características de manutenção (interfaces de gerenciamento, monitoramento, *benchmarks*).
* Nos resultados de projeto, revelou-se um suporte extremamente variado entre as plataformas, como o controle de concorrência que vai desde *single-thread* (Redis) até *Compare-And-Swap* (Cassandra, Couchbase) e *Locks* Tradicionais (Neo4j).
* Concluiu-se que existe uma grande disparidade funcional mesmo entre bancos rotulados em uma mesma categoria, o que impede a definição genérica de um "melhor" sistema.
* A escolha tecnológica exige sempre o levantamento minucioso dos requisitos do ambiente prático para verificar qual plataforma supre de fato as necessidades da aplicação.

---

### 3. NoSqlayer: a Framework for Migrating Relational Datasets to NoSQL Models
* **Autores:** Fernando Vale1 , Leonardo Rocha1
* **Link para leitura:** https://journals-sol.sbc.org.br/index.php/reic/article/view/1022
* **Meus Apontamentos:**

**Ideia Central:**
* O artigo apresenta o NoSQLayer, um *framework* desenvolvido para realizar a migração automática de dados de um Sistema Gerenciador de Banco de Dados Relacional (SGBDR) para um banco NoSQL mantendo a semântica do banco original.
* O objetivo principal é atuar como uma camada de abstração que permite que as aplicações continuem acessando e consultando os dados de forma transparente, eliminando a necessidade e o alto custo de reescrever o código-fonte da aplicação para se comunicar com o novo modelo.

**Fundamentação Teórica:**
* Os SGBDRs (baseados no modelo relacional) atenderam às demandas por décadas, mas têm se mostrado ineficientes para manipular o enorme crescimento no volume de dados não estruturados das aplicações modernas.
* Em resposta a esse cenário, empresas de tecnologia adotaram sistemas NoSQL (*Not only SQL*), que oferecem facilidade de particionamento e replicação de dados.
* A transição de um sistema para o outro impõe três grandes desafios: a transferência de um alto volume de dados, a manutenção da semântica original (preservando todos os relacionamentos sem distorcer informações) e o custo de adaptação do código das aplicações.

**Aplicação Prática e Resultados (Foco no Desenvolvimento):**
* O *framework* NoSQLayer foi desenvolvido em Java e adaptado inicialmente para operar a migração do MySQL (relacional) para o MongoDB (orientado a documentos).
* O sistema opera em dois módulos; o primeiro é o "módulo de migração", que extrai os metadados do banco original via API *Java Database MetaData*, converte tabelas em coleções e mapeia os registros em documentos.
* O segundo é o "módulo de mapeamento", que utiliza o *MySQL Proxy* (Mediador) para interceptar as instruções SQL originais da aplicação e enviá-las a um *WebService* (Converter). 
* O Converter utiliza a biblioteca *JSQLParser* para extrair parâmetros do SQL, traduz a consulta para a linguagem do MongoDB, executa a operação, e remonta a resposta para o formato relacional esperado pela aplicação.
* A avaliação qualitativa demonstrou 100% de eficácia, uma vez que todas as operações testadas retornaram resultados idênticos aos que seriam obtidos rodando diretamente no MySQL original.
* A análise quantitativa comprovou que, apesar da camada de tradução gerar um leve atraso (*overhead*) em consultas pequenas, o NoSQLayer torna-se muito mais rápido e eficiente que o MySQL à medida que o volume de dados operados cresce.
* Nas operações de alteração de estado (*Insert*, *Update* e *Delete*), o *framework* apresentou um tempo de execução muito inferior ao MySQL em todas as avaliações, impulsionado pela ausência de restrições rígidas de integridade inerentes aos bancos NoSQL.

---

### 4. Uma Análise Comparativa entre Sistemas Gerenciadores de Bancos de Dados NoSQL no contexto de Internet das Coisas
* **Autores:** Allexandre Sampaio Santos Soares, Pablo Freire Matos
* **Link para leitura:** https://sol.sbc.org.br/index.php/sbbd/article/view/24303
* **Meus Apontamentos:**

**Ideia Central:**
* O artigo objetiva analisar e comparar o desempenho de Sistemas Gerenciadores de Bancos de Dados (SGBDs) não relacionais (NoSQL) quando inseridos no contexto da Internet das Coisas (IoT).
* A pesquisa foca em avaliar métricas essenciais como tempo de resposta, vazão, taxa de erro e consumo de recursos de máquina (CPU, memória e armazenamento) utilizando uma base de dados real de sensores.

**Fundamentação Teórica:**
* Os bancos de dados relacionais sofrem frequentemente com o problema da "incompatibilidade de impedância" (diferença entre o modelo relacional e as estruturas de dados na memória), o que dificulta seu uso em sistemas de tempo real com grandes volumes de dados.
* O modelo NoSQL prioriza a escalabilidade, arquitetura flexível e a alta velocidade de acesso e gravação, focando na disponibilidade e velocidade em detrimento da consistência absoluta.
* Aplicações de IoT lidam com dados que provêm continuamente de várias fontes (sensores) em grande escala, possuindo heterogeneidade, multidimensionalidade e correlação temporal e espacial.
* A análise de desempenho através de ferramentas de *benchmarking* é essencial para verificar a latência, a vazão e o uso de recursos, demandando soluções que sejam adequadas ao domínio específico da aplicação testada.

**Aplicação Prática e Resultados (Foco no Experimento):**
* Os autores desenvolveram uma ferramenta específica de *benchmarking* em Java, de código aberto, chamada *Inobench* (IoT-NoSQL-Benchmarking) para submeter os SGBDs a diferentes cargas de testes automatizados.
* O experimento avaliou três bancos NoSQL (MongoDB, Couchbase e Redis) usando o *Air Quality Data Set*, uma base real com 9.358 instâncias de dados sobre a qualidade do ar colhidos por sensores em uma cidade na Itália.
* A metodologia submeteu os bancos a cargas crescentes de concorrência, partindo de 1 usuário (realizando 100.000 operações) até 750 usuários simultâneos (realizando 100 operações cada).
* O Redis (Chave-Valor) obteve os melhores resultados no consumo de memória RAM e CPU, sendo recomendado para cenários com restrições de processamento.
* O Couchbase (Documentos) apresentou a maior velocidade na leitura de dados e o menor consumo de processamento nessa tarefa, sendo ideal para aplicações de IoT que demandam altíssima velocidade.
* O MongoDB (Documentos) foi amplamente superior na economia de espaço em disco e obteve excelente índice de confiabilidade (baixa taxa de erros sob alta carga), sendo indicado para ambientes com restrições severas de armazenamento.
* A conclusão principal do estudo afirma que não há um SGBD NoSQL universalmente superior; a escolha deve ser estritamente pautada pelas prioridades operacionais e restrições específicas de cada projeto.

---

### 5. Uma Aplicação para Migração de Dados de Banco Relacional para MongoDB
* **Autores:** Rodrigo Machado1 , Gustavo Girardon1 , Victor Costa1 , Maicon Bernardino1 , Marcus Jacomé1 , Robson Gonçalves1
* **Link para leitura:** https://sol.sbc.org.br/index.php/eres/article/view/8503
* **Meus Apontamentos:**

**Ideia Central:**
* O artigo apresenta o desenvolvimento de uma aplicação em Java (chamada DB2toMongo) criada para automatizar a migração de dados de um banco de dados relacional (IBM DB2) para um banco de dados não relacional orientado a documentos (MongoDB).
* O objetivo da ferramenta é facilitar a modernização e a adaptação de organizações a novas tecnologias, superando as limitações operacionais de sistemas legados que não foram arquitetados para processar eficientemente os grandes volumes de dados dos ambientes web atuais.

**Fundamentação Teórica:**
* Os bancos de dados relacionais armazenam informações em um conjunto de tabelas inter-relacionadas, mas frequentemente apresentam lentidão e perda de desempenho na extração de dados quando o volume de informações se torna massivo.
* O paradigma NoSQL contorna esses gargalos através de recursos como esquemas dinâmicos, replicação e cache integrado.
* O MongoDB foi a tecnologia adotada pela organização do estudo devido à sua capacidade de armazenar dados em objetos JSON, o que simplifica a conversão nativa para JavaScript no código e dispensa a necessidade de conhecimentos profundos em comandos SQL por parte dos programadores.

**Aplicação Prática e Resultados (Foco no Desenvolvimento):**
* A solução foi desenvolvida utilizando o *framework* Maven para gerenciamento de dependências e a metodologia ágil *Scrum*, com o trabalho dividido entre uma equipe de cinco estagiários.
* Para garantir a flexibilidade, a aplicação não possui configurações engessadas no código-fonte; ela lê um arquivo externo (`config.properties`) onde o usuário define credenciais de conexão, mapeamento de chaves primárias e as *queries* SQL que selecionarão os dados de origem.
* O sistema foi programado para operar em dois modos distintos: no modo Automático (AUTO), a ferramenta analisa a data da última execução e realiza apenas a inserção ou o *update* de registros novos/modificados; já no modo de Substituição (REPLACE), a aplicação deleta toda a coleção existente no MongoDB e refaz a carga completa baseada na *query* fornecida.
* A arquitetura interna do código foi segregada em seis classes de responsabilidade única: leitura de configurações (`Config`), conexões individuais (`DB2Connection` e `MongoConnection`), leitura e extração do relacional (`DB2Read`), persistência no NoSQL (`MongoInsert`) e a classe de execução principal que também gerencia o arquivo de *log* com a data da última migração (`Execute`).
* O projeto atendeu com sucesso aos requisitos da organização, entregando uma solução automatizada que evita que a empresa fique presa a tecnologias legadas devido à dificuldade e ao esforço manual de migrar seus bancos de dados.

---