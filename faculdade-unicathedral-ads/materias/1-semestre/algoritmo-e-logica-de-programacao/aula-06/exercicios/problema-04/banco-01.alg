algoritmo "banco"
var
   menu, cont: inteiro
   saldo, saque, depo: real
inicio
      saldo <- 0
      saque <- 0
      menu <- 0
      enquanto menu <= 3 faca
               escreval("==========Banco==========")
               escreval("[1] Consultar Saldo")
               escreval("[2] Saque")
               escreval("[3] Depósito")
               escreval("[4] Sair")
               escreva("Informe a opção: ")
               leia(menu)
               // Esse menu é a junção de todas as opções.

               // Verificando se o menu é maior ou igual a 5, se sim, o menu vai exibir uma mensagem de erro e vai mostrar as opções novamente.
               se (menu >= 5) entao
                  // Gambiarra pra zerar o menu. E repetir as opções de novo, até o jumento colocar as opções corretas.
                  menu <- menu - menu
                  escreval("Opção inválida!")
               senao
                     // Consultar Saldo.
                     se menu = 1 entao
                        escreval("Seu saldo é de R$",saldo)  
                     senao
                           // Saque.
                          se menu = 2 entao
                             escreva("Informe o valor do saque: R$")
                             leia(saque)
                             escreval("Você efetuou um saque de R$",saque)
                             saldo <- saldo - saque
                          senao
                               // Depósito.
                               se menu = 3 entao
                                  escreva("Informe o valor do depósito: R$")
                                  leia(depo)
                                  escreval("Você depósitou R$",depo)
                                  saldo <- saldo + depo
                              fimse
                           fimse
                     fimse
               fimse
      fimenquanto
fimalgoritmo
//percebi que se eu informa número negativo ele não exibi a msg "opção inválida", e sim, ele continua o programa normalmente.