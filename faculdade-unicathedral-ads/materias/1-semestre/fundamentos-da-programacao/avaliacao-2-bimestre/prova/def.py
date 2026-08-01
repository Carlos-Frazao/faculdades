num1 = float(input("Digite o primeiro número: "))
num2 = float(input("Digite o segundo número: "))
resp = input("Digite a operação desejada (+, -, *, /): ")

def adicao(a, b):
    return a + b
def subtracao(a, b):
    return a - b
def multiplicacao(a, b):
    return a * b
def divisao(a, b): 
    return a / b 

if resp == '+':
    print(f"A soma é: {adicao(num1, num2)}")
elif resp == '-':
    print(f"A subtração é: {subtracao(num1, num2)}")
elif resp == '*':
    print(f"A multiplicação é: {multiplicacao(num1, num2)}")
elif resp == '/':
    print(f"A divisão é: {divisao(num1, num2)}")
else:
    print("Operação inválida. Por favor, escolha entre +, -, *, /.")
