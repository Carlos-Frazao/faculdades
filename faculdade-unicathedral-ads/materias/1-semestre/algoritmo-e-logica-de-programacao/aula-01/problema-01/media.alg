algoritmo "media"
var
   n1, n2, m: real
inicio
      escreva("Digite sua primeira nota: ")
      leia(n1)
      escreva("Digite sua segunda nota: ")
      leia(n2)
      m <- (n1 + n2) / 2
      se m > 6 entao
         escreva("Aprovado")
      senao
           se (m > 3) e (m < 6) entao
              escreva("Exame")
           senao
                escreva("Reprovado") //Principio do Último Excluido
           fimse
      fimse
fimalgoritmo