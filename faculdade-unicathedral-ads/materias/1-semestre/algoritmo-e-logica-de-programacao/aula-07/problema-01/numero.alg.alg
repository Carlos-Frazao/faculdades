algoritmo "Número"

var
    // 10 vetor
    numero : vetor[0..11] de inteiro
    i :inteiro
inicio
    para i de 0 ate 9 faca 
        escreva("Digite 10 número ", i+1,"°:")
        leia(numero[i])
    fimpara 
    para i de 9 ate 0 passo -1 faca
        escreva(numero[i],",")
    fimpara
fimalgoritmo