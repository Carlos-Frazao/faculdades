saldo = 0
def exibir_saldo():
    print(f'Saldo = R$ {saldo:.2f}')
def depositar(valor):
    global saldo
    saldo = saldo+valor
def sacar(valor):
    global saldo
    if valor<=saldo:
        saldo = saldo-valor
        print('Saque realizado!')
    else:
        print('Saldo insuficiente!')
def exibir_menu():
    print('\n---SISTEMA BANCÁRIO---')
    print('1 - Saldo')
    print('2 - Depositar')
    print('3 -Sacar')
    print('4 - sair')
    print('Escolha uma operação:')
opcao = 1
while opcao!=4:
    if opcao >=1 and opcao<=3:
        exibir_menu()
    opcao = int(input())
    if opcao == 1:
        exibir_saldo
    elif opcao == 2:
        valor = float(input('Informe o valor'))
        depositar(valor)
    elif opcao == 3:
        valor = float(input('Informe o valor'))
        sacar(valor)
    elif opcao == 4:
        print('Seu dinheiro é meu otário!!!')
    else:
        print('Digita de 1 a 4 se burro!!!')