algoritmo "Sorvete"
var
    dias: vetor[1..7] de caracter
    dias_vendido: vetor[1..7] de inteiro
    i, maior, s: inteiro
    dia_mais_vendido: caractere
inicio
    dias[1] <- "Domingo"
    dias[2] <- "Segunda-feira"
    dias[3] <- "Terça-feira"
    dias[4] <- "Quarta-feira"
    dias[5] <- "Quinta-feira"
    dias[6] <- "Sexta-feira"
    dias[7] <- "Sabado"
    para i de 1 ate 7 faca
        escreva("Quantos sorvetes foi vendido, ",dias[i],": ")
        leia(dias_vendido[i])
    fimpara
    para i de 1 ate 7 faca 
        se dias_vendido[i] > maior entao 
            maior <- dias_vendido[i]
            dia_mais_vendido <- dias[i]
        fimse
    fimpara 
    para i de 1 ate 7 faca
        s <- dias_vendido[i] + s
    fimpara
    escreva("Dias com a maior venda: ")
    para i de 1 ate 7 faca
        se dias_vendido[i] = maior entao 
            escreval(dias[i])
        fimse
    fimpara 
    //escreval("O dia mais vendido foi, ",dia_mais_vendido)
    escreva("O total vendido na semana: ",s)
fimalgoritmo