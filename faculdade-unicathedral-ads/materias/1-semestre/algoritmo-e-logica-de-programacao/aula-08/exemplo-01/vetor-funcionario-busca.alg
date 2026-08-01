algoritmo "Vetor_funcionário_Busca"
var
    salarios: vetor [0..9] de real 
    i: inteiro 
    encontrou: caracter 
inicio
    para i de 0 ate 9 faca 
        escreva("Digite o salário do funcuinário, ",i+1, ": ")
        leia(salarios[i])
    fimpara 
    encontrou <- "Não"
    para i de 0 ate 9 faca 
        se salarios[i] = 1518 entao 
            encontrou <- "Sim"
        fimse
    fimpara 
    escreva(encontrou, " tem fincionário que recebe 1518,00")
fimalgoritmo