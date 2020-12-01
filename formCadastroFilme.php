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
        
        <section class="tela_principal">
        
            <form id="formulario" action="db_cadastrarFilme.php" method="post">
            <center>
                <table>
                    <tr><h3>Cadastro de filmes</h3></tr><br>
                    <tr><td><input type="text" name="nomefilme" id="nomefilme" placeholder="Nome do filme"></input></td></tr>
                    <tr><td><input type="text" name="genero" id="genero" placeholder="Genêro"></input></td></tr>
                    <tr><td><input type="text" name="duracao" id="duracao" placeholder="Duração (minutos)"></input></td></tr>
                    <tr><td><input type="money" name="valorlocacao" id="valorlocacao" placeholder="Valor da locação"></td></tr>
                    <tr><td><input type="text" name="qtdcopias" id="qtdcopias" placeholder="Quantidade de cópias"></td></tr>
                    <tr><td><center><input type="submit" value="Cadastrar"><center></td></tr>
                </table>
            </center>
            </form>

        </section>


           
    </body>
</html>