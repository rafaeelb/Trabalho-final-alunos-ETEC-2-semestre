<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include ('menu.php');?>

    <?php 
        @session_start();
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <?php 
        $codigo = $_GET['codigo'];
        require('connect.php');
        $busca = mysqli_query($con, "Select * from `tb_contatos` where `codigo` = '$codigo'");
        $aluno = mysqli_fetch_array($busca);
    ?>

    <div class="form">
        <form action="alterarsenha.act.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="codigo" value="<?php echo $aluno['codigo'];?>">
            <p>Senha Atual</p>
            <p><input type="text" name="senhaatual" id=""></p>
            <p>Nova Senha</p>
            <p><input type="text" name="novasenha" id=""></p>
            <p>Repita a senha</p>
            <p><input type="text" name="novasenha1" id=""></p>
            <p><input type="submit" value="Alterar"></p>
        </form>
    </div>

    <script src="libs/jquery-3.6.4.min.js"></script>
    <script>
        $('.alertaGreen,.alertaRed').click(function(e){
            e.preventDefault();
            $(this).fadeOut(1000);
        });;

        function readURL(input){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function (e){
                    $('#blah').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("idFoto").change(function(){
            $('blah').fadeOut(500);
            $('blah').fadeIn(500);
            readURL(this);
        });

    </script>
</body>
</html>