<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-login';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->connect_error)
    // {
    //     echo "Erro ao conectar ao banco de dados";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }
?>
