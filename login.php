<?php


$login = $_POST['login'];
$senha = $_POST['senha'];


if ($login == "chuck" && $senha == "noris") {
       header('Location: principal.php');
} else {
   header('Location: index.php');
}       

 

?>