algoritmo "Crescente"
var
   a, b, c, aux: real
inicio
    escreva("Digite o primeiro valor: ")
    leia(a)
    escreva("Digite o segundo valor: ")
    leia(b)
    escreva("Digite o terceiro valor: ")
    leia(c)
    se (a > b) entao
        aux <- a 
        a <- b
        b <- aux
    fimse

    se (b > c) entao
        aux <- b
        b < c 
        c <- aux
    fimse

    se (a > b) entao
        aux <- a 
        a <- b 
        b <- aux
    fimse
    escreva(A, ":", b, ":", c)
fimalgoritmo