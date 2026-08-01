#Exemplo 03.
idade = int(input("Digite a idade: "))
if idade < 12: 
    print("Criança!")
elif idade < 18:
        print("Adolecente.")
elif idade < 60:
    print("Adulto.")
else:
    print("Idoso!")
