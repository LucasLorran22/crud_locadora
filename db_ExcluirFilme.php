<?php
    // Faz a conexão com o banco de dados.
    include_once "db_conexao.php"; 

    try{
        $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

        $delete = $conectar->prepare("DELETE FROM tb_filmes WHERE id = :id");

        $delete->bindParam(':id', $id); //bindParam evita a entrada de SQL injection
        $delete->execute();

        header("location: filmes.php");


    } catch(PDOException $e){
        echo 'Erro: ' . $e->getMessage();
    }

?>