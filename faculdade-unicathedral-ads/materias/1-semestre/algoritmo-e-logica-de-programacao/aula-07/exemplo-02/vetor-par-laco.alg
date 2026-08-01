algoritmo "Vetor_Par"
var
    par : vetor[0..4] de inteiro
    indice : inteiro
inicio
    para indice de 0 ate 4 faca
        par[indice] <- 2 * indice
    fimpara
    para indice de 0 ate 4 faca 
        escreva(par[indice])
    fimpara
fimalgoritmo