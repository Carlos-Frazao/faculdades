algoritmo "Diferença"
var
    n1, n2: inteiro
inicio
    escreva("Digite um valor: ")
    leia(n1)
    escreva("Digite outro valor: ")
    leia(n2)
    se n1 > n2 entao 
        escreva("A diferença de ",n1, " e ",n2, " é ",n1 - n2)
    senao
        escreva("A diferença de ",n1, " e ",n2, " é ",n2 - n1)
    fimse
fimalgoritmo