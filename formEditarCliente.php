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
            $consulta = $conectar->query("SELECT * FROM tb_clientes WHERE id = '$id'");
            $linha = $consulta->fetch(PDO::FETCH_ASSOC);
        
        ?>

        <section class="tela_principal">
        
            <form id="formulario" method="post" action="db_editarCliente.php">
            <center>
                <table>
                    <tr><h3>Editar cadastro</h3></tr><br>
                    <tr><td>
                        <input type="text" name="nome" id="nome" value="<?php echo $linha['nome']?>"></input>
                    </td></tr>

                    <tr><td>
                        <input type="text" name="endereco" id="endereco" value="<?php echo $linha['endereco']?>"></input>
                    </td></tr>

                    <tr><td>
                        <input type="text" name="cidade" id="cidade" value="<?php echo $linha['cidade']?>"></input>
                    </td></tr>

                    <tr><td>
                        <input type="text" name="uf" id="uf" value="<?php echo $linha['uf']?>">
                    </td></tr>
                    
                    <tr><td>
                        <input type="text" name="telefone" id="telefone" value="<?php echo $linha['telefone']?>">
                    </td></tr>
                    
                    <tr><td>
                        <input type="text" name="cpf" id="cpf" value="<?php echo $linha['cpf']?>">
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