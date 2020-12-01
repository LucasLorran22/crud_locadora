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
        
            <form id="formulario" action="cadastrarCliente.php" method="post">
            <center>
                <table>
                    <tr><h3>Cadastro de cliente</h3></tr><br>
                    <tr><td><input type="text" name="nome" id="nome" placeholder="Nome"></input></td></tr>
                    <tr><td><input type="text" name="endereco" id="endereco" placeholder="Endereço"></input></td></tr>
                    <tr><td><input type="text" name="cidade" id="cidade" placeholder="Cidade"></input></td></tr>
                    <tr><td><input type="text" name="uf" id="uf" placeholder="UF"></td></tr>
                    <tr><td><input type="text" name="telefone" id="telefone" placeholder="Telefone"></td></tr>
                    <tr><td><input type="text" name="cpf" id="cpf" placeholder="CPF"></td></tr>
                    <tr><td><center><input type="submit" value="Cadastrar"><center></td></tr>
                </table>
            </center>
            </form>

        </section>


           
    </body>
</html>