<?php
    require('conecta.php');

    $id = $_GET['id'];
    $nome_novo = $_POST['nome_novo'];
    $email_novo = $_POST['email_novo'];
    $telefone_novo = $_POST['telefone_novo'];


    // Agora criar a String de UPDATE e executar
    // Direcionar para a index.php

    $sql = "UPDATE clientes SET nome_cliente  '$nome_novo'"
    $sql = "UPDATE clientes SET email_cliente  '$email_novo'"
    $sql = "UPDATE clientes SET telefone  '$telefone_novo'"

?>