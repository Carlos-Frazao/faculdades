achou = False
l = [0, 2, 4, 6, 8, 10, 12, 14, 16, 20]
usuario = int(input("Informe um número: "))

for i in l: 
    if i == usuario:
        print("O número", usuario, "está na lista.")
        break
    else: 
        print("O número", usuario, "não está na lista.")    
