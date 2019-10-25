<?php
session_start();

//usuwanie ciasteczek
setcookie ("id", "", time() - 3600);
setcookie ("nick", "", time() - 3600);
setcookie ("gender", "", time() - 3600);

//usuwanie sesji
$_SESSION = array();
session_destroy();

header('Location: index.php');