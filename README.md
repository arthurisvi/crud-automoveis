# CRUD Automóveis 

## Passos para iniciar a aplicação em desenvolvimento
1. Rode o comando
```
$ docker-compose up -d
```
2. Crie o database `bd-automoveis`

3. Utilize o script do arquivo `create-table-automoveis.sql`, localizado na pasta mysql, para criar a tabela principal da aplicação.

4. Acesse docker.localhost e verá a aplicação rodando! 


## Estrutura da aplicação
### 1. Database
Diretório que contém arquivos referentes ao Banco de Dados
- Database: possui a instância da conexão do BD e o método que executa as query.
- DatabaseRepository: trata das operações que envolvem comunicação com o BD

### 2. Models
Contém os arquivos das classes que "modelam" o banco de dados da aplicação.

### 3. Services
Engloba todos os serviços que podem ser reutilizados por outras partes da aplicação.

### 4. Includes
Relacionado a arquivos que são incluídos na camada de View.

