algoritmo "Papelaria"
var
    nome: caractere
    compra: real
    clientes: inteiro
    total_compra: real
inicio
    total_compra <- 0 
    clientes <- 0

    enquanto nome <> "fim" faca
        // Entrada de dados do cliente.
        escreva("Informe o nome do cliente: ")
        leia(nome)
        // Se o nome for "fim", encerra o loop.
        se nome = "fim" entao
            // Saída de dados.
            escreval("O número total de cliente: ",clientes)
            escreval("O valor total acumulado das compras: R$",total_compra)
        senao
            escreva("Informe o valor da compra: R$")
            leia(compra)
            // Processamento de dados.
            total_compra <- total_compra + compra
            clientes <- clientes + 1
        fimse
    fimenquanto
fimalgoritmo