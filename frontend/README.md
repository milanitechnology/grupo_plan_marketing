## ORIENTACOES

Crie uma pequena API para cadastro de eletrodomésticos contendo recursos para
criação, listagem, edição e remoção de registros. Um registro de eletrodoméstico deve
conter, pelo menos, as seguintes informações:

● Nome (Ex: Geladeira Frost Free)
● Descrição (Ex: Este produto é totalmente versátil. Tudo para ser
personalizado para comportar o que você preferir.)
● Tensão (Ex: 220v)
● Marca

Listagem das possíveis marcas:
● Electrolux
● Brastemp
● Fischer
● Samsung
● LG

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

## 1 passo
```
- npm install
```

### 2 passo
```
- npm run serve
- abra o link gerado no terminal no navegador 
```

### ERROS
CASO DÊ O SEGUINTE ERRO:
opensslErrorStack: [ 'error:03000086:digital envelope routines::initialization error' ],

FAÇA: 
Habilite o legacy OpenSSL provider (copie o código e execute, depois tente npm run serve novamente).

Se for Unix (Linux, macOS, Git bash, etc.):
- export NODE_OPTIONS=--openssl-legacy-provider

No Windows (CMD):
- set NODE_OPTIONS=--openssl-legacy-provider

No PowerShell:
- $env:NODE_OPTIONS = "--openssl-legacy-provider"
