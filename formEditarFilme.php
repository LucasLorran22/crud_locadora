<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>e-Locadora</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="shortcut icon" href="img/disco_logo.png"> 
    </head>

    <body>
		<header>
			<nav class="menu"> 
                <div class="logo">
                    <a href="index.php">
                        <img src="img/e-Locadora_icon.png" alt="Logo da locadora">
                    </a>
                </div>

                <div class="opcoes_menu">
                    <a href="clientes.php">Clientes</a>
                    <a href="filmes.php">Filmes</a>
                    <a href="locacao.php">Locação</a>
                    <a href='contato.php'>Contato</a>
                </div>
			</nav>
        </header>
        <?php
            include_once "db_conexao.php"; 

            $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
            $consulta = $conectar->query("SELECT * FROM tb_filmes WHERE id = '$id'");
            $linha = $consulta->fetch(PDO::FETCH_ASSOC);
        
        ?>

        <section class="tela_principal">
        
            <form id="formulario" method="post" action="db_editarFilme.php">
            <center>
                <table>
                    <tr><h3>Editar filme</h3></tr><br>
                    <tr><td>
                        <input type="text" name="nomefilme" id="nomefilme" value="<?php echo $linha['nomefilme']?>"></input>
                    </td></tr>

                    <tr><td>
                        <input type="text" name="genero" id="genero" value="<?php echo $linha['genero']?>"></input>
                    </td></tr>

                    <tr><td>
                        <input type="text" name="duracao" id="duracao" value="<?php echo $linha['duracao']?>"></input>
                    </td></tr>

                    <tr><td>
                        <input type="text" name="valorlocacao" id="valorlocacao" value="<?php echo $linha['valorlocacao']?>">
                    </td></tr>
                    
                    <tr><td>
                        <input type="text" name="qtdcopias" id="qtdcopias" value="<?php echo $linha['qtdcopias']?>">
                    </td></tr>

                    <tr><td>
                        <input type="hidden" name="id" value="<?php echo $linha['id']?>">
                    </td></tr>

                    <tr><td><center><input type="submit" value="Editar"><center></td></tr>
                </table>
            </center>

            </form>
            
        </section>


            
    </body>
</html>