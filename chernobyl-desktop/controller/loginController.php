<?php

//if ($_GET) {
//    //echo('funcionou....');
//    //print_r($_GET);
//    $nome = $_GET['nome'];
//    $senha = $_GET['senha'];
//    
//    if ($nome == 'a' && $senha == 'a') {
//        
//        //Cria a sessão "login"
//        session_start();
//        $_SESSION['nome'] = $nome;
//        //Se o usuário e senha estiver correta 
//        //redireciona para a home.
//        header('location:../home.php');
//    } else {
//        //Caso contrário redireciona para a index
//        //com o código de erro.
//        header('location:../index.php?cod=171');
//    }
//} else {
//    //redireciona a navegação para a pagina informada.
//    header('location:../index.php');
//}