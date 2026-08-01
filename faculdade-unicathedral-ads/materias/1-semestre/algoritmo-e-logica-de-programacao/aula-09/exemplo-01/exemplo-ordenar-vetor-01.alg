algoritmo "Exemplo_Ordenar_Vetor"
var
    aux,j, i: inteiro
    v: vetor[1..10] de inteiro
inicio
    para j de 1 ate 10 faca 
        para i de 1 ate 10-j faca
            se v[i] > v[i+1] entao 
                aux <- v[i]
                v[i] <- v[i+1]
                v[i+1] <- aux
            fimse 
        fimpara
    fimpara
    para j de 1 ate 10 faca 
        escreva(v[j],",")
    fimpara
fimalgoritmo