algoritmo "Pares"
var
    n, cont: inteiro
inicio
    escreva("Informe um valor onde será exibido todos os número Pares: ")
    leia(n)
    // Contando de 1 até o n.
    para cont de 1 ate n faca
        // Verificando se o número é Par. E exibindo todos os pares menor igual a ele (n).
        se cont mod 2 = 0 entao
            // Exibindo todos os números pares.
            escreval("Todos os números pares: ", cont)
        fimse
    fimpara
fimalgoritmo