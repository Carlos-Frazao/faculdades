algoritmo "Vetor_Soma"
var
    numero: vetor [0..4] de inteiro
    i , soma: inteiro
inicio
    para i de 0 ate 4 faca
        escreva("Digite o ", i+1, "° número: ")
        leia(numero[i])
    fimpara
    soma <- 0
    para i de 0 ate 4 faca
        soma <- soma + numero[i]
    fimpara
    escreval("A soma dos números é: ", soma)
fimalgoritmo