# Problema 01
cont = 10
pessoas = 1
while cont > 1:
    nota = int(input("Qual a nota do lanche da cantina de 1 á 10 informe 0 para sair: "))
    if nota == 0: # Verificando se for 0 para sair
        cont = nota
    elif nota >= 11:
        print("Nota inválida!")
    else:
        soma = nota + 1
        qtidade = qtidade + 1 
        media = soma / qtidade
    print(f"Total de pessoas {pessoas} / Média: {media}")