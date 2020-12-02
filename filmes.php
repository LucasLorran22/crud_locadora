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
        
        <center>
            <div class="tela_principal">
                    <h3 class='titulo'>Listagem de filmes</h3>
                <?php
                    // Faz a conexão com o banco de dados.
                    include_once "db_conexao.php"; 

                    try {

                        //execução da instrução sql
                        $consulta = $conectar->query("SELECT * FROM tb_filmes");
                        
                        //////////////////////////////////////////////////////////

                        echo "<table border='1'><tr><td>Nome</td><td>Genêro</td>";
                        echo "<td>Duração</td><td>Varlor da locação</td><td>Quantidade de copias</td><td>Ação</td></tr>";

                        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
                            // Colunas da tabela
                            echo "<tr><td>$linha[nomefilme]</td>";
                            echo "<td>$linha[genero]</td>";
                            echo "<td>$linha[duracao]</td>";
                            echo "<td>$linha[valorlocacao]</td>";
                            echo "<td>$linha[qtdcopias]</td>";
                            echo "<td><a href='formEditarFilme.php?id=$linha[id]'>Editar</a> - <a href='db_ExcluirFilme.php?id=$linha[id]'>Excluir</a></tbd></tr>";
                        } 
                        
                        echo "</table>";

                        echo $consulta->rowCount() . " Registros exibidos";
                        
                    } catch(PDOException $e){
                        echo $e->getMessage();
                    }
                    
                ?>

                <br><br><a href='formCadastroFilme.php'>Novo filme</a>
            
            </div>
             
            <center>
        
    </body>
</html>