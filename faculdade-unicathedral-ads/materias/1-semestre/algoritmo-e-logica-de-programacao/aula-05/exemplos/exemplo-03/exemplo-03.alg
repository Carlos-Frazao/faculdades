algoritmo "Exemplo_03"
var
    salario, valor_disponivel: real
    funcionario: inteiro
inicio
    valor_disponivel <- 0
    funcionario <- 0

    enquanto valor_disponivel < 50000 faca
        escreva("Informe o valor do salário: ")
        leia(salario)
        valor_disponivel <- valor_disponivel + salario
        funcionario <- funcionario + 1
    fimenquanto
        se (valor_disponivel > 50000) entao 
            valor_disponivel <- valor_disponivel - salario
            funcionario <- funcionario - 1
        fimse
    escreval("Número de funcionários ", funcionario)
    escreva("Total a ser pago ", valor_disponivel)
fimalgoritmo