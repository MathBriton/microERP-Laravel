# ![microERP](https://img.shields.io/badge/microERP-Laravel-orange) microERP

**microERP** é um sistema ERP simplificado desenvolvido em **PHP 8.4** usando **Laravel**, **SQLite**, arquitetura **REST**, padrões **SOLID** e documentação via **Swagger (OpenAPI)**.

Inclui módulos de **Clientes (Customer)**, **Produtos (Product)**, **Faturas (Invoice)** e **Itens de Fatura (InvoiceItem)** com **Controllers, Services e Repositories** seguindo PSR-4.

---

## 🚀 Tecnologias Utilizadas

![PHP](https://img.shields.io/badge/PHP-8.4-blue)
![Laravel](https://img.shields.io/badge/Laravel-10-red)
![SQLite](https://img.shields.io/badge/SQLite-lightgrey)
![Swagger](https://img.shields.io/badge/Swagger-OpenAPI-yellowgreen)
![Composer](https://img.shields.io/badge/Composer-v2.7-blue)

---

## 📦 Estrutura do Projeto

```
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
database/
.env
composer.json
README.md
```

---

## ⚡ Instalação Rápida

### Pré-requisitos

* PHP >= 8.4
* Composer
* SQLite (`sudo apt install sqlite3`)
* Git

### Passos

```bash
# Clonar o projeto
git clone <seu-repo-aqui> microerp
cd microerp

# Instalar dependências
composer install

# Configurar ambiente
cp .env.example .env
php artisan key:generate

# Criar banco SQLite
touch database/database.sqlite

# Atualizar .env
DB_CONNECTION=sqlite
DB_DATABASE=/caminho/para/database/database.sqlite

# Executar migrações
php artisan migrate

# Gerar documentação Swagger
php artisan l5-swagger:generate

# Rodar servidor local
php artisan serve
```

---

## 📖 Endpoints da API

A API segue o padrão **REST**.

### Customers

| Método | Endpoint              | Descrição             |
| ------ | --------------------- | --------------------- |
| GET    | `/api/customers`      | Listar todos clientes |
| GET    | `/api/customers/{id}` | Buscar cliente por ID |

### Products

| Método | Endpoint             | Descrição             |
| ------ | -------------------- | --------------------- |
| GET    | `/api/products`      | Listar todos produtos |
| POST   | `/api/products`      | Criar produto         |
| GET    | `/api/products/{id}` | Buscar produto por ID |
| PUT    | `/api/products/{id}` | Atualizar produto     |
| DELETE | `/api/products/{id}` | Deletar produto       |

### Invoices

| Método | Endpoint             | Descrição            |
| ------ | -------------------- | -------------------- |
| GET    | `/api/invoices`      | Listar todas faturas |
| POST   | `/api/invoices`      | Criar fatura         |
| GET    | `/api/invoices/{id}` | Buscar fatura por ID |
| PUT    | `/api/invoices/{id}` | Atualizar fatura     |
| DELETE | `/api/invoices/{id}` | Deletar fatura       |

### Swagger UI

Acesse a documentação interativa:

[http://127.0.0.1:8000/docs](http://127.0.0.1:8000/docs)

---

## 🔄 Injeção de Dependência

O projeto segue **Service Provider** para injeção de dependência:

```php
$this->app->bind(
    \App\Interfaces\Repositories\CustomerRepositoryInterface::class,
    \App\Repositories\CustomerRepository::class
);
```

---

## 💡 Boas Práticas

* **SOLID e Clean Architecture**
* Controllers delegam lógica para **Services**
* Services delegam acesso a dados para **Repositories**
* Models usam **Eloquent ORM**
* Documentação via **Swagger / OpenAPI**

---

## 📝 Comandos Úteis

```bash
# Limpar cache de configuração
php artisan config:clear

# Limpar cache de rotas
php artisan route:clear

# Gerar documentação Swagger
php artisan l5-swagger:generate

# Rodar servidor local
php artisan serve
```

