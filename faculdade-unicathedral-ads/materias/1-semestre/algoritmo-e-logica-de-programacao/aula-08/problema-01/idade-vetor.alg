algoritmo "Idade_Vetor"
var
    idade: vetor[1..10] de inteiro 
    // i é o endereço do vetor
    i, s_menor: inteiro
inicio
    para i de 1 ate 10 faca 
        escreva("Informe a idade da ",i, " pessoa: ")
        leia(idade[i])
    fimpara 
    s_menor <- 0
    para i de 1 ate 10 faca 
        se idade[i] < 18:
            s_menor <- s_menor + 1
        fimse 
    fimpara 
    escreva("Total de menores informado, ",s_menor)
fimalgoritmo