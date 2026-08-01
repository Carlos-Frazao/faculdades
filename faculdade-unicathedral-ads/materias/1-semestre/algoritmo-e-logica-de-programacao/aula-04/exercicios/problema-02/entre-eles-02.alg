algoritmo "Entre_Eles_02"
var
    n1, n2, cont: inteiro
inicio
    // Esse algoritmo irá solicitar dois valores e exibir todos os números entre eles.
    // está contando de 1 até 2, ou seja, irá solicitar 2 valores.
    para cont de 1 ate 2 faca
        escreva("Informe o ", cont,"° valor: ")
        leia(n1)
        escreva("Informe o ", cont,"° valor: ")
        leia(n2)
        // Irá contar de n1 + 1 até n2 - 1, ou seja irá exibir todos os números entre n1 e n2.
        para cont de n1 + 1 ate n2 - 1 faca
            escreva(cont)
        fimpara
    fimpara
fimalgoritmo