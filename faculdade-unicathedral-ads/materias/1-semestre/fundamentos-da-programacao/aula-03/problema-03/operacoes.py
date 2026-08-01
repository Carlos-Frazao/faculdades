# Problema 03.
n1 = float(input("Digite um número: "))
n2 = float(input("Digite um número: "))
operacao = input("Digite a operação (+ , - , * , / )")
if operacao == "+":
    print(f"A soma de {n1} e {n2} é igual a {n1 + n2}")
elif operacao == "-":
    print(f"A subtração de {n1} e {n2} é igual a {n1 - n2}")
elif operacao == "*":
    print(f"A multiplicação de {n1} e {n2} é igual a {n1 * n2}")
if operacao == "/":
    print(f"A Divisão de {n1} e {n2} é igual a {n1 / n2}")
else:
    print("Operação inválida!")
