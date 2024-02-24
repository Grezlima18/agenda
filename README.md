# Agenda

Bem-vindo ao projeto de uma agenda em Laravel! Siga as instruções abaixo para configurar o ambiente de desenvolvimento.

## Pré-requisitos

- [PHP](https://www.php.net/) (versão recomendada >= 7.3)
- [Composer](https://getcomposer.org/)
- [PostgreSQL](https://www.postgresql.org/) (ou qualquer outro banco de dados de sua escolha)

## Configuração do Ambiente

1. **Clone o repositório:**

   ```bash
   git clone https://github.com/Grezlima18/agenda.git

2. **Navegue até o diretório do projeto:**

   ```bash
   cd seu-projeto

3. **Copie o arquivo .env.example para .env:**

   ```bash
   cp .env.example .env

4. **Abra o arquivo .env e configure o banco de dados:**

   ```bash
   DB_CONNECTION=pgsql
   DB_HOST=127.0.0.1
   DB_PORT=5432
   DB_DATABASE=nome-do-banco
   DB_USERNAME=nome-do-usuario
   DB_PASSWORD=senha-do-usuario

5. **Crie o banco de dados no PostgreSQL com o nome especificado no .env.**

6. **Instale as dependências do projeto:**
   ```bash
   composer install

7. **Gere a chave de aplicativo Laravel:**
   ```bash
   php artisan key:generate

8. **Execute as migrações para criar as tabelas no banco de dados:**
   ```bash
   php artisan migrate

## Executando o Projeto

Após a configuração, inicie o servidor de desenvolvimento:

   ```bash
    php artisan serve

## O projeto estará disponível em http://localhost:8000 no seu navegador.
## Certifique-se de substituir "seu-usuario" e "seu-projeto" pelos valores reais do seu repositório.
