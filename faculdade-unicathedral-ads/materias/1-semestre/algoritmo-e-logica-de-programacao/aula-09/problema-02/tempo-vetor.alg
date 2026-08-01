algoritmo "Tempo_Vetor"
var
    nome: vetor[1..5] de caracter
    temp: vetor[1..5] de inteiro
    i, j, aux: inteiro
    tempos: caracter
inicio
    escreval("Informe seu nome e o tempo que você leva de casa até a faculdade.")
    para i de 1 ate 5 faca
        escreva("Informe o nome da " ,i, "º pessoa: ")
        leia(nome[i])
        escreva("informe o tempo da " ,i, "º pessoa: ")
        leia(temp[i])
    fimpara

    para j de 1 ate 5 faca
        para i de 1 ate 5-j faca
            se temp[i] < temp[i+1] entao
                aux <- temp[i]
                temp[i] <- temp[i+1]
                temp[i+1] <- aux

                //temp usado como variável auxiliar.
                tempos < nome[i]
                nome[i] <- nome[i+1]
                nome[i+1] <- tempos

            fimse
        fimpara
    fimpara

    escreval("Exibindo o resultado dos tempos informados em ordem Decrescente!")

    para i de 1 ate 5 faca
        escreva(nome[i])
        escreval(" Tempo: ",temp[i], " minutos.")
    fimpara
    
fimalgoritmo
//tá errado