#Problema 01
def maior(n1, n2):
    if n1 > n2:
        return(n1)
    else:
        return(n2)

n1 = int(input("informe o 1° número: "))
n2 = int(input("informe o 2° número: "))

print(f"O maior é o {maior(n1, n2)}")