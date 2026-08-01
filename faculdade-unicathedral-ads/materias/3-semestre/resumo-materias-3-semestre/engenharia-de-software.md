# Resumo de Estudos: Engenharia de Software 
**Curso:** ADS / (3º Semestre)

---

## 1. O que é Engenharia de Software?
Diferente de apenas "programar", a Engenharia de Software foca no processo completo de criação. Programar é o ato de escrever código; Engenharia é garantir que esse código seja sustentável, seguro e útil.  
A Engenharia de Software é uma disciplina que aplica princípios, métodos e técnicas para desenvolver software de forma **profissional e sistemática**. Ela vai muito além da escrita de código, englobando todo o ecossistema necessário para um produto de qualidade.

* **Software não é só código:** Inclui manuais, documentação, modelos de banco de dados e requisitos.
* **Objetivo:** Produzir software de alta qualidade, no prazo e com custo controlado.

## 2. Ciclo de Vida do Software (SDLC)
Para o software não virar uma "gambiarra", ele segue etapas lógicas:

1. **Análise de Requisitos:** Compreensão e documentação das expectativas do cliente. É a etapa de "conversar com o cliente" para entender o que ele deseja.
2. **Design (Projeto/Modelagem):** Definição da estrutura, interfaces, arquitetura e algoritmos. Equivale ao projeto arquitetônico, elétrico e hidráulico na engenharia civil.
3. **Implementação:** O momento da construção real, escrevendo o código-fonte de acordo com o design combinado.
4. **Testagem (Validação e Verificação):** Identificação e correção de defeitos para garantir que o software funcione conforme o esperado.
5. **Manutenção e Evolução:** Atividades de correção, atualização e melhoria após a entrega do software.


---

## 3. Modelos de Processo (Metodologias)

### Cascata (Waterfall)
- **Como funciona:** Linear e rígido. Uma fase só começa quando a anterior termina.
- **Vantagem:** Fácil de gerenciar em projetos pequenos e fixos.
- **Desvantagem:** Se houver erro no início, o custo de correção no final é altíssimo.

### Metodologias Ágeis (Agile)
- **Como funciona:** Desenvolvimento em ciclos (Sprints). Entregas rápidas e constantes.
- **Foco:** Adaptação a mudanças e feedback do cliente.
- **Exemplos:** Scrum, XP (Extreme Programming), Kanban.

---

## 4. Modelagem com UML (Unified Modeling Language)
A UML é a principal linguagem de modelagem usada para criar os projetos (designs) de software.

* **UML na Engenharia:** É usada principalmente para a fase de **análise e projeto**, permitindo visualizar o sistema antes da codificação.
* **Conexão com POO:** Você utiliza os conceitos de Programação Orientada a Objetos (Classes, Herança, etc.) para criar esses modelos visuais.

---

## 5. Engenharia de Requisitos
A base de tudo. Se o requisito estiver errado, o código será inútil.

* **Requisitos Funcionais (RF):** Descrevem as funções do sistema.
    * *Ex: "O sistema deve realizar o login do usuário".*
* **Requisitos Não Funcionais (RNF):** Descrevem qualidades e restrições.
    * *Ex: "O sistema deve rodar no Debian/Ubuntu" ou "O tempo de resposta deve ser < 1s".*

---

## 5. Importância e Benefícios
A aplicação da engenharia é fundamental para:
* **Redução de Riscos:** Diminui a ocorrência de falhas graves que trazem prejuízos financeiros ou de reputação.
* **Maximização da Produtividade:** Auxilia na otimização de recursos e no cumprimento rigoroso de prazos.
* **Qualidade Garantida:** Assegura que o software realmente atende às necessidades do cliente

---

# POO (Programação Orientada a Objetos)

## 1. O que é POO?
É um paradigma de programação que utiliza a representação de elementos do mundo real como **objetos** no sistema. Um objeto é uma aglutinação de:
- **Estados (Atributos):** As propriedades ou características (ex: cor, tamanho, modelo).
- **Comportamentos (Métodos):** As funções ou ações que o objeto pode realizar (ex: escrever, ligar, parar).  

Engenharia de Software usa para modelar sistemas:
* **Classe:** O "molde" ou a "planta" (Ex: A classe `Celular`).
* **Objeto:** A Instância: O seu celular físico que está na sua mão ou na mesa agora. É um aparelho específico com um número de série único.
* **Atributos:** Características (Ex: `marca`, `armazenamento`, `estaLigado`).
* **Métodos:** Ações que o objeto faz (Ex: `tirarFoto()`, `enviarMensagem()`, `carregarBateria()).`

---

## 2. Os 4 Pilares da POO

### Herança
É a capacidade de um objeto ser criado com base em outro, herdando seus atributos e métodos.
- **Classe Pai (Superclasse):** Fornece as características base.
- **Classe Filho (Subclasse):** Estende a classe pai e pode adicionar ou modificar funcionalidades.
- **Vantagem:** Extrema reutilização de código.

### Polimorfismo
Significa "muitas formas". É a capacidade de um objeto se passar por outro em certas condições ou de um método ser **reescrito** pela classe filha.
- **Reescrita (Override):** A classe filha altera o comportamento de um método herdado para que ele funcione de forma diferente da classe pai.

### Encapsulamento
É a capacidade de esconder os detalhes internos de como um objeto funciona, expondo apenas o que é necessário.
- **Caixa Preta:** Protege os dados contra acessos indevidos e garante a segurança da aplicação.
- **Modificadores de Acesso:** 
    - `Public`: Acessível por qualquer parte do código.
    - `Private`: Só pode ser alterado ou lido dentro da própria classe.

### Abstração
Consiste em representar um objeto de forma simplificada, focando apenas no que é essencial para o sistema.
- **Classes Abstratas:** Servem como um "template" ou molde para outras classes, mas não podem ser instanciadas diretamente em objetos.

---

## 4. Linguagens que Suportam POO
- C++, Java, C#, Python, PHP, JavaScript, Ruby, Swift, entre outras.  

---