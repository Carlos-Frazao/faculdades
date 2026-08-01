#Problema 03
divida = float(input("Informe o valor da dívida: "))
juros = float(input("Informe o juros mensal: "))
pago = float(input("Informe o valor a ser pago mensalmente: "))

mes = 1

while divida > 0:
    if divida > pago:  
        juro = (divida * juros) / 100 # Calculando o juros sobre a divida.
        divida = divida + (divida * juros / 100) # Atualizando a divida com os juros.
        t_divida = divida # Total da divida com juros. Variável criada para exibir na saída de dados.
        divida = divida - pago # Subtraindo o valor pago da divida.
    else:
        juro = (divida * juros) / 100 # Calculando o juros sobre a divida.
        divida = divida + (divida * juros / 100) # Atualizando a divida com os juros.
        t_divida = divida # Total da divida com juros. Variável criada para exibir na saída de dados.
        pago = divida # Atribuindo a divida ao valor pago, pois o valor a ser pago é menor que a divida.
        divida = 0 # Zerando a divida.

    print(f"Mês {mes}º / Juros R${juro:.2f} / Total da dívida R${t_divida:.2f} / Valor pago R${pago:.2f} / Falta R${divida:.2f}")
    
    mes = mes + 1
print("Dívida quitada!")