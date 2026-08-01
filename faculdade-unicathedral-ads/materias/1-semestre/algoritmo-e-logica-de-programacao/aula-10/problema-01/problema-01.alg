algoritmo "Média_vetor"
var
    altura: vetor[1..20] de real 
    i: inteiro 
    soma, media, abaixo: real 
inicio
    soma <- 0
    media <- 0
    abaixo <- 0

    para i de 1 ate 20 faca 
        escreva("Informe a altura da ",i, "º pessoa: ")
        leia(altura[i])
    fimpara

    para i de 1 ate 20 faca 
        soma <- altura[i] + soma
    fimpara

    media <- soma/20
    
    para i de 1 ate 20 faca 
        se altura[i] < media entao 
            abaixo <- abaixo + 1 
        fimse
    fimpara
    escreva("A altura média é ",media, ", Temos ",abaixo, "abaixo da média")
fimalgoritmo