algoritmo "média"
var
    n1, n2, n3: real
    media: real
inicio
    escreva("Informe a nota de LEITURA: ")
    leia(n1)
    escreva("Informe a nota de ESCRITA: ")
    leia(n2)
    escreva("Informe a nota de CONVERSÃO: ")
    leia(n3)
    //media <- (n1 + n2 + n3) / 3
    se n1 >= 7.0 e n2 >= 7.0 e n3 >= 7.0 entao 
        media <- (n1 + n2 + n3) / 3
        escreva("A média do aluno é: ", media, " - Aluno aprovado." )
    senao
        media <- (n1 + n2 + n3) / 3
        escreva("A média do aluno é: ", media, " - Aluno reprovado.")
    fimse
fimalgoritmo