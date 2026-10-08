# Projeto Laravel — CRUD de Produtos

Projeto simples desenvolvido durante as aulas do **DevMenthors**, com o objetivo de praticar os fundamentos do Laravel: rotas, controllers, models, migrations, validação e views com Blade.

A aplicação é um **CRUD de produtos** (cadastrar, listar, editar e excluir), com banco de dados SQLite.

## Funcionalidades

- Listar produtos cadastrados
- Cadastrar novo produto (nome e preço)
- Editar produto
- Excluir produto
- Validação dos campos e mensagens de sucesso após editar/excluir

## Tecnologias

- PHP 8.3+
- Laravel 13
- SQLite
- Blade (views) + CSS próprio (`public/css/styles.css`)

## Estrutura principal

| Arquivo | Descrição |
| --- | --- |
| `routes/web.php` | Rotas da aplicação |
| `app/Http/Controllers/ProdutoController.php` | Lógica do CRUD (index, store, edit, update, destroy) |
| `app/Models/Produto.php` | Model Eloquent (`nome`, `preco`) |
| `database/migrations/*_criar_produtos_tabela.php` | Tabela `produtos` (`id`, `nome`, `preco`, `timestamps`) |
| `resources/views/produtos/` | Views: `index`, `criar` e `editar` |

### Rotas

| Método | URL | Ação |
| --- | --- | --- |
| GET | `/` | Página inicial |
| GET | `/produtos` | Lista os produtos |
| GET | `/produtos/criar` | Formulário de cadastro |
| POST | `/produtos/criar` | Salva um novo produto |
| GET | `/produtos/{id}/editar` | Formulário de edição |
| PUT | `/produtos/{id}` | Atualiza o produto |
| DELETE | `/produtos/{id}` | Exclui o produto |

## Pré-requisitos

- [PHP 8.3+](https://www.php.net/downloads) e [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) e npm
- [Git](https://git-scm.com/)

> No Windows, o [Laravel Herd](https://herd.laravel.com/) já instala PHP, Composer e Node para você.

## Clonando e rodando localmente

```bash
# 1. Clonar o repositório
git clone https://github.com/VitorAraujo63/projeto-laravel.git
cd projeto-laravel

# 2. Instalar as dependências do PHP
composer install

# 3. Criar o arquivo de ambiente e gerar a chave da aplicação
cp .env.example .env
php artisan key:generate

# 4. Criar o banco SQLite e rodar as migrations
php artisan migrate
(caso ele pergunte algo, coloque "yes" e de "enter")

# 5. Iniciar o servidor
php artisan serve
```

Acesse **http://localhost:8000/produtos**.

Atalho: `composer setup` executa a maior parte dos passos acima (install, `.env`, key, migrate, npm install e build).

## Usando com o Laravel Herd (Windows)

O [Herd](https://herd.laravel.com/) serve projetos Laravel automaticamente, sem precisar do `php artisan serve`.

1. Baixe e instale o **Herd para Windows** em https://herd.laravel.com/windows.
2. Clone o projeto **dentro da pasta que o Herd monitora** (por padrão `C:\Users\SEU_USUARIO\Herd`). Abra o PowerShell e execute (uma linha por vez):
   ```powershell
   cd $HOME\Herd
   git clone https://github.com/VitorAraujo63/projeto-laravel.git
   cd projeto-laravel
   ```
   > Se o projeto já estiver clonado em outra pasta, abra o Herd → **Settings → Sites → Add** e selecione a pasta do projeto. Ou, no PowerShell, dentro da pasta do projeto, rode `"herd link projeto-laravel"`.
3. Dentro da pasta do projeto, prepare a aplicação:
   ```powershell
   composer install
   copy .env.example .env
   php artisan key:generate
   php artisan migrate
   ```
   (caso ele pergunte algo, coloque "yes" e dê "enter")
4. Acesse no navegador: **http://projeto-laravel.test/produtos**

O endereço segue o nome da pasta/link (`nome-da-pasta.test`). Para usar HTTPS, rode `herd secure` na pasta do projeto.

Ajuste também a `APP_URL` no `.env` para o endereço do Herd, por exemplo `APP_URL=http://projeto-laravel.test`.

## Autor

Projeto desenvolvido por [VitorAraujo63](https://github.com/VitorAraujo63) durante as aulas da DevMentors.

### Em caso de qualquer dúvida ou problema, me chamar no privado.
