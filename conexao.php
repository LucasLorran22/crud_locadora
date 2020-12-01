<?php

try {
    //Conexão com o banco de dados.
    $conectar = new PDO ("mysql:host=localhost;porta=3306;dbname=pdo", "root", "");
    
} catch (PDOException $e) {

    //Caso ocorra algum erro na conexão com o banco, exibe a mensagem.
    echo 'Falha ao conectar com o Banco de dados: ' . $e->getMessage();
}

?>