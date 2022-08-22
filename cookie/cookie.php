<?php
/* COOKIE >>> é um arquivo criado pelo servidor no computador do utilizador para armazenar algumas informações
ou seja
é um simples arquivo de texto que pode ser visualizado pelo navegador
*/

setcookie('user', 'Glédse Jamisse', time()+3600); // time()+3600 é a validade desse cookie >>> esta em segundos que corresponde a 1h 

setcookie('email', 'gledsejamisse13@gmail.com', time()-3600);// para remover cookie usamos o -

setcookie('ultima_pesquisa', 'Toyota Auris', time()+3600); 
var_dump($_COOKIE);
echo $_COOKIE['ultima_pesquisa'];

// php -S localhost:8000 >>> http://localhost/cursophp.com/cookie/cookie.php