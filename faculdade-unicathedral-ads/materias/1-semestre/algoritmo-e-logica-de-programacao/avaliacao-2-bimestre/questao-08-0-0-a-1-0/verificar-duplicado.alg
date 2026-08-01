algoritmo "verificar_duplicado"
var
    codigos: vetor[1..6] de inteiro
    i, j: inteiro
    duplicado: inteiro 

inicio
    duplicado <- 0

    para i de 1 ate 6 faca
        leia(codigos[i])
    fimpara

    para i de 1 ate 5 faca
        para j de i + 1 ate 6 faca
            //...
            se codigos[i] = codigos[j] entao
                duplicado <- duplicado + 1
            fimse
            //...
        fimpara
    fimpara

    se duplicado = 1 entao
        escreva("Existem códigos repetidos.")
    senao
        escreva("Os códigos são únicos.")
    fimse
fimalgoritmo