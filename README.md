# PHP_LARAVEL
### Mini Curso dado na Semana da Engenharia de Software da Unifae.

Ministrado por: Maria Eduarda de Oliveira Furini e Vinícius Mendes Santos

## Guide Laravel
[](url)https://laravel.com/docs/11.x/sanctum

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

4. Criar models
   
5. Criar controllers, views e rotas (ordem sem importância)

6. Instalar extensões
```
composer require laravel/sanctum

# instalando laravel sanctum (gera o access_token pra login)
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
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

> [!NOTE]
> COMANDOS DE MODELS
> 1. Criar model
>   ```
>   # por padrão o nome do model é o nome da sua respectiva tabela no singular
>   php artisan make:model nomedomodel
>   ```

> [!NOTE]
> COMANDOS DE CONTROLLERS
> 1. Criar controller
>   ```
>   php artisan make:controller Nomecontroller+Controller
>   ```
