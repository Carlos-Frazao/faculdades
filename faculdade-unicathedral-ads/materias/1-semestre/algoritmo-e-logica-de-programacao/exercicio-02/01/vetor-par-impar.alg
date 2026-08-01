algoritmo "Vetor_Par_Impar"
var
    n: vetor[0..9] de inteiro
    i, par, impar: inteiro
inicio
    escreval("Informe o valor de 10 número: ")
    para i de 0 ate 9 faca
        escreva("Informe o valor do °", i+1, ":")
        leia(n[i])
    fimpara
    par <- 0
    impar <- 0
    para i de 0 ate 9 faca 
        se n[i] mod 2 = 0 entao 
            par <- par + 1
        senao
            impar <- impar + 1
        fimse
    fimpara
    escreval("Pares = ",par)
    escreva("Ímpares = ",impar)
fimalgoritmo