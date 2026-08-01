algoritmo "Saque"
var
    n: inteiro 
    // variável para armazenar o valor a ser sacado.
    moeda1, nota2, nota5, nota10, nota20, nota50, nota100: inteiro 
    // variáveis para armazenar a quantidade de notas.
inicio
    escreva("Digite o valor a ser sacado: ")
    leia(n)
    // Aqui estou colocando uma condição entre 1 e 100.
    moeda1 <- 0
    nota2 <- 0
    nota5 <- 0  
    nota10 <- 0
    nota50 <- 0
    nota100 <- 0
    // Código com o mod, e indentado, não entendi essa de mod
    se (n >= 1) e (n <= 100) entao 
        se (n >= 100) entao
            nota100 <- n / 100 // divisão inteira
            n <- n mod 100 // resto da divisão
                escreval("Notas de 100: ", nota100)
                escreval("Notas de 100: ", n)
        fimse
        se (n >= 50) entao 
                nota50 <- n / 50
                n <- n mod 50
                escreval("Notas de 50: ", nota50)
        fimse
        se (n >= 20) entao 
            nota20 <- n / 20
            n <- n mod 20
                escreval("Notas de 20: ", nota20)
        fimse
        se (n >= 10) entao 
            nota10 <- n / 10
            n <- n mod 10
                escreval("Notas de 10: ", nota10)
        fimse
        se (n >= 5) entao 
            nota5 <- n / 5
            n <- n mod 5
                escreval("Notas de 5: ", nota5)
        fimse
        se (n >= 2) entao 
            nota2 <- n / 2
            n <- n mod 2
                escreval("Notas de 2: ", nota2)
        fimse
        se n >= 1 entao 
            moeda1 <- n / 1
            escreva("Notas de 1:", moeda1)
        fimse
    senao
        escreva("Esse valor está fora do valor permitido entre 1 e 100")
    fimse
fimalgoritmo