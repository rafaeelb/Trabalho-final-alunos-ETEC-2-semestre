<?php require ('sec.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include('menu.php'); ?>

    <?php
    @session_start();
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

        $codigo = $_GET['codigo'];
        require('connect.php');
        $busca = mysqli_query($con, "SELECT * FROM `tb_contatos` WHERE `codigo` = '$codigo'");
        $aluno = mysqli_fetch_array($busca);
            ?>

            <div class="formulario">
                     <form action="alterar.act.php" method="post" enctype="multipart/form-data">
                     <input type="hidden" name="codigo" value="<?php echo $aluno['codigo']; ?>">
                     <input type="hidden" name="foto_atual" value="<?php echo $aluno['foto']; ?>">
                     <p>Nome: </p>
                     <p><input type="text" name="nome" value="<?php echo $aluno['nome']; ?>"></p>
                     <p>Email: </p>
                     <p><input type="text" name="email" value="<?php echo $aluno['email']; ?>"></p>

                        <p id="pFoto"><label for="idFoto" id="lblFoto">Alterar foto</label></p>
                        <p id="pFotos">
                        <img src="<?php echo $aluno['foto'] . "?tempo=" . time(); ?>" id="foto_atual">
                        <img src="#" alt="" id="blah">
                     </p>
                        <p><input type="file" name="foto" id="idFoto"></p>
                        <p><a href="alterarsenha.php?codigo=<?php echo $aluno['codigo']; ?>">Alterar a senha</a></p>
                     <p><input type="submit" value="Alterar"></p>
                </form>
            </div>
            <script src="libs/jquery-3.6.4.min.js"></script>
            <script>
                $('.alertaGreen,.alertaRed').click(function (e){
                    e.preventDefault();
                    $(this).fadeOut(1000);
                });;


                function readURL(input){
                    if(input.files && input.files[0]){
                        var reader = new FileReader();
                        reader.onload = function (e){
                            $('blah').attr('src', e.target.result);
                        }
                    reader.readAsDataURL(input.files[0]);
                    }
                }

                $("idFoto").change(function(){
                    $('#blah').fadeOut(500);
                    $('#blah').fadeIn(500);
                    readURL(this);
                });

            </script>
            <?php
    ?>

    
</body>
</html>
