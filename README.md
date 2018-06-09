## Get Started

- git clone https://github.com/jeffalexandro/prova-back-end-feng.git
- cd prova-back-end-feng
- composer install
- cp .env.example .env
- php artisan key:generate
- Agora edite manualmente as configurações de acesso ao banco de dados no arquivo .env
- php artisan migrate:fresh --seed

Pronto, basta acessar localhost/api/ (ou qualquer que seja a pasta ou domínio de instalação).

## Teste Online

- [Testar Requisição](http://testesjefferson.tk/prova-back-end-feng/api/)
