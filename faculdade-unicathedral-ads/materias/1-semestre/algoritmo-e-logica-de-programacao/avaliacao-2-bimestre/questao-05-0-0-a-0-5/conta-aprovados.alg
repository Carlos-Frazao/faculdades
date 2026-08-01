algoritmo "conta_aprovados"
var
    notas: vetor[1..6] de real
    i, cont_aprovados: inteiro
inicio
    cont_aprovados <- 0 
    
    para i de 1 ate 6 faca 
        leia(notas[i])
        //...
            se notas[i] >= 7 entao 
                cont_aprovados <- cont_aprovados + 1
            fimse
        //...
    fimpara

    escreva("Aprovados: ", cont_aprovados)
fimalgoritmo