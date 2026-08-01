algoritmo "Bissexto"
var
    ano: inteiro
inicio
    escreva("Informe um Ano, onde será mostrado se ele é BISSEXTO: ")
    leia(ano)

    se (ano mod 4) = 0 entao 
        escreva("É BISSEXTO.")
    senao
        se (ano mod 400) = 0 e (ano mod 100) = 0 entao 
            escreva("É BISSEXTO.")
        senao
            escreva("Não é BISSEXTO.")
        fimse
    fimse
fimalgoritmo
// Josiel