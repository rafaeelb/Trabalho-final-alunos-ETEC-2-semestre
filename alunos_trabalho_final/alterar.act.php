<?php require ('sec.php')?>

<?php 
    require ('connect.php');
extract($_POST);
extract($_FILES);

// var_dump($_POST);
// var_dump($_FILES);

if($foto['size']>0){

    if ($foto_atual !=""){
        $endereco = $foto_atual;
    } 
    else{
        $endereco = "FOTO/".md5 (time()).".jpg";
        mysqli_query($con,"UPDATE `tb_contatos` SET `foto` = '$endereco' WHERE `tb_contatos`. `codigo` = '$codigo';");
    }
    move_uploaded_file($foto['tmp_name'],$endereco);
 }

@session_start();
  if(mysqli_query($con,"UPDATE `tb_contatos` SET `nome` = '$nome', `email` = '$email'
  WHERE
  `tb_contatos`. `codigo` = '$codigo';")){
    $msg = "<div class=alertaGreen>Contato alterado com sucesso!</div>";
    } else{
        $msg = "<div class=alertaRed>Erro ao gravar alterações!</div>";
        }
$_SESSION ['msg'] = $msg;


header("location:alterar.php?codigo=$codigo");




?>