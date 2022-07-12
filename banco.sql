CREATE DATABASE IF NOT EXISTS aulaPHP;

use aulaPHP;

CREATE TABLE IF NOT EXISTS aula (
    id int auto_increment primary key,
    tamanho varchar(20),
    peso varchar(20),
    idade varchar(20)
)