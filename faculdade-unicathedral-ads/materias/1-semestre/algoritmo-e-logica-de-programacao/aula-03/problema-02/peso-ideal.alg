algoritmo "Peso_Ideal"
var
    alt, imc: real
    sexo: caracter
inicio
    escreva("Informa sua altura: ")
    leia(alt)
    escreva("Informe seu sexo (m/f): ")
    leia(sexo)
    se sexo = "m" entao
        imc <- (72.7 * alt) -58
        escreva(imc)
    fimse
    se sexo = "f" entao
        imc <- (62.1 * alt) -44.7
        escreva(imc, "f")
    fimse
fimalgoritmo