def cadastras_emprestimo():
    valor = float(input("informe o valor do emprestimo: R$ "))
    parcelas = int(input("Informe o numero de parcelas: "))
    return valor, parcelas

def calcular_parcela(valor, parcelas):
    return valor/parcelas

emprestimo, prestacoes = cadastras_emprestimo()
valor_parcela = calcular_parcela(emprestimo, prestacoes)

print(f"R$ {emprestimo} em {prestacoes} x de R$ {valor_parcela}")