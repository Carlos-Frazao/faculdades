algoritmo "Salário"
var
    salario, parcela, p_salario: real
inicio
    escreva("Informe o valor do seu salário: ")
    leia(salario)
    escreva("Informe o valor da parcela do empréstimo: ")
    leia(parcela)
    // salario * (20/100) Poderia ser assim.
    p_salario <- salario * 0.2
    se parcela > p_salario entao
        escreva("Negado")
    senao
        escreva("Liberado")
    fimse
fimalgoritmo