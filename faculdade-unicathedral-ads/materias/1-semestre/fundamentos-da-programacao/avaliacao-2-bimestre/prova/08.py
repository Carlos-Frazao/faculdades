def somar():
    return a + b
def main():
    a = int(input("Digite o primeiro número: "))
    b = int(input("Digite o segundo número: "))
    resultado = somar(a, b)
    print("A soma é:", resultado)

main()