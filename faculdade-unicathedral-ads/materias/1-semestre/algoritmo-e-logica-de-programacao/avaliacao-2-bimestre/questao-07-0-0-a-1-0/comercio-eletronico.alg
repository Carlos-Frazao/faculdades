algoritmo "conta_ocorrencia"
var
    numeros: vetor[1..8] de inteiro
    i, contador: inteiro
    valor_procurado: inteiro 
inicio
    para i de 1 ate 10 faca 
    leia numeros[i]
    fimpara

    escreva "Digite o valor a ser procurado: "
    leia valor_procurado 
    
    contador <- 0
    //...
    para i de  1 ate 10 faca 
        se numeros[i] = valor_procurado entao
            contador <- contador + 1
        fimse
    fimpara
    //...
    escreva("Número de ocorrências ",contador)
fimalgoritmo