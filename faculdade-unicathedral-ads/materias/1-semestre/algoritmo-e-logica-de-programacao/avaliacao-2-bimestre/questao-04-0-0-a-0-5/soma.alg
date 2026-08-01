algoritmo "soma"
var
    reciclados: vetor[1..5] de inteiro 
    i, soma: inteiro 

inicio
    para i de 1 ate 5 faca 
        leia(reciclados[i])
    fimpara

    soma <- 0 

    para i de 1 ate 5 faca 
        se reciclados[i] mod 2 = 0 entao 
            soma <- soma + reciclados[i]
        fimse
    fimpara

    escreva(soma)

fimalgoritmo