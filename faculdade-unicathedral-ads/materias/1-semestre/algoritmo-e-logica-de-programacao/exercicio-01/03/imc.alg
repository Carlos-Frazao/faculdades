algoritmo "imc"
var
   peso, alturaims: real
inicio
      escreva("Qual seu peso: ")
      leia(peso)
      escreva("Qual sua altura: ")
      leia(altura)
      imc <- peso / (altura * altura)
      se imc < 20 entao
         escreva("Abaixo do peso!")
      senao
           se imc > 20 e imc < 25 entao
              escreva("Peso normal.")
           senao
                se imc > 25 e imc < 30 entao
                   escreva("Sobre peso!")
                senao
                     se imc > 30 e imc < 40 entao
                        escreva("Obeso!")
                     senao
                          escreva("Obeso móbido!")
                     fimse
                fimse
           fimse
      fimse
      escreva(imc)
fimalgoritmo