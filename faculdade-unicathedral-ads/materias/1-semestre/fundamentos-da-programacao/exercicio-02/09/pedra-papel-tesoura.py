import random

def sortear():
    return random.randint(1,3)

def informar():
    print("Escolha uma opção:")
    return int(input("1 - Pedra \n2 - Papel \n3 - Tesoura"))

def traduzir(numero):
    if numero == 1: 
        return "Pedra"
    elif numero == 2:
        return "Papel"
    else:
        return "Tesoura"

def jogar():
    computador = sortear()
    joador = informar()
    print(f"Jogador: {traduzir(joador)} X {traduzir(computador)} : Computador")
    if joador == computador:
        print("Empate")
    else:
        if joador == 1:
            if computador == 3:
                print("Você venceu.")
            else:
                print("Computador venceu.")
            
        if joador == 2:
            if computador == 1:
                print("Você venceu.")
            else:
                print("Computador venceu")
        
        if joador == 3:
            if computador == 2: 
                print("Você venceu.")
            else:
                print("Computador venceu.")
jogar()
