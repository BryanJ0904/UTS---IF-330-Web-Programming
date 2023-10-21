<?php
define('DSN', 'mysql:host=localhost;dbname=webproglab');
define('DBUSER', 'root');
define('DBPASS', '');

$db = new PDO(DSN, DBUSER, DBPASS);
?>