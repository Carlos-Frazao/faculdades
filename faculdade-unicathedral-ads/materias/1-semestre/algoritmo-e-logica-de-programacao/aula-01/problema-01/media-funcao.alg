algoritmo "media_funcao"
var
    qtd_notas, c, notas_soma, notas: real
inicio
    // X vale qtd_notas e Y vale notas_soma, então o calculo será notas_soma / qtd_notas 
    funcao calcular_media(x, y: real): real
        var 
            media: real
        inicio
            media <- x / y
            retorne media
    fimfuncao

    escreva("Digite quantas notas deseja inserir: ")
    leia(qtd_notas)

    c <- 0
    enquanto (qtd_notas > c) faca
        // Entrada de notas
        escreva("Digite sua ", c+1,"° nota: ")
        leia(notas)
        notas_soma <- notas_soma + notas
        // Calculo da media
        c <- c + 1 
    fimenquanto

    escreva("A média das notas é: ", calcular_media(notas_soma, qtd_notas))

fimalgoritmo