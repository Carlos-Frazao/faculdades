def cadastrar_salario():
    salario = float(input("Digite o valor do salário: R$ "))
    return salario

def calcular_imposto(salario):
    if salario <= 2000:
        return 0
    elif salario < 5000:
        return salario * 0.10
    else:
        return salario * 0.20

# Programa principal
salario = cadastrar_salario()
imposto = calcular_imposto(salario)
print("Imposto devido: R$ {:.2f}".format(imposto))
print(f"Sobrou um total de: ",salario-imposto,"Reais")