<?php
session_start();
ob_start();

define('URL', 'http://localhost/php_site/');
define('URLADM', 'http://localhost/php_site/adm/');

define('CONTROLER', 'Home');
define('METODO', 'index');

//Credenciais de acesso ao BD
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'trcvbr18');
define('DBNAME', 'php_admin');
