algoritmo "Potência"
var
    base, expo, resultado, cont: inteiro
inicio
    escreva("Informe o valor da Base: ")
    leia(base)
    escreva("Informe o valor do Expoente: ")
    leia(expo)

    resultado <- 1
    cont <- 0

    enquanto cont < expo faca
        resultado <- resultado * base
        cont <- cont + 1
    fimenquanto
escreva(base," Elevado a ",expo, " = ", resultado)
fimalgoritmo
