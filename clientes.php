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
                <?php
                    // Faz a conexão com o banco de dados.
                    include_once "db_conexao.php"; 

                    try {

                        //execução da instrução sql
                        $consulta = $conectar->query("SELECT * FROM tb_clientes");
                        
                        //////////////////////////////////////////////////////////

                        echo "<h3 class='titulo'>Listagem de clientes</h3>";

                        echo "<table border='1'><tr><td>Nome</td><td>Endereço</td>";
                        echo "<td>Cidade</td><td>UF</td><td>Telefone</td><td>CPF</td><td>Ações</td></tr>";

                        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
                            // Colunas da tabela
                            echo "<tr><td>$linha[nome]</td>";
                            echo "<td>$linha[endereco]</td>";
                            echo "<td>$linha[cidade]</td>";
                            echo "<td>$linha[uf]</td>";
                            echo "<td>$linha[telefone]</td>";
                            echo "<td>$linha[cpf]</td>";
                            echo "<td><a href='formEditarCliente.php?id=$linha[id]'>Editar</a> - <a href='db_ExcluirCliente.php?id=$linha[id]'>Excluir</a></tbd></tr>";
                        } 
                        
                        echo "</table>";

                        echo $consulta->rowCount() . " Registros exibidos";

                        echo "";
                        
                    } catch(PDOException $e){
                        echo $e->getMessage();
                    }
                    
                ?>

                <br><br><a class='teste' href='formCadastroCliente.php'>Novo cadastro</a>
            
            </div>
             
            <center>
       

            
    </body>
</html>