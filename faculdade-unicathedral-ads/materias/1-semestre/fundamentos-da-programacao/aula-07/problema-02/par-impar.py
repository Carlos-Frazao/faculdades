#Problema 02
def par_impar(numero):
    if numero % 2 == 0:
        return("Par")
    else:
        return("Impar")

n1 = int(input("informe um número: "))

print(f"O número informado é {par_impar(n1)}")
