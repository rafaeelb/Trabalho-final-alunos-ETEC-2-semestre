<?php 
    require('connect.php');
    extract($_POST);

    $senhaatual = md5($senhaatual);
    $novasenha = md5($novasenha);
    $novasenha1 = md5($novasenha1);

    $msg = "";

    $busca = mysqli_query($con, "SELECT * FROM `tb_contatos` WHERE `codigo` = '$codigo'");
    $aluno = mysqli_fetch_array($busca);

    if ($novasenha === $novasenha1) {
        if ($senhaatual == $aluno['senha']) {
            $msg = "Senha alterada com sucesso!";
            mysqli_query($con, "UPDATE `tb_contatos` SET `senha` = '$novasenha' WHERE `codigo` = '$codigo'");
        } else {
            $msg = "Erro ao alterar!";
        }
    } else {
        $msg = "As senhas não conferem";
    }

    @session_start();
    $_SESSION['msg'] = $msg;
    header("location: alterarsenha.php?codigo=$codigo");
?>
