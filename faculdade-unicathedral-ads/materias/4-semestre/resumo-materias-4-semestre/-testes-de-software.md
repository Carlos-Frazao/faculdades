# 🐛 Testes de Software

No mundo do desenvolvimento, escrever o código é apenas metade do caminho. A disciplina de Testes de Software garante que o que foi construído realmente funciona, lida bem com erros e atende às expectativas do cliente antes de ir para o ambiente de produção.

## 1. Níveis de Teste
Os testes são estruturados em camadas, desde a menor parte do código até a visão geral do sistema (conhecido como Pirâmide de Testes).

* **Testes Unitários:** A base da pirâmide. Foca em testar a menor unidade de código possível de forma isolada, como uma única função ou método de uma classe. Geralmente são muito rápidos e escritos pelos próprios desenvolvedores. (Ferramentas comuns: JUnit, PyTest, PHPUnit, Jest).
* **Testes de Integração:** Verifica se diferentes módulos, classes, serviços ou bancos de dados funcionam corretamente quando conectados. Exemplo: testar se a sua aplicação consegue se conectar e inserir um registro no banco relacional.
* **Testes de Sistema (End-to-End / E2E):** Avalia o software completo em um ambiente que simula a produção. Testa o fluxo inteiro, como um usuário abrindo a interface, preenchendo um formulário e recebendo uma resposta de sucesso.
* **Testes de Aceitação:** Realizados geralmente com o cliente ou usuários finais (como testes Beta) para validar se o sistema realmente resolve o problema de negócio que foi proposto.

## 2. Abordagens de Teste
Essas abordagens definem como o testador (ou o script automatizado) enxerga o sistema.

* **Caixa Branca (White Box):** O testador conhece a estrutura interna e o código-fonte. O objetivo é testar a lógica dos algoritmos, os caminhos condicionais (garantir que todos os `if` e `else` sejam ativados) e o fluxo de dados interno.
* **Caixa Preta (Black Box):** O testador foca apenas nas entradas e saídas, ignorando como o código foi escrito. Ele interage com a interface ou API, insere um dado (input) e verifica se o resultado (output) é o esperado.
* **Caixa Cinza (Grey Box):** Uma mistura dos dois. O testador tem um conhecimento parcial da estrutura interna (ex: conhece a modelagem do banco de dados ou a documentação da API), e usa isso para criar cenários de teste mais inteligentes pela interface.

## 3. Tipos de Testes Não-Funcionais
Além de checar se o sistema faz o que deve ser feito (testes funcionais), é preciso validar a infraestrutura e a confiabilidade do sistema sob diferentes cenários.

* **Testes de Carga:** Avalia como o sistema se comporta sob o tráfego máximo esperado (ex: 1.000 usuários acessando simultaneamente).
* **Testes de Estresse:** Força o sistema *além* do seu limite operacional normal para descobrir qual é o ponto de quebra e observar como ele falha (se ele trava, se corrompe dados ou se cai de forma segura).
* **Testes de Segurança (Pentest):** Busca vulnerabilidades ativamente, testando injeções de SQL, quebra de autenticação e falhas na rede.

## 4. TDD (Test-Driven Development)
O Desenvolvimento Orientado a Testes é uma prática ágil onde você inverte o fluxo tradicional: você escreve o teste *antes* de escrever o código real. Segue um ciclo de 3 passos:
1. **Red (Vermelho):** Escreva um teste automatizado para uma nova funcionalidade. Ele vai falhar, pois o código ainda não existe.
2. **Green (Verde):** Escreva o código mais simples e rápido possível apenas para fazer o teste passar.
3. **Refactor (Refatorar):** Melhore e limpe o código escrito, com a segurança de que o teste continuará verde para garantir que você não quebrou nada.

## 5. Automação e CI/CD
Rodar testes manualmente toda vez que o código muda é inviável e sujeito a erro humano.
* **Integração Contínua (CI):** É a prática de usar servidores de automação (como GitHub Actions ou GitLab CI) para executar toda a sua bateria de testes automaticamente sempre que alguém fizer um *push* (enviar código) para o repositório. Se qualquer teste quebrar, o novo código é bloqueado e não entra na versão principal.