<link rel="stylesheet" href="style.css">
    <nav> 
        <div class= "hamburguer">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>

        <ul class="nav-link">
            <li><a href="add.Aluno.php">Cadastrar</a></li>
            <li><a href="listar.php">Listar</a></li>
            <li><a href="pesquisar.php">Pesquisar</a></li>
            
            <?php
                @session_start();
                if(isset ($_SESSION['logado']) && $_SESSION['logado'] == true){
                    echo "<li><a href=\"logoff.php\">Sair</a></li>";
                }else{
                    echo "<li><a href=\"login.php\">Entrar</a></li>";
                }
            
            
            ?>
        </ul>
    </nav>
    <script src = "app.js"></script>
    