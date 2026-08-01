#Exemplo 03.
idade = int(input("Digite a idade: "))
if idade < 12: 
    print("Criança!")
else:
    if idade < 18:
        print("Adolecente.")
    else:
        if idade < 60:
            print("Adulto.")
        else:
            print("Idoso!")
