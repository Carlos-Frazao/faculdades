algoritmo "gas"
var
    // Declaração de variáveis.
    nome: caractere
    qtidade_gas: inteiro
    valor_total: real

inicio
    // Entrada de dados.
    escreva("Informe o nome do cliente: ")
    leia(nome)
    escreva("Informe a quantidade de botijões de gás: ")
    leia(qtidade_gas)

    // Processamento de dados.
    valor_total <- (qtidade_gas * 80) + 5

    // Saída de dados.
    escreva("Cliente: ", nome, "! Total a ser pago: ",valor_total, "R$")
fimalgoritmo