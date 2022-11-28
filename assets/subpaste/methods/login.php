<?php

require_once('conn.php');

$userlogin = $_POST['userlogin'];
$password = md5($_POST['password']);

//sql selecionando tudo que há na tabela users para fazer a checagem se existe um usuario no banco de dados
$sql = 'SELECT * FROM users WHERE userlogin=:userlogin AND password=:password';
$result = $conn->prepare($sql); // variavel recebendo a conexao com banco de dados e e preparando para executar  
$result->execute(['userlogin' => $userlogin, 'password' => $password]);
$user = $result->fetch(); //variavel para checar se existe algum usuario no banco de dados, se existir ela retornará um usuario
// 


if(!empty($user)){
    session_start();

    $_SESSION['id'] = $user['id'];
    $_SESSION['name'] = $user['name'];
    $_SESSION['userlogin'] = $user['userlogin'];
    header('Location: ../index.php');
}else{
    header('Location: ../pages/erro.page.php');
};


?>