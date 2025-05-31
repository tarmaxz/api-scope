# 🚀 Scope App – Laravel 8 + Passport + Docker

Projeto base Laravel 8 com autenticação OAuth2 usando **Laravel Passport**, rodando com **Docker** e banco **MySQL 8**. Ideal para APIs RESTful com escopos e controle de acesso baseado em tipos de usuário (ex: Enfermeiros, Auxiliares, Supervisores).

---

## 📦 Stack utilizada

- PHP ^7.3 | ^8.0
- Laravel ^8.75
- MySQL 8
- Laravel Passport ^10.4
- Laravel Sanctum ^2.11
- Docker / Docker Compose
- Guzzle HTTP Client
- Laravel CORS

---

## 📁 Estrutura dos Containers

```yaml
version: '3'
services:
  app: Laravel + Passport
  mysql: Banco de dados
