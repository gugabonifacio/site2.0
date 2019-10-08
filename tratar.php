<?php
    $nomecompleto = $_POST['nomecompleto'];
    $endereco = $_POST['endereco'];
    $setor = $_POST['setor'];
    $telefone = $_POST['telefone'];
    $pizza = $_POST['id'];
    $tamanho = $_POST['tamanho'];


    try {
        include_once('conexao.php');
        // A variável $pdo, usada a seguir, está vindo do conexao.php

        $consulta = $pdo->prepare("INSERT INTO cliente
        (endereco, nomecompleto, setor, id, tamanho_id, telefone)
        VALUES
        (:endereco, :nomecompleto, :setor, :id, :tamanho_id, :telefone)");
        
        $consulta->bindValue(":endereco", $endereco);
        $consulta->bindValue(":nomecompleto", $nomecompleto);
        $consulta->bindValue(":setor", $setor);
        $consulta->bindValue(":id", $pizza);
        $consulta->bindValue(":tamanho_id", $tamanho);
        $consulta->bindValue(":telefone", $telefone);

        $consulta->execute();

    } catch(Exception $e) {
        die("Erro de banco de dados: " . $e->getMessage());
    }

    header('location: pedido.php?resultado=sucesso');
?>