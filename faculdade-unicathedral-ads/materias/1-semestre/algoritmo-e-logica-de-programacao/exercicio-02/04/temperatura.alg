algoritmo "Temperatura"
var
    temperatura: vetor[0..6] de inteiro
    dias: vetor [0..6] de caracter
    i: inteiro
    s, m: real
inicio
    dias[0] <- "Domingo"
    dias[1] <- "Segunda"
    dias[2] <- "Terça"
    dias[3] <- "Quarta"
    dias[4] <- "Quinta"
    dias[5] <- "Sexta"
    dias[6] <- "Sabado"
    s <- 0
    para i de 0 ate 6 faca
        escreva("Temperatura de ", dias[i],": ")
        leia(temperatura[i])
    fimpara
    para i de 0 ate 6 faca
        s <- s + temperatura[i]
    fimpara
    m <- s / 7
    escreval("Temperatura média = ",m)
    escreval("Dias com temperatura acima da média")
    para i de 0 ate 6 faca
        se temperatura[i] > m entao
            escreval(dias[i], " = ", temperatura[i])
        fimse
    fimpara
fimalgoritmo