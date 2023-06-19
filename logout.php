<?php

session_start();
$_SESSION['nome'] = null;
session_destroy();
header('location:tela-de-login.html');


?>