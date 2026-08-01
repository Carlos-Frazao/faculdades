# Problema 02.
dist = int(input("Digite a distância em Km: "))
if dist <= 200:
    pre_viagen = dist * 0.50
else:
    pre_viagen = dist * 0.45
print(f"A viagen de {dist}Km, ficou em R${pre_viagen}")
