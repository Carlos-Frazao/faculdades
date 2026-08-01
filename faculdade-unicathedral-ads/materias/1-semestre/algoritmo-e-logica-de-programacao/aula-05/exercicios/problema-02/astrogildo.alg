algoritmo "Astrogildo"
var
    astrogildo, felisbina: real
    mes: inteiro
inicio
    astrogildo <- 1300
    felisbina <- 1800
    mes <- 1

    enquanto astrogildo < felisbina faca 
        astrogildo <- astrogildo + 300
        felisbina <- felisbina + 200
        escreval(mes," Astrogildo = ",astrogildo, " Felisbina ",felisbina)
        mes <- mes + 1
    fimenquanto
fimalgoritmo