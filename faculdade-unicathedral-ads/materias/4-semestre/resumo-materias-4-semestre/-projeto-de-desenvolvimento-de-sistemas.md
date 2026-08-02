# 🏗️ Projeto de Desenvolvimento de Sistemas

Esta disciplina é onde a engenharia de software encontra a gestão. De nada adianta dominar linguagens e bancos de dados se o time não souber o que construir, em qual ordem, e como entregar o software sem estourar prazos ou orçamentos. É a ponte estrutural entre o problema real e a solução tecnológica.

## 1. Ciclo de Vida do Desenvolvimento de Software (SDLC)
Todo sistema passa por fases universais, desde a concepção da ideia até a manutenção pós-lançamento.
* **Levantamento de Requisitos:** O que o sistema deve fazer? Compreensão clara do problema do cliente.
* **Análise e Design:** Como vamos construir? Definição da arquitetura de software, diagramas, modelagem de banco de dados e design de interfaces.
* **Implementação (Coding):** A codificação de fato, transformando a teoria e os diagramas em sistemas práticos.
* **Testes:** Validação rigorosa de segurança, performance e correção de bugs (Testes unitários, de integração e de estresse).
* **Implantação (Deploy) e Manutenção:** Colocar o sistema no ar (como provisionar os contêineres Docker em um servidor de produção) e monitorar sua saúde contínua.

## 2. Engenharia de Requisitos
Se o requisito for mal levantado, a equipe escreverá um código brilhante para resolver o problema errado.
* **Requisitos Funcionais:** O que o sistema *faz*. (Ex: "O usuário deve conseguir visualizar as rotas de ônibus locais no mapa").
* **Requisitos Não-Funcionais:** Como o sistema *se comporta*, atributos de qualidade e infraestrutura. (Ex: "A consulta da rota deve retornar em menos de 1 segundo" ou "O servidor precisa rodar em ambiente Ubuntu").
* **Regras de Negócio:** Restrições operacionais e lógicas do domínio. (Ex: "Usuários não cadastrados só podem visualizar mapas estáticos").

## 3. Metodologias de Desenvolvimento
A forma como a equipe ou o grupo de estudantes se organiza dita o ritmo e o sucesso do projeto.
* **Cascata (Waterfall - Tradicional):** Processo linear e rígido. Uma fase só começa quando a anterior termina totalmente. Difícil de adaptar a mudanças no meio do caminho.
* **Ágil (Agile):** Desenvolvimento iterativo e incremental. O escopo é adaptável e o software é entregue em pequenos módulos funcionais.
    * **Scrum:** Framework focado em papéis (*Product Owner, Scrum Master, Developers*), cerimônias (*Daily, Planning, Review*) e ciclos curtos de trabalho chamados *Sprints*.
    * **Kanban:** Foco no fluxo visual e contínuo de trabalho. Usa quadros com colunas (To Do, Doing, Done) para gerenciar o que está sendo feito e evitar gargalos.

## 4. Modelagem de Sistemas (UML)
A *Unified Modeling Language* (UML) é o padrão da indústria para desenhar e documentar sistemas antes e durante a codificação.
* **Diagrama de Casos de Uso:** Visão macro. Mostra a interação entre os atores (usuários ou sistemas externos) e as funcionalidades da plataforma.
* **Diagrama de Classes:** O esqueleto estrutural (conecta diretamente com o planejamento de POO). Mostra as classes, seus atributos, métodos e os tipos de relacionamentos (herança, composição, associação).
* **Diagrama de Sequência:** Detalha a ordem temporal das operações, mostrando como os objetos trocam mensagens ao longo do tempo para executar uma função específica.

## 5. Gestão de Configuração e Versionamento
Em projetos reais com múltiplas pessoas mexendo nos mesmos arquivos, centralizar e proteger o código é lei.
* **Controle de Versão:** Uso de Git e plataformas como GitHub para ramificar o trabalho (*branches*), permitindo que desenvolvedores criem funcionalidades de forma isolada sem quebrar a versão principal (*main/master*).
* **Rastreabilidade:** Cada alteração (*commit*) tem um autor e um motivo, facilitando a reversão de código caso um erro crítico vá para produção.