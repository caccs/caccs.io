[![CircleCI](https://circleci.com/gh/caccs/caccs.io/tree/master.svg?style=svg&circle-token=0b5547b6753ce038a5bae5eede1654db6260ceb8)](https://circleci.com/gh/caccs/caccs.io/tree/master)
## CACCS.io
---
Projeto do site do Centro Acadêmico Pata do Bisão com calendário de datas de atividades universitárias e formulários para avaliação de disciplinas. Este projeto têm como intuito concentrar as informações de todas as atividades de interesse dos alunos.

## Utilizando com Docker
---
Construa a imagem:
```bash
$ docker-compose build
```
Migre a base de dados
```bash
$ docker-compose run web rails db:migrate
```
Execute a aplicação pelo Docker
```bash
$ docker-compose up
```
Acesse a aplicação com o seu browser favorito!

### Como Contribuir:
---
1. Fork!
2. Crie um branch para sua versão: `git checkout -b nova-versao`
3. Adicione seus arquivos: `git add -A`
4. Commit suas mudanças: `git commit -am 'Adicionando uma nova versão'`
5. Push para o branch: `git push origin nova-versao`
6. Envie seu pull request :D

O serviço está disponível no `Heroku`, você pode acessar através deste link:
http://caccs-lendario.herokuapp.com/

### Colaboradores do Projeto:
- [@Darkkgreen](https://github.com/Darkkgreen)
- [@eiguike](https://github.com/eiguike)
- [@giovana-morais](https://github.com/giovana-morais)


### Atividades:
|Atividade							|Versão      |Data	    |
| ----------------------------------|:----------:|:------------:|
|	Ported code to Rails			| 1.0.0 |		09/02/2018	|
|	Added RSpecs and CircleCI config files			| 1.0.1 |		19/02/2018	|
| Added mailing to Contact Page | 1.0.2 | 27/02/2018 |
| Added About Page | 1.0.3 | 03/03/2018 |
| Added User Model and Controller | 1.0.4 | 13/03/2018 |
| Refactored forms, auth and Front | 1.0.6 | 19/03/2018 |

