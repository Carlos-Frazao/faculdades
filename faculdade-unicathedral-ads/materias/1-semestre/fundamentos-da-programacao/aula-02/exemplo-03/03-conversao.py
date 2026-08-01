#Entrada de dados.
real = float(input("Inforrme o valor em Real: R$"))
cotacao = float(input("Informe a cotação do Dolar: "))

#Processamento de dados.
convercao = real / cotacao

#Saída de dados
print(f"R${real} convertido para Dolar, dará {convercao:.2f} U$")
