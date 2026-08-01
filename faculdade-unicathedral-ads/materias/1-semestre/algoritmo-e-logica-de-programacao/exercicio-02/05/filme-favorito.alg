algoritmo "Filme_Favorito"
var
    filmes: vetor[1..5] de caractere
    votos: vetor[1..20] de inteiro
    i, maior: inteiro
    vencedor: caracter
inicio
    filmes[1] <- "Rambo I"
    filmes[2] <- "Rambo II"
    filmes[3] <- "Rambo III"
    filmes[4] <- "Rambo IIII"
    filmes[5] <- "Rambo IIIII"

    // Exibindos os filmes nas telas
    para i de 1 ate 5 faca
        escreval(i, " - ", filmes[i])
    fimpara
    escreval("Escolha o número do filme: ")
    para i de 1 ate 20 faca
        escreva("Voto ",i, " : ")
        leia(voto)
        votos[voto <- votos[voto] + 1
    fimpara
    maior <- 0
    para i de 1 ate 5 faca 
        se votos[i] > maior entao 
            maior <-votos[i]
            vencedor <- filme[i]
        fimse
    fimpara 
    escreval("Resultado")
fimalgoritmo