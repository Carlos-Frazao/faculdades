#Problema 01
despesas = float(input("Informe o valor das despesas: R$"))
vendas = float(input("Informe o valor das vendas: R$"))

lucro = vendas - despesas

if vendas > despesas:
    print(f"Você teve um lucro de R${lucro} Lucro")
else:
    print(f"Você teve um Prejuízo de R${lucro * (-1)}")