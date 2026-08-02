# 📱 Desenvolvimento para Dispositivos Móveis

Essa disciplina exige uma virada de chave mental: diferentemente de sistemas backend que rodam em servidores estáveis, aplicações mobile precisam lidar agressivamente com o ciclo de vida do sistema operacional, memória limitada, perda de conexão e até a rotação da tela do usuário.

## 1. Paradigmas de Arquitetura Mobile
A primeira grande decisão no desenvolvimento mobile é definir como o aplicativo será construído, o que impacta diretamente na performance e na infraestrutura do projeto.

* **Nativo:** Código escrito na linguagem oficial e compilado diretamente para a arquitetura do processador (Kotlin/Java para Android, Swift/Objective-C para iOS). Permite acesso de baixo nível aos sensores do hardware (câmera, bluetooth) com performance máxima.
* **Cross-Platform (Multiplataforma):** Ferramentas como Flutter (Dart) e React Native (JavaScript/TypeScript). Você escreve um único *codebase* que roda nos dois sistemas. O Flutter compila o código nativamente via engine própria em C++, enquanto o React Native utiliza uma ponte (*bridge*) para se comunicar com os componentes nativos.
* **PWA (Progressive Web Apps):** Aplicações web otimizadas que rodam no browser do celular, utilizando *Service Workers* para permitir cache, funcionamento offline e notificações push.

## 2. Componentes Fundamentais (Ecossistema Android)
Como o Android domina as bases curriculares, entender a orquestração dos seus componentes é obrigatório:

* **Activity:** Representa uma única tela interativa. Se o app fosse uma aplicação web, a Activity seria a página. Entender seu ciclo de vida (`onCreate`, `onStart`, `onResume`, `onPause`, `onStop`, `onDestroy`) é crítico para gerenciar recursos e evitar vazamento de memória quando o app vai para segundo plano.
* **Fragment:** Uma porção modular e reutilizável de interface que roda dentro de uma Activity. Vital para layouts responsivos (ex: dividir a tela em duas partes em tablets).
* **Intents:** Mensagens assíncronas que solicitam ações de outros componentes. Uma *Intent Explícita* chama uma tela específica do seu app. Uma *Intent Implícita* pede que o sistema resolva a ação (ex: "abra este link no navegador padrão").
* **Services:** Componentes sem interface gráfica (UI) que executam operações longas em background. Um serviço de sincronização de rede ou um reprodutor de áudio continuam rodando aqui, mesmo que o usuário mude de app.

## 3. Padrões de Projeto: MVVM
O padrão de arquitetura **MVVM (Model-View-ViewModel)** tornou-se a norma na indústria para resolver o problema de interfaces muito infladas e difíceis de testar.

* **Model:** A camada de domínio que encapsula a lógica de negócios e as conexões de rede ou banco de dados.
* **View:** A interface em si (Activity/Fragment no Android). Ela é passiva: sua única função é exibir dados e capturar cliques, repassando a ação para a camada abaixo.
* **ViewModel:** O cérebro da tela. Mantém o estado da interface. A grande vantagem é que a `ViewModel` sobrevive a mudanças de configuração (como a rotação do aparelho), impedindo que chamadas de rede ou queries no banco precisem ser refeitas à toa.

## 4. Persistência de Dados e Comunicação Externa
Diferente do backend, o mobile frequentemente precisa funcionar sem internet, exigindo estratégias robustas de cache local.

* **Bancos Relacionais (SQLite / Room):** O SQLite é o motor embutido. O *Room* é uma biblioteca de persistência do Android que atua como um ORM (Object-Relational Mapping), facilitando as queries e convertendo linhas do banco em objetos nativos, além de checar os comandos SQL em tempo de compilação.
* **Armazenamento Chave-Valor (Preferences / DataStore):** Ideal para salvar configurações simples do usuário, temas da interface ou tokens de sessão de APIs.
* **Consumo de APIs REST:** Toda comunicação externa (via bibliotecas como Retrofit ou Axios) que utilize requisições HTTP e lide com JSON. **Regra de ouro:** chamadas de rede são operações de I/O lentas e devem *obrigatoriamente* rodar em *threads* secundárias para não travar a *Main Thread* (UI Thread).

## 5. Evolução da Interface: Imperativa vs. Declarativa
* **Imperativa (Padrão Clássico):** A interface é definida em arquivos XML. O desenvolvedor precisa instanciar os elementos via código (ex: buscar um botão pelo ID) e mutar seu estado ativamente (ex: `botao.setText("Enviado")`).
* **Declarativa (Padrão Moderno):** Ferramentas mais novas como Jetpack Compose (Android), SwiftUI (iOS) e Flutter adotam essa via. A interface é descrita com base no estado atual dos dados. Se a variável `usuarioLogado` muda de falso para verdadeiro, a tela reage e se reconstrói automaticamente, eliminando manipulações manuais na árvore da interface.