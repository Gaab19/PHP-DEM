<?php

include('conexao2.php');

$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$select = "select nome,login,senha from login
where login = '$login' and senha= '$senha' ";
$execute = mysqli_query($conexao,$select);
$dados = mysqli_fetch_row($execute);

if($login == $dados[1] && $senha == $dados[2]){
    header('location:index2.php');
    session_start();
    $_SESSION['nome'] = $dados[0];

}else{
   header('location:login2.php');
}

?>