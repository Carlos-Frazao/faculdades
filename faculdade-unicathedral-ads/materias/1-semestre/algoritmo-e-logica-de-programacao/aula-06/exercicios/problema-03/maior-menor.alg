algoritmo "Maior_Menor"
var
    n, maior, menor: inteiro
inicio
    n <- 1 
    maior <- 0
    menor <- 10000000

    enquanto n > 0 faca
        escreva("Informe um número inteiro: ")
        leia(n)
        se (n < menor) e (n <> 0) entao 
            menor <- n 
        fimse
        se n > maior entao 
            maior <- n
        fimse
        // escreva("Informe um número inteiro: ")
        // leia(n)
    fimenquanto 
    escreva("Menor = ",menor, " Maior = ", maior)
fimalgoritmo