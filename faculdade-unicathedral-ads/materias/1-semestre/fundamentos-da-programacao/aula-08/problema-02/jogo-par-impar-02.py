import random

#Iniciei as variáveis e globalizei tudo
#pq quando eu iniciava dentro do laço ele zerava os os placar
tot_usuario = 0 
tot_pc = 0

resp = "S"
while resp != "N":

    #Função que sortea um número de 1 até 5.
    def sortear():
        global numero_sorteado
        numero_sorteado = random.randint(1,5)
        return numero_sorteado

    #Função para escolher quem é impar ou par.
    def informar():
        global numero #Atribuindo a variável número de forma global para usar na função abaixo.
        global usuario
        print("==================================")
        print("       JOGO IMPAR OU PAR          ")
        print("==================================")
        usuario = str(input("Escolha impar ou par? (P/I)")).upper()
        numero = int(input("Escolha um número de 1 até 5: "))
        return usuario, numero

    #Verificar o ganhador.
    def verificar_ganhador():
        global tot_usuario
        global tot_pc
        #tot_usuario = 0
        #tot_pc = 0
        soma_total = numero_sorteado + numero
        if (soma_total % 2 == 0 and usuario == "P") or (soma_total % 2 != 0 and usuario == "I"):
            print("Você venceu!")
            tot_usuario = tot_usuario + 1
        else:
            print("O Computador venceu!")
            tot_pc = tot_pc + 1
        print(f"Total de vitórias do usuário: {tot_usuario}")
        print(f"Total de vitórias do computador: {tot_pc}")
        #print("Teste para ver se está entrando no veri.ganhador")
        return soma_total

    #Funução que irá exibir o placar.
    #def exiba_placar():
        #print(f"Total de vitória do usuário: {tot_usuario}")
        #print(f"Total de vitória do computador: {tot_pc}")

    print(sortear())
    print(informar())
    print(verificar_ganhador())
    #print(exiba_placar())

    resp = input("Quer continuar o jogo de Par ou Impar? (S/N): ").upper() 
