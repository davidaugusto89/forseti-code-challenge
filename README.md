# CODE CHALLENGE - FORSETI

Um dos processos mais repetitivos para a nossa equipe - e que gera grande valor à empresa - é manter nossos clientes informados das noticias do mundo das licitações.

E quando falamos em licitações, o portal Comprasnet é a grande referência na captura de oportunidades e notícias usada em nossas plataformas.

## Requisitos básicos

> PHP >= 7.4

> MySQL

> Composer

> Git

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white) ![MySQL](https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white) ![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white) ![HTML 5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white) ![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

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
git clone -b main https://github.com/davidaugusto89/forseti-code-challenge.git forseti-code-challenge
cd forseti-code-challenge
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
```
## Guia para Testes
Para inciar o servidor após instalar, execute o comando:

```sh
php artisan serve
```
### Página Inicial (Home)
![Página Inicial](https://raw.githubusercontent.com/davidaugusto89/forseti-code-challenge/main/public/images/print_pagina_inicial.png)

Nesta página são listadas as últimas 5 notícias importadas para o banco de dados.

URL para acesso:

```sh
http://127.0.0.1:8000/noticias
```

### Página Importar Notícias
![Página Importar Notícias](https://raw.githubusercontent.com/davidaugusto89/forseti-code-challenge/main/public/images/print_pagina_importar.png)

Nesta página são importadas as notícias para o banco de dados, mostrando: 
- Total de Notícias => quantidade total de notícias encontradas
- Novas Notícias => quantidade total de notícias que foram importadas no banco de dados
- Notícias Já Cadastradas => quantidade total de notícias que já estão cadastradas no banco de dados*

* Sistema evita o cadastro duplicado de notícias no banco de dados.

URL para acesso:

```sh
http://127.0.0.1:8000/noticias/importar
```

