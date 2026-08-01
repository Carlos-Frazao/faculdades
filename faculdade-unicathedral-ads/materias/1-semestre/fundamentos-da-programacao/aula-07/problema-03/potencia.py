#Problema 03
def potencia(base, expoente):
    contador = 1 
    resultado = 1
    while contador <= expoente:
        resultado = resultado * base
        contador = contador + 1
    return resultado

n = int(input("informe um número: "))
elevado = int(input("informe o valor que será elevado: "))

print(f"A potência do número n é {potencia(n, elevado)}")
