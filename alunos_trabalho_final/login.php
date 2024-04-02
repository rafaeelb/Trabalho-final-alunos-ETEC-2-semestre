<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        include('menu.php');
        @session_start();
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset ($_SESSION['msg']);
        }
    ?>

    <div class="form">
        <form action="login.act.php" method="post" enctype="multipart/form-data">
            <div class="quadro">
            <p>Email</p>
            <p><input type="text" name="email" id=""></p>
            <p>Senha</p>
            <input type="password" name="senha" id="">

            <p><input type="submit" value="Entrar"></p>
            </div>
        </form>
    </div>
</body>
</html>