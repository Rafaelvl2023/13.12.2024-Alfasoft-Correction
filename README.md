# Sistema Web de Gerenciamento de Contatos com CRUD em Laravel 10

## Requisitos

Antes de começar, verifique se você tem as seguintes ferramentas instaladas:

- [VS Code](https://code.visualstudio.com/) 
- [PHP](https://www.php.net/) versão X.X ou superior
- [Composer](https://getcomposer.org/) - gerenciador de dependências PHP
- [Node.js](https://nodejs.org/) - para rodar o npm
- [XAMPP](https://www.apachefriends.org/pt_br/index.html)

## Instalação

Siga os passos abaixo para configurar o projeto em sua máquina local:

### 1. Clone o Repositório

Clone o repositório do projeto:

- git clone https://github.com/Rafaelvl2023/alfasoft

### 2. Acesse o Diretório do Projeto

Entre no diretório do projeto:

- cd alfasoft

### 3. Instale as Dependências

Instale as dependências do Composer:

- composer install

Instale as dependências do npm (para o frontend):

- npm install

### 4. Configure o Banco de Dados

Criar .env

- cp .env.example .env

Criar chave da aplciacao

- php artisan key:generate

### 4.1 Criar o Banco de Dados no XAMPP

Abra o phpMyAdmin no XAMPP, acessando http://localhost/phpmyadmin.

- Crie um novo banco de dados com o nome alfasoft.

### 4.2 Configurar as Credenciais do Banco de Dados .env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=alfasoft
DB_USERNAME=root
DB_PASSWORD=

### 5. Execute as Migrations

Execute as migrations para criar as tabelas no banco de dados:

- php artisan migrate

Explicação: O sistema já possui todas as migrations necessárias, então este comando criará as tabelas no banco de dados.

### 6. Execute os Seeders

Execute as seeders para popular o banco com dados de contatos:

- php artisan db:seed --class=ContatoSeeder

### 7. Servidor para rodar a aplicação

- php artisan serve

O servidor será iniciado na URL http://127.0.0.1:8000.

## Funcionalidades

1. Tela Inicial

A tela inicial exibe informações sobre os contatos cadastrados no sistema e fornece um link para a tela de login. Também exibe o número de registros existentes.

2. Tela de Login

A tela de login permite que o usuário acesse o sistema com suas credenciais. Ela também oferece um link para retornar à tela principal ou para se cadastrar no sistema.

3. Tela de Cadastro

Nesta tela, o usuário preenche informações básicas para criar uma conta e ter acesso completo às funcionalidades do sistema.

4. Tela com Formulário de Cadastro de Contatos

A tela de cadastro de contatos permite ao usuário digitar nome, telefone e e-mail para registrar um novo contato.

5. Tela com Todos os Registros de Contatos

Nesta tela, o usuário pode visualizar todos os contatos cadastrados no sistema. Também é possível editar ou excluir contatos. A tela exibe o número total de registros de contatos.
