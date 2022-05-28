# Sistema de Notícias

Sistema de notícias em PHP com cadastro de notícias, listagem e busca.

## Requisitos básicos

> PHP >= 7.3

> MySQL

> Composer

> Git

## Guia de Instalação

O banco de dados deve ser criado localmente, com as seguintes configurações:

```sh
Host = 'localhost'
Usuário = 'root'
Senha = ''
Nome do banco de dados = 'forseti-code-challenge'
```

Para instalar a aplicação deve ser executados os seguintes comandos no terminal.

```sh
git clone -b develop https://github.com/davidaugusto89/sistema-noticias.git sistema-noticias
cd sistema-noticias
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
```
