#Problema 03
estacionadas = float(input("Informe a quantidade de horas estacionada: "))
if estacionadas <= 2:
    print(f"Valor da tarifa 1,00 / Total a pagar {estacionadas * 1.00}")
elif estacionadas <= 4:
    print(f"Valor da tarifa 1,40 / Total a pagar {estacionadas * 1.40}")
else:
    print(f"Valor da tarifa 2,00 / Total a pagar {estacionadas * 2.00}")
