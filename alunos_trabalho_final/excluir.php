<?php require ('sec.php')?>
<?php
    require ('connect.php');

    $codigo = $_GET['codigo'];
    $busca = mysqli_query($con, "Select * from `tb_contatos` where `codigo` = '$codigo'");

    //var_dump($busca);

    $foto = mysqli_fetch_array($busca);
    $foto[0];

    mysqli_query($con, "Delete from `tb_contatos` where `codigo` = '$codigo'");

    header("location:listar.php");
?>