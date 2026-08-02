# 🏃‍♂️ Desenvolvimento de Software com Metodologias Ágeis

As metodologias ágeis surgiram para resolver o maior problema do desenvolvimento de software tradicional (Modelo Cascata): a inflexibilidade. No mundo real, os requisitos do cliente mudam o tempo todo. O Ágil foca em entregas contínuas, adaptação rápida a mudanças e colaboração constante entre a equipe e o cliente.

## 1. O Manifesto Ágil
Em 2001, líderes da indústria de software se reuniram e criaram o Manifesto Ágil, baseado em 4 valores fundamentais:
1. **Indivíduos e interações** mais que processos e ferramentas.
2. **Software em funcionamento** mais que documentação abrangente.
3. **Colaboração com o cliente** mais que negociação de contratos.
4. **Responder a mudanças** mais que seguir um plano rígido.

*(Nota: Os itens à direita ainda têm valor, mas os da esquerda são a prioridade absoluta).*

## 2. O Framework Scrum
É a estrutura ágil mais adotada no mundo. Ele divide o trabalho em ciclos curtos chamados **Sprints** (geralmente de 1 a 4 semanas).

### Papéis (Roles)
* **Product Owner (PO):** O representante do cliente dentro da equipe. É quem define *o que* precisa ser construído e prioriza a lista de tarefas para maximizar o valor do produto.
* **Scrum Master:** O facilitador. Ele protege a equipe de distrações externas e garante que as regras do Scrum sejam seguidas, removendo obstáculos do dia a dia.
* **Developers (Equipe de Desenvolvimento):** Os profissionais que colocam a mão na massa. São auto-organizados e decidem *como* o trabalho será feito.

### Eventos (Cerimônias)
* **Sprint Planning (Planejamento):** Reunião no início da Sprint para decidir o que será feito e como será entregue.
* **Daily Scrum (Reunião Diária):** Reunião de 15 minutos em pé (stand-up) para a equipe sincronizar as atividades (O que fiz ontem? O que farei hoje? Tem algum impedimento?).
* **Sprint Review (Revisão):** Ao final da Sprint, a equipe mostra o software funcionando para o PO e *stakeholders* para coletar feedback.
* **Sprint Retrospective (Retrospectiva):** Reunião interna da equipe para analisar o processo da última Sprint: o que foi bom, o que foi ruim e o que pode melhorar para a próxima.

### Artefatos
* **Product Backlog:** A lista completa de tudo que o sistema precisa ter, gerenciada pelo PO.
* **Sprint Backlog:** A lista de tarefas selecionadas do Product Backlog para serem feitas apenas na Sprint atual.
* **Incremento:** A versão funcional e testada do software gerada ao final da Sprint, pronta para ser usada.

## 3. Kanban
Outro framework ágil muito popular, focado no fluxo contínuo de entrega, sem necessariamente ter Sprints de tempo fixo.
* Utiliza um **Quadro Visual** com colunas que representam o status do trabalho (Ex: *A Fazer*, *Em Progresso*, *Em Teste*, *Concluído*).
* A regra de ouro do Kanban é o **WIP Limit (Work in Progress Limit)**: limitar a quantidade de tarefas que podem estar "Em Progresso" ao mesmo tempo. Isso evita gargalos e força a equipe a terminar o que começou antes de puxar coisas novas.

## 4. Extreme Programming (XP)
Enquanto Scrum e Kanban focam na gestão, o XP foca nas práticas de engenharia de software para garantir qualidade máxima no código ágil:
* **Pair Programming (Programação em Par):** Dois desenvolvedores dividindo o mesmo computador, um digitando e o outro revisando e pensando na arquitetura simultaneamente.
* **TDD (Test-Driven Development):** Como visto na disciplina de Testes, criar os testes automatizados antes do código de produção.
* **Integração Contínua (CI):** O código deve ser testado e integrado ao repositório principal várias vezes ao dia, evitando o "inferno da integração" no final do projeto.

## 5. Histórias de Usuário (User Stories) e Estimativas
No Ágil, não usamos documentos de requisitos de 50 páginas. Usamos Histórias de Usuário, que são descrições curtas focadas no valor para quem vai usar o sistema.
* **Formato padrão:** "Como um [Perfil], eu quero [Funcionalidade] para [Benefício]".
* **Estimativas Ágeis (Planning Poker):** Em vez de estimar tarefas em horas exatas (o que quase sempre dá errado), a equipe usa "Story Points", que medem o *esforço* e a *complexidade* de uma tarefa de forma relativa.