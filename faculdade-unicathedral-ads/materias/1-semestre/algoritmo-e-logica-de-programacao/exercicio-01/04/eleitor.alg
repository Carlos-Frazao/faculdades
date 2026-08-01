algoritmo "eleitor"
var
   idade: inteiro
inicio
      escreva("Qual sua idade? ")
      leia(idade)
      se idade < 16 entao
         escreva("Não votante")
      senao
           se (idade >= 18) e (idade < 70) entao
              escreva("Votantes obrigatórios")
           senao
                se (idade >= 16) e (idade < 18) entao
                   escreva("Votantes opcionais")
                fimse
           fimse
      fimse
fimalgoritmo