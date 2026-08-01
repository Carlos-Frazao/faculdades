def opcoes_banco():
    print("=========Banco=========")
    print("1 - Ver saldo")
    print("2 - Sacar dinheiro")
    print("3 - Depositar dinheiro")
    print("4 - Sair")
    opcao_escolhida = int(input("Escolha uma opção: "))
    return opcao_escolhida

def banco():
    saldo = 0
    opcao = opcoes_banco()
    while opcao <= 4:
        #Verificando a opção de saida (4).
        if opcao == 4:
            print("Saindo do banco!")
            opcao = 5  #Forçar a saída do loop.
        #Consultar saldo.
        elif opcao == 1:
            print(f"Seu saldo é de R$ {saldo}")
            opcao = opcoes_banco()
            #return saldo
        #Saque.
        elif opcao == 2:
            saque = float(input("Quanto deseja sacar? "))
            if saque >= saldo: 
                print("Saldo insuficiente!")
                opcao = opcoes_banco()
            else:
                saldo = saldo - saque
                print(f"Você fez um saque de R$ {saque} seu saldo é de R$ {saldo}")
                #return saque
        #Depósito.
        elif opcao == 3: 
            deposito = float(input("Qual o valor do depósito? "))
            saldo = saldo + deposito
            print(f"Você depositou R$ {deposito}")
            opcao = opcoes_banco()
            #return deposito

banco()