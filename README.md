
## ✅ Requisitos

Antes de iniciar, verifique se você tem instalado:

- [PHP 8.2+](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Node.js 20+](https://nodejs.org/)

---

## 🚀 Como Rodar o Projeto

1. **Clone o repositório:**

   ```bash
   git clone https://github.com/seu-usuario/nome-do-projeto.git
   cd nome-do-projeto
   ```

2. **Configure o ambiente:**

   - Duplique o arquivo `.env.example` e renomeie para `.env`:
     ```bash
     cp .env.example .env
     ```
   - Atualize as credenciais do banco de dados no arquivo `.env`.

3. **Instale as dependências do PHP:**

   ```bash
   composer install
   ```

4. **Instale as dependências do Node.js:**

   ```bash
   npm install
   ```

5. **Gere a chave da aplicação:**

   ```bash
   php artisan key:generate
   ```

6. **Execute as migrations:**

   ```bash
   php artisan migrate
   ```

7. **Inicie o servidor Laravel:**

   ```bash
   php artisan serve
   ```

8. **Compile os assets do frontend:**

   ```bash
   npm run dev
   ```

9. **Acesse o projeto no navegador:**

   ```
   http://127.0.0.1:8000
   ```

### Instalar Bootstrap e SASS:

```bash
npm install --save bootstrap @popperjs/core
npm install --save-dev sass
```

---
