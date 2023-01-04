<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Web portifólio e Blog do desenvolvedor Calebe Copello">
    <meta name="keywords" content="Blog,Desenvolvimento,Portifolio">
    <meta name="author" content="Calebe Copello">
    <link rel="shortcut icon" href="/imgs/favicon.ico" type="image/x-icon">
    <title>MySQL Check</title>
</head>
<body>
<?php
    $sqlInfo = array('localhost','root','','gnrldb');
    //@para esconder o aviso de erro padrão do PHP
    $sqlCon = @mysqli_connect($sqlInfo[0], $sqlInfo[1], $sqlInfo[2]);
    if (!$sqlCon) {
        if (mysqli_connect_errno() == '2002') {
            die('Conexão falhou: Host não foi encontrado');
        }
        elseif (mysqli_connect_errno() == '1045') {
            die('Conexão falhou: Usuário ou senha incorretos');
        }
        else {
        die('Conexão falhou: '. mysqli_connect_error(). ' Erro nº: '. mysqli_connect_errno());
        }
    }
    $sqlConDB = @mysqli_connect($sqliInfo[0], $sqlInfo[1], $sqlInfo[2], $sqlInfo[3]);
    if (!$sqlConDB) {
        if (mysqli_connect_errno() == '1049') {
            echo 'Banco de Dados não encontrado! Criando Bando de Dados.';
            mysqli_query($sqlCon, '
            CREATE DATABASE gnrldb 
            DEFAULT CHARACTER SET utf8mb4
            DEFAULT COLLATE utf8mb4_general_ci
            ');
        } else {
            die('Conexão falhou: '. mysqli_connect_error(). ' Erro nº: '. mysqli_connect_errno());
        }
    }
    mysqli_set_charset($sqlConDB, 'utf8mb4');
?>
</body>
</html>