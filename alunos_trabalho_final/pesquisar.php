

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include('menu.php');?>

    
    <div class="pesquisar">
        <p> Nome: <input type = "text" name = "nome" id = "txtPesquisa" onkeyup = "pesquisar(this.value)" autocomplete="off"></p>
    </div>
    <div id = "response"></div>
    <script src = "libs/jquery-3.6.4.min.js">  </script>
    <script>
        function pesquisar(texto){
            $.ajax({
                url: "pesquisar.act.php?texto=" +texto,
                success: function (response){
                    document.querySelector('#response').innerHTML = response;
                }
            });
        }
        document.querySelector('#txtPesquisa').focus();
    </script>
</body>
</html>