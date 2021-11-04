## Desafio Olivias Digital

Projeto feito para vaga de emprego na empresa TruckPag.

### Instalação: 
* Você precisará do PHP instalado em seu computador, [BAIXE AQUI](https://www.php.net/downloads). 
* Na raiz do projeto use o comando `composer install`. 
* No arquivo `.ENV` edite o campo `DB_CONNECTION` e coloque os dados do seu banco de dados.
* Use o comando `php artisan migrate:fresh --seed` para fazer as migrações e propagar o banco.
* Use o comando `php artisan serve` para rodar em seu servidor.
* Navegue para `http://127.0.0.1:8000/`. O aplicativo será carregado automaticamente.

### Uso:
Cadastrar endereço (use o POSTMAN) com a rota `localhost:8000/api/address` e você deverá obter uma resposta bem-sucedida como esta:

![Register](https://i.imgur.com/COrxPMB.png)

### Lista de todas as APIs:
Method   | Descrição | Rota
:--------- | :------ | :------
GET | Listar cidades | `localhost:8000/api/cities`
GET | Listar endereços | `localhost:8000/api/address`
POST | Cadastrar endereço | `localhost:8000/api/address`
PUT | Atualizar endereço | `localhost:8000/api/address/1`
DELETE | Excluir endereço | `localhost:8000/api/address/1`

