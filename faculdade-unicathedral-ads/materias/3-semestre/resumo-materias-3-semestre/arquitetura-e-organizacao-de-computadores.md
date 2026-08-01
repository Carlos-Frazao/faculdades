# Arquitetura e Organização de Computadores

Este guia divide a matéria entre **Organização** (como as partes se conectam) e **Arquitetura** (os atributos visíveis ao programador, como o conjunto de instruções).

---

## 1. Fundamentos e Evolução
* **Histórico e Evolução:** Das válvulas aos microprocessadores modernos.
* **Máquina de Von Neumann:** O conceito de programa armazenado (Memória, CPU, I/O).
* **Barramentos (Bus):** Como os dados, endereços e sinais de controle viajam entre os componentes.

## 2. Aritmética Computacional e Lógica Digital
* **Sistemas de Numeração:** Conversão entre Binário, Hexadecimal e Decimal.
* **Representação de Dados:**
  * Inteiros (Sinal-Magnitude, Complemento de 2).
  * Ponto Flutuante (Padrão IEEE 754).
* **Álgebra de Boole e Portas Lógicas:** AND, OR, NOT, XOR, NAND, NOR.
* **Circuitos Combinacionais e Sequenciais:** Somadores, Multiplexadores, Flip-flops e Registradores.

## 3. A Unidade Central de Processamento (CPU)
* **Componentes Internos:**
  * **ULA (Unidade Lógica e Aritmética):** Onde o cálculo acontece.
  * **UC (Unidade de Controle):** O "cérebro" que coordena a execução.
  * **Registradores:** Memória de ultra-velocidade dentro do chip (PC, IR, MAR, MBR).
* **Ciclo de Instrução:** Busca (Fetch), Decodificação, Execução e Escrita (Write-back).
* **Conjunto de Instruções (ISA):** Diferenças entre **RISC** (Reduced Instruction Set) e **CISC** (Complex Instruction Set).

## 4. Hierarquia de Memória
* **Conceito de Localidade:** Localidade espacial e temporal.
* **Memória Cache:**
  * Níveis (L1, L2, L3).
  * Mapeamento (Direto, Associativo, Associativo por Conjunto).
  * Políticas de Substituição (LRU, FIFO).
* **Memória Principal (RAM):** Tecnologias (DRAM vs SRAM).
* **Memória Virtual:** Paginação, segmentação e a tabela de páginas.

## 5. Pipeline e Paralelismo
* **Pipelining:** Técnica de sobrepor a execução de várias instruções para ganhar velocidade.
* **Conflitos (Hazards):** Estruturais, de dados e de controle (desvios).
* **Arquiteturas Superescalares:** Processadores que executam mais de uma instrução por ciclo.

## 6. Entrada e Saída (I/O)
* **Módulos de E/S:** Como o hardware se comunica com periféricos.
* **Técnicas de Transferência:**
  * E/S Programada.
  * E/S por Interrupção.
  * **DMA (Direct Memory Access):** Transferência de dados sem passar o tempo todo pela CPU.

---

<div align="center">

### Comparativo: Organização vs. Arquitetura

| Aspecto | Organização de Computadores | Arquitetura de Computadores |
| :--- | :--- | :--- |
| **Foco** | Implementação física (Hardware) | Design lógico (Software) |
| **Exemplo** | Sinais de controle, barramentos | Conjunto de instruções (x86, ARM) |
| **Nível** | Como os componentes se conectam | Como o programador vê a máquina |

</div>