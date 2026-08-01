# Problema 2
tempo = 1
soma = 0
while tempo < 8: 
    estu = int(input("Quantos minutos estudados? "))
    soma = soma + estu
    tempo = tempo + 1
print(f"Tempo total de estudo {soma} minutos / Média diária é {soma / 7:.2f}")