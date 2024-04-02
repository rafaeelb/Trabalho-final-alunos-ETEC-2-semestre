<?php

require('connect.php');

extract($_POST);
extract($_FILES);

$senha = md5($senha);

$src = "FOTO/".md5(time().$foto['tmp_name'].".png");
move_uploaded_file($foto['tmp_name'],$src);

$msg ="";

// Criptografa a senha usando md5()


if (mysqli_query ($con,"INSERT INTO `tb_contatos` (`codigo`, `nome`, `email`, `senha`, `foto`) 
VALUES (NULL, '$nome', '$email', '$senha', '$src');")){

    $msg ="Registro Concluído!";
} else{
    $msg = "Erro ao criar registro";
}

session_start ();
$_SESSION ['msg'] = $msg;

header("location:add.Aluno.php");

?>
