numeros = [5, 10, 15, 20, 25, 30, 35, 40, 45, 50]
usuario = int(input("Informe um valor: "))

encontrou = False 
for n in numeros:
    if n == usuario:
        print("Número encontrado")
        encontrou = True
if not encontrou:
    print("Número não encontrado")