<?php

setcookie('user_id', $user_id, time() + -3600, '/');
setcookie('first_name', $first_name, time() + -3600, '/');
setcookie('last_name', $last_name, time() + -3600, '/');

header("Location: homepage.php");

?>