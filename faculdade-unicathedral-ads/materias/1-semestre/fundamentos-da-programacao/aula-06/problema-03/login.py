# Problema 03
segredo = "Aluno" #Senha para fazer o login.
senha = ""
tentativas = 1
while tentativas <= 3 and segredo != senha:
    senha = (input("Informe a senha: "))
    if senha == segredo:
        print("Senha correta!")
        print("Login efetuado!")
        tentativas = 3
    else:
        if tentativas  == 1: 
            print("Senha incorreta!")
            print("Você tem mais 2 tentativas.")
        elif tentativas == 2:
            print("Senha incorreta!")
            print("Você tem mais 1 tentativa.")
        else:
            print("Senha incorreta!")
            print("Você não tem mais nenhuma tentativa!.")
    tentativas = tentativas + 1
