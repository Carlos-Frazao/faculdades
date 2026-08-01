Algoritmo "Controle_Estacionamento"
// Declaração de Variáveis
Var
   vagas: vetor[1..10] de caractere 
   i: inteiro                        
   placa_busca: caractere
   posicao_encontrada: inteiro       
   
Inicio
   // 1. PREENCHIMENTO DAS 10 VAGAS
   escreval("--- PREENCHIMENTO DAS VAGAS ---")
   para i de 1 ate 10 faca
      escreva("Digite a placa do veículo na Vaga ", i, ": ")
      leia(vagas[i])
   fimPara

   // 2. BUSCA DA PLACA
   escreval("--- BUSCA DO VEÍCULO ---")
   escreva("Digite a placa do veículo a ser procurado: ")
   leia(placa_busca)

   // Inicializa a posição com um valor que indica 'não encontrado' (ex: 0)
   posicao_encontrada <- 0

   // Realiza a busca sequencial no vetor
   para i de 1 ate 10 faca
      se vagas[i] = placa_busca entao
         posicao_encontrada <- i // Armazena a posição
         // Se a vaga for encontrada, é ideal parar a busca
         interrompa // Comando para sair imediatamente do laço 'para'
      fimse
   fimPara

   // 3. EXIBIÇÃO DO RESULTADO
   se posicao_encontrada > 0 entao
      escreval("Veículo encontrado!")
      escreval("O carro está ocupando a VAGA ", posicao_encontrada, ".")
   senao
      escreval("Veículo não encontrado no estacionamento.")
   fimse

FimAlgoritmo