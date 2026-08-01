algoritmo "Taxa_02"
var
    valor, taxa, cont: real
    mes: inteiro
inicio
    escreva("Informe o valor a ser aplicado: ")
    leia(valor)
    escreva("Informe o valor da taxa de juros: ")
    leia(taxa)

    mes <- 1
    enquanto mes <= 12 faca
        valor <- valor + (valor * taxa) / 100
        escreval("Mês ",mes, " Valor igual á ",valor:2:2)
        mes <- mes + 1
    fimenquanto
fimalgoritmo