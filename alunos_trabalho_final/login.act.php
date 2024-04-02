<?php 
    require('connect.php');
    extract($_POST);
    $senha = md5($senha);
    $busca = mysqli_query($con, "Select * from `tb_contatos` where `email` = '$email'");
    session_start();
    $destino = "location:login.php";
    if($busca -> num_rows == 1){
        //encontrou um email
        $aluno = mysqli_fetch_array($busca);
        if($senha == $aluno['senha']){
            // a senha está correta
            //criar a sessão
            $_SESSION['logado'] = true;
            $_SESSION['nome'] = $aluno['nome'];
            $destino = "location:listar.php";
        }
    }else{
        $msg = "Email ou senha inválido!";
        $destino ="location:login.php";
    }

    header($destino);

?>