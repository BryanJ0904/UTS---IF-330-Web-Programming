<?php

setcookie('user_id', $user_id, time() + -3600, '/');

header("Location: login.php");

?>