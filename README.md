🔧 Tecnologias

PHP 8.4

Laravel 10

SQLite

Swagger (via L5-Swagger)

Composer

PSR-4 (autoload)

🚀 Instalação
Pré-requisitos

PHP >= 8.4

Composer

SQLite (instalado no Ubuntu: sudo apt install sqlite3)

Git

Passos

Clone o repositório:

git clone <seu-repo-aqui> microerp
cd microerp


Instale as dependências:

composer install


Configure o ambiente:

cp .env.example .env
php artisan key:generate


Configure o SQLite (caso ainda não tenha criado o arquivo):

touch database/database.sqlite


E no .env ajuste:

DB_CONNECTION=sqlite
DB_DATABASE=/caminho/para/seu/projeto/database/database.sqlite


Execute as migrações:

php artisan migrate


Gere a documentação Swagger:

php artisan l5-swagger:generate

📦 Estrutura do Projeto
app/
├── Http/
│   ├── Controllers/
│   ├── Kernel.php
├── Models/
├── Repositories/
├── Services/
└── Swagger/
config/
├── l5-swagger.php
routes/
└── api.php

🗂 Endpoints da API

A API segue o padrão REST.

Customers
Método	Endpoint	Descrição
GET	/api/customers	Lista todos clientes
GET	/api/customers/{id}	Mostra cliente pelo ID
Products
Método	Endpoint	Descrição
GET	/api/products	Lista todos produtos
POST	/api/products	Cria um produto
GET	/api/products/{id}	Mostra produto pelo ID
PUT	/api/products/{id}	Atualiza produto
DELETE	/api/products/{id}	Deleta produto
Invoices
Método	Endpoint	Descrição
GET	/api/invoices	Lista todas faturas
POST	/api/invoices	Cria uma fatura
GET	/api/invoices/{id}	Mostra fatura pelo ID
PUT	/api/invoices/{id}	Atualiza fatura
DELETE	/api/invoices/{id}	Deleta fatura
Swagger UI

Acesse a documentação interativa em:

http://127.0.0.1:8000/docs

🔐 Injeção de Dependência

O projeto utiliza Service Providers para injeção de dependência, ligando Interfaces aos Repositories:

$this->app->bind(
    \App\Interfaces\Repositories\CustomerRepositoryInterface::class,
    \App\Repositories\CustomerRepository::class
);

💡 Boas Práticas

Seguir SOLID e Clean Architecture

Controllers delegam lógica para Services

Services delegam acesso a dados para Repositories

Todas as models utilizam Eloquent ORM

⚡ Comandos úteis

Limpar cache de configuração: php artisan config:clear

Limpar cache de rotas: php artisan route:clear

Gerar documentação Swagger: php artisan l5-swagger:generate

Rodar servidor local: php artisan serve
