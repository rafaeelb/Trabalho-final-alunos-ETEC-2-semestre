

<?php

require ('connect.php');

$texto = $_GET['texto'];
$busca = mysqli_query($con, "Select * from `tb_contatos` where `nome` like '%$texto%' LIMIT 3");
    echo "<div class = alunos>";
    while ($aluno = mysqli_fetch_array($busca)){
        echo "<div>";
        echo "<p> $aluno[nome] </p>";
        echo "<p> $aluno[email] </p>";
        echo "<img src= $aluno[foto]>";
        echo "<p><a href = alterar.php?codigo=$aluno[codigo]> Alterar</a></p>";
        echo "<p><a href = excluir.php> Excluir</a></p>";
    echo "</div>";
    }
    echo "</div>";

?>