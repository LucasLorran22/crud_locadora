<?php
    // Faz a conexão com o banco de dados.
    include_once "conexao.php"; 

    try{    
        $nome = filter_var($_POST['nome']);
        $endereco = filter_var($_POST['endereco']);
        $cidade = filter_var($_POST['cidade']);
        $uf = filter_var($_POST['uf']);
        $telefone = filter_var($_POST['telefone']);
        $cpf = filter_var($_POST['cpf']);

        $insert = $conectar->prepare("INSERT INTO tb_clientes (nome, endereco, cidade, uf, telefone, cpf) VALUES ( :nome, :endereco, :cidade, :uf, :telefone, :cpf)");

        $insert->bindParam(':nome', $nome); //bindParam evita a entrada de SQL injection
        $insert->bindParam(':endereco', $endereco);
        $insert->bindParam(':cidade', $cidade);
        $insert->bindParam(':uf', $uf);
        $insert->bindParam(':telefone', $telefone);
        $insert->bindParam(':cpf', $cpf);
        $insert->execute();

        header("location: clientes.php");


    } catch(PDOException $e){
        echo 'Erro: ' . $e->getMessage();
    }

?>