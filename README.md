# ci4-ordem
Curso da Udemy 

# ORDEM (Udemy)

composer create-project codeigniter4/appstarter ci4-ordem
php spark serve

# Renomear arquivo "env" para ".env"
	setar baseURL
	Alterar CI_ENVIRONMENT para development >> Dessa forma, os erros sao exibidos no browser
	
# No arquivo routing.php
	Alterar propriedade $autoRoute = true; >> Para que os controllers e os metodos possam ser encontrados.

php spark make:controller  >> Cria um novo controller
    Teste

Endereço/<Controller>/<metodo>

# PHP My Admin
	http://localhost:81/phpmyadmin/
	utf8mb4_general_ci

	database.default.hostname = 127.0.0.1
	database.default.database = teste-ci4

	php spark migrate >> Cria a tabela de migrações (se nao tiver) e rodas todas migrações
	
# Migration
	Ref: https://codeigniter.com/user_guide/dbmgmt/migration.html 
	Criar o arquivo de migration >> php spark make:migration <nome da migration>
	Rodar as migrações >> php spark migrate
	