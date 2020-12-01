<?php
    // Faz a conexão com o banco de dados.
    include_once "conexao.php"; 

    try{
        $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

        $nome = filter_var($_POST['nome']);
        $endereco = filter_var($_POST['endereco']);
        $cidade = filter_var($_POST['cidade']);
        $uf = filter_var($_POST['uf']);
        $telefone = filter_var($_POST['telefone']);
        $cpf = filter_var($_POST['cpf']);

        $update = $conectar->prepare("UPDATE tb_clientes SET nome = :nome, endereco = :endereco, cidade = :cidade, uf = :uf, telefone = :telefone, cpf = :cpf WHERE id = :id");

        $update->bindParam(':id', $id); //bindParam evita a entrada de SQL injection
        $update->bindParam(':nome', $nome); 
        $update->bindParam(':endereco', $endereco);
        $update->bindParam(':cidade', $cidade);
        $update->bindParam(':uf', $uf);
        $update->bindParam(':telefone', $telefone);
        $update->bindParam(':cpf', $cpf);
        $update->execute();

        header("location: clientes.php");


    } catch(PDOException $e){
        echo 'Erro: ' . $e->getMessage();
    }

?>