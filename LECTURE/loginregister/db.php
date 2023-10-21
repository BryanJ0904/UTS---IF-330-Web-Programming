<?php
define('DSN', 'mysql:host=localhost;dbname=login');
define('DBUSER', 'root');
define('DBPASS', '');

$db = new PDO(DSN, DBUSER, DBPASS);
?>