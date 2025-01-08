# Instruções para Configuração do Projeto Laravel com Breeze

## Atualizar e Instalar Composer

```sh
sudo apt update
sudo apt install composer
composer --version
```

## Criar Projeto Laravel

```sh
composer create-project laravel/laravel nome-do-projeto
cd nome-do-projeto
```

## Configurar Arquivo `.env`

```sh
mv .env.example .env
code .env
```

Edite o arquivo `.env` com as seguintes informações:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=sua-senha
```

## Criar Banco de Dados

```sql
CREATE DATABASE laravel;
```

## Instalar Laravel Breeze

```sh
composer require laravel/breeze --dev
php artisan breeze:install
npm install
npm run dev
```

## Migrar Banco de Dados

```sh
php artisan migrate // Use `migrate:fresh` para renovar o banco
```

## Servir Aplicação

```sh
php artisan serve --port 8080 // Escolha a porta
```

## Criar Componentes Livewire

```sh
php artisan make:livewire auth.navigation
php artisan make:livewire Tasks

php artisan make:model

 php artisan make:livewire tasks.tasks-index
