<?php

//serve como adm das classes
//acessa sempre a model
//sem codigo sql
//header response -- redireciona

if ($_POST) {
    //vem do formulario via post -- inserir, editar ou logar
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    require_once '../model/usuariosModel.php';
    //cria um objeto do tipo usuario
    $user = new usuariosModel();

    if ($user->login($email, $senha) == 1) { // usuario acertou email e senha
        session_start();
        $_SESSION['id'] = $user->getId(); //armazena id do usuario
        $_SESSION['login'] = $user->getNome(); //busca nome do usuario
        
        //cookie
        if (isset($_POST['rememberMe'])) {
            //cria o cookie
            echo "ok";
            setcookie('rememberMe', $email, time() + (86400 * 30), "/"); // 86400 = 1 day
        }
        //nao armazena senha em session
        header('location:../inicio.php');
        exit();
    } else {
        header('location:../index.php?cod=171');
    }
} else if ($_REQUEST) {
    //excluir
} else {
    //exibir
}
?>


