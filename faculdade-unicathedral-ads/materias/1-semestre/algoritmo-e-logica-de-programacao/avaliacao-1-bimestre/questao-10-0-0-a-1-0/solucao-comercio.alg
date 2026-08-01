algoritmo "Comercio"
var
    vendido, cont: inteiro
    preco_original, porcentagem, preco_final, desconto, somadesc, Total_vendas, total_vendas_descontos: real
inicio
    cont <- 1
    escreva("Informe a quantidade de produtos vendidos: ")
    leia(vendido)
    enquanto vendido >= cont faca 
        escreva("Informe o preço original do produto ",cont, "° : R$")
        leia(preco_original)
        escreva("Porcentagem de desconto a  ser aplicado: ")
        leia(porcentagem)
        // Total de Vendas.
        total_vendas <- total_vendas + preco_original
        // Total de vendas com desconto.
        preco_final <- preco_original - (preco_original * porcentagem / 100)
        // Fazendo a somatoria de todos os descontos.
        somadesc <- (preco_original * porcentagem / 100) + somadesc
        // Total de vendas com todos os descontos.
        total_vendas_descontos <- preco_final + total_vendas_descontos
        cont <- cont + 1
    fimenquanto
    escreval("=======================================================")
    escreval(cont - 1, "° Produtos vendidos.")
    escreval("Total de vendas sem desconto: R$", total_vendas)
    escreval("Todos os descontos aplicados: R$", somadesc)
    escreval("Total das vendas com todos os descontos aplicados: R$", total_vendas_descontos)
fimalgoritmo