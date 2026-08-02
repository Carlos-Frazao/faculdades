# 🧩 Programação Orientada a Objetos (POO)

A Programação Orientada a Objetos é um paradigma de desenvolvimento focado em aproximar a estruturação do código ao mundo real. Em vez de pensar em "funções soltas" e "variáveis globais" (paradigma estrutural), pensamos em **entidades (objetos)** que possuem **características (atributos)** e **comportamentos (métodos)**.

## 1. Classes vs. Objetos
A confusão clássica, resolvida de forma simples:
* **Classe:** É o molde, a planta baixa. Define as regras, quais dados existirão e o que poderão fazer. (Ex: Classe `Carro`).
* **Objeto:** É a instância, a materialização desse molde na memória. (Ex: Um objeto `meuCorsa` ou `hb20DaFirma`, ambos criados a partir da classe `Carro`).

## 2. Os 4 Pilares da POO
Se você dominar esses quatro conceitos, você domina a base da disciplina.

### I. Encapsulamento
É a arte de esconder os detalhes internos de funcionamento de uma classe e proteger seus dados. Você não deixa as variáveis "públicas" para qualquer um alterar.
* **Como funciona:** Usa-se modificadores de acesso (`private`, `protected`, `public`).
* **Prática:** Se você tem um atributo `saldo` numa classe `ContaBancaria`, ele deve ser `private`. A única forma de alterá-lo é através de métodos controlados como `depositar()` ou `sacar()`.

### II. Herança
Permite criar novas classes baseadas em classes já existentes, reaproveitando código.
* **Como funciona:** Uma classe "Filha" herda os atributos e métodos da classe "Mãe".
* **Prática:** Uma classe `Usuario` pode ter login e senha. As classes `Administrador` e `Cliente` podem herdar de `Usuario`, ganhando essas características sem precisar reescrever o código, e adicionando suas próprias regras específicas.

### III. Polimorfismo
Do grego "várias formas". É a capacidade de um mesmo método se comportar de maneira diferente dependendo do objeto que o chama.
* **Como funciona:** Pode ocorrer por **Sobrescrita** (Overriding - a classe filha muda o funcionamento de um método da classe mãe) ou **Sobrecarga** (Overloading - métodos com o mesmo nome, mas recebendo parâmetros diferentes).
* **Prática:** Um método `calcularImposto()` pode ser chamado para um objeto `PessoaFisica` ou `PessoaJuridica`, e cada um fará o cálculo da sua própria maneira.

### IV. Abstração
Consiste em focar apenas nos detalhes essenciais de um objeto para o sistema, ignorando o que não importa.
* **Como funciona:** Traduzir a complexidade do mundo real para o código apenas com o que é necessário.
* **Prática:** Em um sistema de biblioteca, a classe `Livro` precisa de `titulo`, `autor` e `isbn`. O número de páginas ou o peso físico do livro podem ser abstraídos (ignorados) se não forem relevantes para o negócio.

## 3. Interfaces e Classes Abstratas
Quando o sistema cresce, precisamos de regras mais estritas de arquitetura.

* **Classe Abstrata:** É uma classe que não pode ser instanciada (você não pode criar um objeto direto dela), serve apenas como modelo base para outras classes herdarem. Pode ter métodos com código pronto e métodos vazios.
* **Interface:** É um "contrato". Ela define **o que** deve ser feito, mas não **como**. Se uma classe "assina" uma interface, ela é obrigada a implementar todos os métodos descritos nela. (Muitas linguagens não permitem herança múltipla de classes, mas permitem implementar múltiplas interfaces).

## 4. Bônus de Arquitetura: Princípios SOLID
No 4º semestre, é comum os professores começarem a cobrar boas práticas de POO. O SOLID é o padrão ouro:
* **S**ingle Responsibility (Responsabilidade Única): Uma classe deve ter apenas um motivo para mudar.
* **O**pen/Closed (Aberto/Fechado): Classes devem estar abertas para extensão, mas fechadas para modificação.
* **L**iskov Substitution (Substituição de Liskov): Classes filhas devem poder substituir suas classes mães sem quebrar o sistema.
* **I**nterface Segregation (Segregação de Interfaces): Melhor ter várias interfaces específicas do que uma interface "faz-tudo".
* **D**ependency Inversion (Inversão de Dependência): Dependa de abstrações (interfaces), não de implementações concretas (classes).