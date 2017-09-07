# Cesta de Interpretes

Cesta de Interpretes é um website destinado a fazer a conexão entre interpretes e quem precisa de seus serviços.



### Pré-requisitos


```
PHP >= 7.0.0
MySQL
Composer
```

### Instalação

Realize o download do repositório (zip ou clone):

```
git clone https://github.com/LaDeSP/cesta-de-interpretes.git
```


Crie uma cópia do arquivo <i>.env.example</i> com o nome de <b>.env</b> e edite os seguintes campos:
```
DB_DATABASE=nome do banco
DB_USERNAME=usuário
DB_PASSWORD=senha
```


Através do terminal, navegue até a pasta que acabou de clonar e execute os seguintes comandos:
```
php artisan key:generate
composer install
php artisan migrate
```

E pronto! Só iniciar o servidor:
```
php artisan serve
```
E acessar o link que apareceu no terminal.

## Ferramentas utilizadas

* [Laravel 5.5](https://laravel.com) - Framework PHP
* [MySQL](https://www.mysql.com/) - Banco de dados
* [Composer](https://getcomposer.org/) - Gerenciador de dependências PHP
* [Entrust](https://github.com/Zizaco/entrust/) - Pacote User-Role para Laravel 5 by Zizaco
