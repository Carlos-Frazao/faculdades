#Exemplo 01.
valor = float(input("Valor da fatura: "))
atrasada = input("Fatura atrasada (sim/não)? ")
if atrasada == "sim":
    valor = valor + (valor * 10/100)
print(f"Valor a pagar R${valor}")
