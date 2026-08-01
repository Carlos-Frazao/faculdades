algoritmo "Soma_vetores"
var
    vetor_A, vetor_B, vetor_C: vetor[0..4] de inteiro
    i: inteiro
inicio
    escreval("Informe o valor do vetor A e B, de 5 posições: ")
    para i de 0 ate 4 faca
        escreva("Informe o valor do vetor A °",i+1, " posição: ")
        leia(vetor_A[i])
    fimpara
    para i de 0 ate 4 faca
        escreva("Informe o valor do vetor B °",i+1, " posição: ")
        leia(vetor_B[i])
    fimpara 
    para i de 0 ate 4 faca
    vetor_C[i] <- vetor_A[i] + vetor_B[i]
    fimpara
    para i de 0 ate 4 faca
        escreva(vetor_C[i],",")
    fimpara
fimalgoritmo