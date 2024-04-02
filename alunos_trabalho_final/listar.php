<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include ('menu.php') ?>
    <?php 
    
        require('connect.php');

        $busca = mysqli_query($con, "Select * from `tb_contatos`");
        echo "<div class=alunos>";
        while ($aluno = mysqli_fetch_array($busca)){
        echo "<div>";
            echo "<p> Nome: $aluno[nome] </p>";
            echo "<p> Email: $aluno[email] </p>";
            echo "<img src= $aluno[foto]>";
            echo "<p><a href = alterar.php?codigo=$aluno[codigo]> Alterar</a></p>";
            $pnome = explode(' ',$aluno['nome']);

            @session_start();
            if (isset($_SESSION['logado']) && $_SESSION['logado']== true){
                echo "<p><a href = javascript:confirmar($aluno[codigo],'".$pnome[0]."')> Excluir<a/></p>";
            }
            echo "</div>";
         }
  
  
  
          echo "</div>";
        ?>

      <script>
        function confirmar(codigo,nome){
            opcao = confirm('Deseja excluir o(a)' + nome +'?');
            if(opcao == true){
                window.location = "excluir.php?codigo=" + codigo;
            }
        }
      </script>
</body>
</html>