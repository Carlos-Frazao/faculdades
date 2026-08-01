Algoritmo "saque"

Var
   valor, saldo, limite, disponivel: real
Inicio
      escreva("Informe o valor do saque: ")
      leia(valor)
      saldo <- 1000000
      limite <- 5000
      disponivel <-3000
      se (valor <= saldo) entao
         se (valor <= limite) entao
            se (valor <= disponivel) entao
               saldo <- saldo - valor
               escreva("saldo", saldo)
            senao
                 escreva("Caixa n�o tem esse valor disponivel")
            fimse
         senao
              escreva("O valor ultrapassa o limite di�rio")
         fimse
       senao
            escreva("Saldo insuficiente")
       fimse
Fimalgoritmo