# 🚀 Docker PHP + MySQL App

Este projeto é um **exemplo de microsserviço em Docker**, utilizando **PHP-FPM, Nginx e MySQL**, pronto para rodar em qualquer máquina que tenha Docker e Docker Compose.  

Ele demonstra:  

- 🔗 Conexão entre PHP e MySQL dentro de containers Docker  
- ⚙️ Configuração do Nginx para servir aplicações PHP  
- 🗄 Criação automática de banco de dados e tabela via arquivo SQL  
- ✨ Inserção de registros aleatórios no banco a cada acesso à página PHP  
- 📊 Dashboard web que mostra todos os registros da tabela `dados`  

---

## 🛠 Tecnologias utilizadas

- 🐳 Docker & Docker Compose  
- 🐘 PHP 8.2 (FPM)  
- 🌐 Nginx  
- 🗄 MySQL 8.0  

---

## ⚡ Como rodar o projeto

1. Clone o repositório:

```bash
git clone https://github.com/seu-usuario/docker-php-mysql-app.git
cd docker-php-mysql-app```

2. Suba os containers:

```bash
docker-compose up --build

3. Abra no navegador:

```bash
http://localhost:4500

🔄 Cada refresh da página insere um novo registro na tabela dados do MySQL e exibe todos os registros na tabela HTML.

4. Para acessar o MySQL via terminal:

```bash
docker exec -it meu_db mysql -uroot -p
# Senha: Senha123

USE meubanco;
SELECT * FROM dados;

💡 Próximos passos / melhorias

📝 Adicionar formulário para cadastro manual de alunos

✅ Validação de dados antes de inserir

🎨 Melhorar estilo da tabela HTML com CSS

🔍 Adicionar filtros e pesquisa na tabela

📦 Containerizar mais serviços (ex.: Redis, API externa)

Feito por Lêda Trindade
