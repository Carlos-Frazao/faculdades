algoritmo "crescente"
var
   n1, n2, n3: real
inicio
      escreva("Digite o primeiro valor: ")
      leia(n1)
      escreva("Digite o segundo valor: ")
      leia(n2)
      escreva("Digite o terceiro valor: ")
      leia(n3)
      se (n1 < n2) e (n1 < n3) entao
         se (n2 < n3) entao
            escreva(n1,":",n2,":",n3)
         senao
            escreva(n1,":",n3,":",n2)
         fimse
      senao
         se (n2 < n1) e (n2 < n3) entao
            se (n1 < n2) entao
               escreva(n2,":",n1,":",n3)
            senao
               escreva(n2,":",n3,":",n1)
            fimse
         senao
            se (n1 < n2) entao
               escreva(n3,":",n1,":",n2)
            senao
               escreva(n3,":",n2,":",n1) 
            fimse
         fimse 
      fimse          
fimalgoritmo