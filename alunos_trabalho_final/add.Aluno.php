<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Aluno</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <?php include ('menu.php') ?>

     <div class="form">
         <form action="add.Aluno.act.php" method="post" enctype="multipart/form-data">
            <div class="quadro">
            <p>Nome:</p>
            <p><input type="name" name="nome" id=""></p>

            <p>Email:</p>
            <p><input type="text" name="email" id=""></p>

            <p>Senha:</p>
            <p><input type="password" name="senha" id=""></p>

            <p>Selecione uma foto:</p>
            <p><input type="file" name="foto" id="button"></p>

            <p><input type="submit" name="Enviar" id="gravar"></p>
            </div>
         </form>
      </div>
</body>
</html>
