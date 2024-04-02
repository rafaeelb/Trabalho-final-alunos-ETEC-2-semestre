<?php

if (!$con = mysqli_connect('localhost','root','', 'bd_alunos')){
    echo "Erro ao tentar se conectar à base de dados";
} //else {
   // echo "Acesso à base de dados concluído";}

mysqli_query ($con, "SET NAMES utf8");