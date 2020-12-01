<?php
    // Faz a conexão com o banco de dados.
    include_once "db_conexao.php"; 

    try{    
        $nomefilme = filter_var($_POST['nomefilme']);
        $genero = filter_var($_POST['genero']);
        $duracao = filter_var($_POST['duracao']);
        $valorlocacao = filter_var($_POST['valorlocacao']);
        $qtdcopias = filter_var($_POST['qtdcopias']);


        $insert = $conectar->prepare("INSERT INTO tb_filmes (nomefilme, genero, duracao, valorlocacao, qtdcopias) VALUES (:nomefilme, :genero, :duracao, :valorlocacao, :qtdcopias)");

        $insert->bindParam(':nomefilme', $nomefilme); //bindParam evita a entrada de SQL injection
        $insert->bindParam(':genero', $genero);
        $insert->bindParam(':duracao', $duracao);
        $insert->bindParam(':valorlocacao', $valorlocacao);
        $insert->bindParam(':qtdcopias', $qtdcopias);
        $insert->execute();

        header("location: filmes.php");

    } catch(PDOException $e){
        echo 'Erro: ' . $e->getMessage();
    }

?>