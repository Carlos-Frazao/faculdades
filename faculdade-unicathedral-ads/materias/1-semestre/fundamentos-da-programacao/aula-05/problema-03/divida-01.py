#Problema 03
divida = float(input("Informe o valor da dívida: "))
juros = float(input("Informe o juros mensal: "))
pago = float(input("Informe o valor a ser pago mensalmente: "))

mes = 1

while divida > 0:
    if divida > pago:  
        divida = divida + (divida * juros / 100)
        divida = divida - pago
        juro = (divida * juros) / 100 # Calculando o juros sobre a divida.
    else:
        pago = divida # Atribuindo a divida ao valor pago, pois o valor a ser pago é menor que a divida.
        divida = 0 # Zerando a divida.
    print(f"Mês {mes}º valor pago {pago:.2f} falta {divida:.2f}")
    #print({juro})
    #print(f"Mês {mes}º valor pago {pago:.2f} / total de juros {juro} / falta {divida:.2f}")
    mes = mes + 1
print("Dívida quitada")