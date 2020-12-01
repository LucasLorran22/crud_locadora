<?php
    // Faz a conexão com o banco de dados.
    include_once "conexao.php"; 

    try{
        $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

        $delete = $conectar->prepare("DELETE FROM tb_clientes WHERE id = :id");

        $delete->bindParam(':id', $id); //bindParam evita a entrada de SQL injection
        $delete->execute();

        header("location: clientes.php");


    } catch(PDOException $e){
        echo 'Erro: ' . $e->getMessage();
    }

?>