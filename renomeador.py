import os
import unicodedata

def padronizar_nome(texto):
    texto = texto.lower()
    
    # Remove acentos
    texto_normalizado = unicodedata.normalize('NFKD', texto)
    texto_sem_acento = texto_normalizado.encode('ASCII', 'ignore').decode('utf-8')
    
    # Troca espaços, underlines e vírgulas por hífen
    texto_final = texto_sem_acento.replace('_', '-').replace(' ', '-').replace(',', '-')
    
    # Remove parênteses e símbolos de grau
    for char in ['(', ')', 'º', 'ª']:
        texto_final = texto_final.replace(char, '')
        
    # Limpa hífens duplicados (ex: se tinha espaço e vírgula juntos) que possam ter se formado
    while '--' in texto_final:
        texto_final = texto_final.replace('--', '-')
        
    # Tira o hífen se ele ficar sobrando no final do nome
    return texto_final.rstrip('-')

def substituir_underline_por_hifen(diretorio_base):
    print(f"Iniciando varredura em: {diretorio_base}\n")
    
    # Verifica se a pasta realmente existe antes de tentar rodar
    if not os.path.exists(diretorio_base):
        print(f" ERRO: A pasta '{diretorio_base}' não foi encontrada!")
        return

    for root, dirs, files in os.walk(diretorio_base, topdown=False):
        if '.git' in root:
            continue
            
        # 1. Renomeando os arquivos
        for nome_arquivo in files:
            if nome_arquivo.lower() == 'readme.md':
                continue

            novo_nome = padronizar_nome(nome_arquivo)
            if nome_arquivo != novo_nome:
                caminho_antigo = os.path.join(root, nome_arquivo)
                caminho_novo = os.path.join(root, novo_nome)
                os.rename(caminho_antigo, caminho_novo)
                print(f" Arquivo: {nome_arquivo}  ->  {novo_nome}")

        # 2. Renomeando as pastas (diretórios)
        for nome_pasta in dirs:
            novo_nome = padronizar_nome(nome_pasta)
            if nome_pasta != novo_nome:
                caminho_antigo = os.path.join(root, nome_pasta)
                caminho_novo = os.path.join(root, novo_nome)

                    # Só renomeia se a pasta destino AINDA NÃO existir
                if not os.path.exists(caminho_novo):
                    os.rename(caminho_antigo, caminho_novo)
                    print(f" Pasta: {nome_pasta} -> {novo_nome}")
                else:
                    print(f" Pulando: A pasta '{novo_nome}' já existe!")
                
    print("\n Padronização concluída com sucesso!")

# Descobre exatamente onde este arquivo .py está salvo
diretorio_do_script = os.path.dirname(os.path.abspath(__file__))

# Como o script já está dentro da pasta 'algoritmo-e-logica-de-programacao', 
# nós só precisamos juntar ele com o nome da pasta alvo que está ao lado dele.
caminho_alvo = os.path.join(diretorio_do_script, 'faculdade-ufmt-cc/materias/')

substituir_underline_por_hifen(caminho_alvo)