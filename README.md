# 🚀 Scope App – Laravel 8 + Passport + Docker

Projeto base com **Laravel 8** usando autenticação OAuth2 via **Laravel Passport**, containerizado com **Docker** e banco de dados **MySQL 8**. Ideal para desenvolvimento de APIs RESTful com controle de acesso por escopos e perfis de usuário como **Enfermeiros**, **Auxiliares** e **Supervisores**.

---

## 📦 Stack Utilizada

- **PHP** ^8.1
- **Laravel** ^8.75
- **MySQL** 8.0
- **Laravel Passport** ^10.4
- **Laravel Sanctum** ^2.11
- **Docker / Docker Compose**
- **Redis** (cache)
- **Guzzle HTTP Client**
- **Laravel CORS**
- **Composer**

---

## 📁 Estrutura dos Containers

```yaml
services:
  app:        # Container da aplicação Laravel
  mysql:      # Banco de dados MySQL
  redis:      # Cache Redis (opcional, mas já incluído)

## ⚙️ Instalação

```bash
# 1. Clone o repositório
git clone https://github.com/tarmaxz/scope-app.git
cd scope-app

# 2. Copie o arquivo .env
cp .env.example .env

# 3. Suba os containers Laravel, MySQL e Redis (se aplicável)
docker-compose up --build -d

# 4. Instale as dependências do Laravel dentro do container
docker exec -it scope-app composer install

# 5. Gere a chave da aplicação
docker exec -it scope-app php artisan key:generate

# 6. Configure o .env se necessário:
# Variáveis de conexão com o banco dentro do Docker:
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=api_scope
DB_USERNAME=admin
DB_PASSWORD=admin

# Conexão com o Redis
CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis
REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379

# 7. Rode as migrations e seeders (se houver)
docker exec -it scope-app php artisan migrate --seed

# 8. Instale o Passport
docker exec -it scope-app php artisan passport:install
