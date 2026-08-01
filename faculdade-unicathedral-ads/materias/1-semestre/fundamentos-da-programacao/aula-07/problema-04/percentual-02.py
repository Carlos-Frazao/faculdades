def percentual(valor, taxa):
    #x = valor + (valor * taxa / 100)
    valor_taxa = 0
    valor_taxa = valor + (valor * taxa / 100)
    return valor_taxa

v = float(input("informe o valor: ")) #Valor.
t = float(input("informe o valor da taxa: ")) #Taxa.

print(f"O valor de {v:.2f} com a taxa de {t}%, ficara em  {percentual(v, t):.2f}") #.2f = 2 casas decimais.
