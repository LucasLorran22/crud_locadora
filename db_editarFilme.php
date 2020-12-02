<?php
    // Faz a conexão com o banco de dados.
    include_once "db_conexao.php"; 

    try{
        $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);

        $nomefilme = filter_var($_POST['nomefilme']);
        $genero = filter_var($_POST['genero']);
        $duracao = filter_var($_POST['duracao']);
        $valorlocacao = filter_var($_POST['valorlocacao']);
        $qtdcopias = filter_var($_POST['qtdcopias']);

        $update = $conectar->prepare("UPDATE tb_filmes SET nomefilme = :nomefilme, genero = :genero, duracao = :duracao, valorlocacao = :valorlocacao, qtdcopias = :qtdcopias WHERE id = :id");

        $update->bindParam(':id', $id); //bindParam evita a entrada de SQL injection
        $update->bindParam(':nomefilme', $nomefilme); 
        $update->bindParam(':genero', $genero);
        $update->bindParam(':duracao', $duracao);
        $update->bindParam(':valorlocacao', $valorlocacao);
        $update->bindParam(':qtdcopias', $qtdcopias);
        $update->execute();

        header("location: filmes.php");


    } catch(PDOException $e){
        echo 'Erro: ' . $e->getMessage();
    }

?>