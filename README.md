# Desafio PRODEMGE-API

## Desenvolvedor

- Anderson Belderrama - andersonbelderrama@gmail.com

## Endpoints Pesquisa

- Consulta uma pessoa pelo identificador 1
`/api/people/search?id=1` 

- Consulta pessoas pelo CPF 12345678900
`/api/people/search?cpf=12345678900` 

- Consulta pessoas cujo nome contém "Fulano"
`/api/people/search?name=Fulano` 

## Comandos

- Preparar projeto para dev ou prod

`composer install`

`php artisan generate:key`


- Gerar estrtura de banco de dados

`php artisan migrate:fresh`

- Gerar estrtura de banco de dados populado com dados fake

`php artisan migrate:fresh --seed`


- Testar com ambiente docker

`./vendor/bin/sail up -d`

