<?php
define('DSN', 'mysql:host=localhost;dbname=webprog');
define('DBUSER', 'root');
define('DBPASS', '');

$db = new PDO(DSN, DBUSER, DBPASS);
?>