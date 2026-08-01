## CRUD (Create, Read, Update, Delete)

#### Create (Criar):
+ Verbo HTTP: POST
+ O que faz: Recebe dados (geralmente em formato JSON), valida se as informações estão corretas e escreve um novo registro no banco de dados.
+ Exemplo: Enviar o IP e o nome de um novo servidor para a API.

#### Read (Ler):
+ Verbo HTTP: GET
+ O que faz: Busca as informações no banco. Geralmente você cria duas rotas: uma para listar todos os registros e outra para buscar apenas um registro específico usando o ID dele.

#### Update (Atualizar):
+ Verbo HTTP: PUT (atualiza tudo) ou PATCH (atualiza partes).
+ O que faz: Busca um registro existente pelo ID, recebe novos dados e sobrescreve as informações velhas no banco.
+ Exemplo: Mudar o IP de um servidor que já estava cadastrado.

#### Delete (Deletar):
+ Verbo HTTP: DELETE
+ O que faz: Busca o registro pelo ID e o remove do banco de dados.

### Primeiro passo
+ #### dsgv
