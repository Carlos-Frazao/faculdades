#Problema 02
bolachaUnidade = int(input("Informe a quantidade de bolacha: "))
if bolachaUnidade <= 10:
    #bolacha = bolachaUnidade * 4.30
    print(f"Você comprou {bolachaUnidade} unidade de bolacha, no valor de R$4,30 e ficou no total de R${bolachaUnidade * 4.30:.2f}")
else: 
    #bolacha = bolachaUnidade * 4.10
    print(f"Você comprou {bolachaUnidade} unidade de bolacha, no valor de R$4,10 e ficou no total de R${bolachaUnidade * 4.10:.2f}")