algoritmo "maior_consumo"
var
    consumo: vetor[1..6] de real
    i: inteiro 
    maior: real
inicio

    escreval("Entre com os consumos: ")

    para i de 1 ate 6 faca
        leia(consumo[i])
    fimpara

    maior <- consumo[1]
    
    para i de 2 ate 6 faca
        se consumo[i] > maior entao
            maior <- consumo[i]
        fimse
    fimpara

    escreval("O maior consumo é: ", maior)

fimalgoritmo