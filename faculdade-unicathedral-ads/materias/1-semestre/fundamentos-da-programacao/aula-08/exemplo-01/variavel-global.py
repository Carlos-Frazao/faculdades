#Variável global.

a = 5
def alterar():
    a = 10 #Variável local.
    a = 10
alterar()

print(a)