# Problema 01.
velocidade = int(input("Digite a velocidade: "))
if velocidade > 80:
    multa = (velocidade - 80) * 5
    print(f"Você foi multado, no valor de R${multa}")
    print("Boa viagem, dirija com cuidado.")
else:
    print("Boa viagem!")
