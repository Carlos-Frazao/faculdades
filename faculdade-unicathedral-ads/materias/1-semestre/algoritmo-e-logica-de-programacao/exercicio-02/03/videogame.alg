algoritmo "Videogame"
var
    partidas: vetor[0..9] de inteiro
    i, melhor, pior, soma: inteiro
    pontuacao, media: real
inicio
    escreval("Informe a pontuação de cada partida jogada!")
    para i de 0 ate 9 faca
        escreva(i+1," ° Pontuação: ")
        leia(partidas[i])
    fimpara
    melhor <- partidas[0]
    para i de 0 ate 9 faca
        se partidas[i] > melhor entao
            melhor <- partidas[i]
        fimse
    fimpara
    pior <- partidas[0]
    para i de 1 ate 9 faca
        se partidas[i] < pior entao
            pior <- partidas[i]
        fimse
    fimpara
    soma <- 0
    para i de 0 ate 9 faca
        soma <- soma + partidas[i]
    fimpara
    media <- soma / 10
    escreva("média = ",media, " / melhor = ",melhor, " / pior = ",pior)
fimalgoritmo