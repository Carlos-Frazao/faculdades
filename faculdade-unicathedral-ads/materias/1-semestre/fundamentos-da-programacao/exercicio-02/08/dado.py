import random

def rolar_dado():
    return random.randint(1,6)

def jogar_rodada():
    placa_j = 0
    placa_c = 0
    opcao = "s"
    while opcao == "s": 
        computador = rolar_dado()
        jogador = rolar_dado()
        print(f"Jogador {jogador} : {computador} computador")
        if jogador > computador:
            print("Jogador venceu a rodada.")
            placa_j = placa_j + 1
        elif computador > jogador:
            print("Computador venceu a rodada")
            placa_c = placa_c + 1
        else:
            print("Empate!")
        opcao = input("Quer continuar? (s/n) ")
    print(f"Placa final \n Jogador {placa_j} : Computador {placa_c}")

jogar_rodada()