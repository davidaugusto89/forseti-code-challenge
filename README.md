# CODE CHALLENGE - FORSETI

Um dos processos mais repetitivos para a nossa equipe - e que gera grande valor à empresa - é manter nossos clientes informados das noticias do mundo das licitações.

E quando falamos em licitações, o portal Comprasnet é a grande referência na captura de oportunidades e notícias usada em nossas plataformas.

## Requisitos básicos

> PHP >= 7.4

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
git clone -b develop https://github.com/davidaugusto89/forseti-code-challenge.git forseti-code-challenge
cd forseti-code-challenge
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
```
## Guia para Acessar o Sistema

Para inciar o servidor após instalar, execute o comando:

```sh
php artisan serve
```

URL para acesso:

```sh
http://127.0.0.1:8000/noticias
```