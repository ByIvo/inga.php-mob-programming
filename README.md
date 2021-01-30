![PHP Composer](https://github.com/ByIvo/inga.php-mob-programming/workflows/PHP%20Composer/badge.svg)

# Ingá.php MobProgramming

Salve pessoas, esse repositório é exclusivamente dedicado as soluções dos desafios propostos durante os encontros da galera do Ingá.php. 

Para participar, é importante que você cumpra todos os [requisitos](#requisitos) mencionados.

### Dependências

1. PHP 7.4.14 (cli) (built: Jan 16 2021 00:10:32) ( NTS )
2. Composer version 2.0.8 2020-12-03 17:20:38
3. PHPUnit 9.5.1 by Sebastian Bergmann and contributors.

### Requisitos

#### Para usuários Docker

```sh
alias composer="docker run -it --rm -v $(pwd):/app composer:2.0.8 composer"
```

#### Instalar a ferramenta de troca de código

Basta acessar o repositório do [mob CLI](https://github.com/remotemobprogramming/mob) e seguir o passo-a-passo.

A instalação foi bem sucedida quando, em seu terminal, você obter uma saída parecida com `v0.0.25` ao executar o comando:

```shell
$ mob -v
```

#### Clonar o repositório

Executar o seguinte comando na sua pasta de projetos:

```shell
git clone git@github.com:ByIvo/inga.php-mob-programming.git
```

 #### Instalar as dependências

Dentro da pasta do projeto, execute

```shell
composer install
```

Na sequência, execute os testes

```shell
composer test
```

Seus testes rodaram com sucesso se em seu terminal existir uma saída como essa:

```shell
PHPUnit 9.5.1 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 00:00.144, Memory: 4.00 MB

OK (1 test, 1 assertion)
```
