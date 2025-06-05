<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Observações necessárias:
### Instalação da pasta vendor:
>> composer install (No terminal).
### No terminal digite:
>> cp .env.example .env para caso não encontrar o .env na instalação.
### Configurar o DB_ no env e logo após aplicar o comando:
>>> php artisan migrate
### Para caso peça a chave de aplicação: 
>> php artisan key:generate
### Utilize os quatro comandos abaixo para limpeza de cache e configurações:
>> php artisan cache:clear

>> php artisan config:clear

>> php artisan route:clear

>> php artisan view:clear

### Criação do bd:
>> CREATE DATABASE IF NOT EXISTS crud_laravel;

>> create table endereco (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cep VARCHAR(10) NOT NULL,
    endereco VARCHAR(200) NOT NULL,
    bairro VARCHAR(100) NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    estado VARCHAR(2) NOT NULL,
    numero VARCHAR(10) NOT NULL
);

>> create table usuario (
    id INT not null AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    idade INT NOT NULL,
    contato VARCHAR(20) NOT NULL,
    endereco_id INT NOT NULL,
    FOREIGN KEY (endereco_id) REFERENCES endereco(id) ON DELETE CASCADE
);

### Configuração do .env:

>> DB_CONNECTION=mysql
>> 
>> DB_HOST=127.0.0.1
>> 
>> DB_PORT=3306
>> 
>> DB_DATABASE=crud_laravel
>> 
>> DB_USERNAME=root
>> 
>> DB_PASSWORD=root

>> SESSION_DRIVER=database
