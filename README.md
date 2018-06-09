## Get Started

- Copie o repositório remoto: git clone https://github.com/jeffalexandro/prova-back-end-feng.git
- Entre na pasta: cd prova-back-end-feng
- Instale dependências: composer install
- Criar arquivo .env: cp .env.example .env
- Gerar key: php artisan key:generate
- Agora edite as configurações de acesso ao banco de dados no arquivo .env
- Criando e populando tabela: php artisan migrate:fresh --seed

Pronto, basta acessar localhost/api/ (ou qualquer que seja a pasta ou domínio de instalação do passo-a-passo descrito acima).

## Teste Online

- [Teste](http://testesjefferson.tk/prova-back-end-feng/api/).
