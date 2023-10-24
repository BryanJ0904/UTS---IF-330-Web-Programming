<?php

setcookie('user_id', $user_id, time() + -3600, '/');
setcookie('user_name', $user_name, time() + -3600, '/');
setcookie('last_name', $last_name, time() + -3600, '/');
header("Location: ../index.php");

?>