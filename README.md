# PHP_LARAVEL
### Mini Curso dado na Semana da Engenharia de Software da Unifae.

Ministrado por: Maria Eduarda de Oliveira Furini e Vinícius Mendes Santos

## Inicializando
1. Criar o projeto com composer
```
composer create-project laravel/laravel nome-do-projeto
```
2. Configurar .ENV com as credenciais do banco de dados

3. Gerar a chave única para startar o servidor
```
# dentro da pasta do projeto
php artisan key:generate
```

> [!NOTE]
> COMANDOS DE MIGRATIONS
> 1. Criar migrate
>   ```
>   php artisan make:migration create_nomedatabela_table
>   ```
> 2. Rodar migrate
>   ```
>   php artisan migrate
>   ```
> 3. Rollback migrate
>   ```
>   php artisan migrate:rollback
>   ```
