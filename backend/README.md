### ORIENTACOES
Crie uma pequena API para cadastro de eletrodomésticos contendo recursos para
criação, listagem, edição e remoção de registros.

### Instruções para execução da aplicação
### Se tiver o software instalado, ignorar

Software	DESCRIÇÃO	        Link
Composer	Para instalar as dependências do PHP e Laravel	        https://getcomposer.org/download/
Node 	    Para ter o gerenciador de pacotes: NPM	        https://nodejs.org/en/download
PHP 	    Biblioteca do PHP, que deve ser a versão 8.0.0 ou posterior	        https://www.php.net/downloads.php
YARN	    Gerenciador de pacotes em JavaScript	        https://classic.yarnpkg.com/lang/en/docs/install/#windows-stable
Git	        Sistema de controle de versões distribuído	        https://git-scm.com/downloads
MySQL	    Sistema de gerenciamento de banco de dados	        https://dev.mysql.com/downloads/installer/
DBeaver	    Aplicativo de software cliente SQL e uma ferramenta de administração de banco de dados	
https://dbeaver.io/download/

Após a instalação de todos os softwares mencionados anteriormente, siga os seguintes passos:

1.	Faça o clone (download) do repositório do projeto em sua máquina local, criando uma pasta com o nome de “grupo_plan_marketing” e executando o seguinte comando, dentro da pasta:

- git clone https://github.com/milanitechnology/grupo_plan_marketing.git .
(copiar inclusive o ponto no final do comando)

2.	Use o seguinte comando para instalar o composer:
- composer install

3.  Execute o seguinte comando para gerar a chave:
- php artisan key:generate

4. Inicie o servidor MySQL, abrindo um novo terminal e executando o seguinte comando (Windows):
- mysqld

5.	Abra o software DBeaver, e crie uma nova database, com o nome de “laravel”. Em seguida, rode as migrations, executando o seguinte comando, na pasta do projeto:
- php artisan migrate 

6.	Para executar o aplicativo, você precisa rodar o seguinte comando no diretório do projeto:
- php artisan serve

7.	Agora navegue até o endereço fornecido no terminal (normalmente é http://127.0.0.1:8000/), e você verá que seu aplicativo está em execução.

### AUTOR: GABRIEL MILANI
### DUVIDAS, ENTRE EM CONTATO





