algoritmo "analisa_poluicao"
var
    poluicao: vetor[1..10] de real
    i, dias_acima: inteiro

inicio
    dias_acima <- 0

    para i de 1 ate 10 faca
        escreva("Poluição do dia ", i, ": ")
        leia(poluicao[i])
        se poluicao[i] > 50 entao
            dias_acima <- dias_acima + 1
        fimse
    fimpara

    escreva("Acima do aceitável: ", dias_acima)
fimalgoritmo