algoritmo "ordenar_notas"
var
    notas: vetor[1..50] de real
    i, j: inteiro
    aux: real

inicio
    para i de 1 ate 50 faca
        leia(notas[i])
    fimpara
    
    //..
    para i de 1 ate 49 faca
        para j de i + 1 ate 50 faca
            se notas[i] > notas[j] entao
                aux <- notas[i]
                notas[i] <- notas[j]
                notas[j] <- aux
            fimse
        fimpara
    //..

    escreva("Notas em ordem crescente: ")
    para i de 1 ate 50 faca
        escreva(notas[i]:0:2, " ")      
    fimpara
fimalgoritmo