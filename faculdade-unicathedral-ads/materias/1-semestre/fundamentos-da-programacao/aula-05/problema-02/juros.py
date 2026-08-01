#Problema 02
deposito = float(input("Informe o valor do depósito: R$"))
taxa = float(input("Informe a taxa de juros: "))

mes = 1

while mes <= 12:
    deposito = deposito + (deposito * taxa) / 100
    print(f"Mês {mes} valor igual á {deposito:.2f}")
    mes = mes + 1
