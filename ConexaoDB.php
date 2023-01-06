<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = 'Bagarufe2708##';
    $dbName = 'db_microcredito';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    //if ($conexao->connect_errno) 
    //{echo "Erro na conexão com o Banco de Dados";}
    //else {
    // echo "Conexão com o Banco de Dados está Ok";}
?>