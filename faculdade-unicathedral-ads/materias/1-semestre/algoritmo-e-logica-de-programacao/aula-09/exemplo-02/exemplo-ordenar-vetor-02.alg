algoritmo "Exemplo_Ordenar_Vetor"
var
    v: vetor[1..5] de inteiro
    j, i, aux: inteiro
inicio
    para j de 1 ate 5 faca 
        escreva("Informe o ",j,"º valor: ")
        leia(v[j])
    fimpara

    para j de 1 ate 5 faca 
        para i de 1 ate 5-j faca
            se v[i] > v[i+1] entao 
                aux <- v[i]
                v[i] <- v[i+1]
                v[i+1] <- aux
            fimse 
        fimpara
    fimpara

    para j de 1 ate 5 faca 
        escreva(v[j],"-")
    fimpara
fimalgoritmo