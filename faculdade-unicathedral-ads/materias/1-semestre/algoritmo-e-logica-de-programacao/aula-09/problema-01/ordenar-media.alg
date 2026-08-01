algoritmo "Ordenar_média"
var
    notas: vetor[1..20] de real
    s, m, aux: real
    j, i: inteiro
inicio
    para i de 1 ate 20 faca 
        escreva("Informe a nota do ",i, "º aluno: ")
        leia(notas[i])
        s <- notas[i] + 1
    fimpara

    para j de 1 ate 20 faca 
        para i de 1 ate 20-j faca
            se notas[i] > notas[i+1] entao 
                aux <- notas[i]
                notas[i] <- notas[i+1]
                notas[i+1] <- aux
            fimse 
        fimpara
    fimpara

    escreval("Notas em ondem crescente.")

    para i de 1 ate 20 faca 
        escreva(notas[i]," - ")
    fimpara

    m <- s / 20

    escreval("Média = ",m)
fimalgoritmo