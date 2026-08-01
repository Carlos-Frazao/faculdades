algoritmo "analise_numero"
var
   n: real
inicio
      escreva("Digite um número: ")
      leia(n)
      se n > 1 entao
         escreva("Positivo")
      senao
           se n < 0 entao
              escreva("Negativo")
           senao
                escreva("Neutro") //Princípio do excluido
           fimse
      fimse
fimalgoritmo