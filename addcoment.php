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
    <title>Adicionar Comentário</title>
</head>
<body>
<?php 
    require 'mysql.php';
    require 'clientInfo.php';
    $nome = $_POST['nome'];
    //TODO colocar a escolha do avatar
    $avatar = '02';
    $email = $_POST['email'];
    $recado = nl2br($_POST['texto']);
    $ip = $client->getIP('extra');
    $browser = $client->getBrowser();
    $os = $client->getOS();
    $lingua = $client->getLanguage();
    $pais = $client->getCountry();
    $estado = $client->getState();
    $cidade = $client->getCity();
    $dataclient = $client->getDate();
    $dataserver = date('Y-m-d', time());
    $sqlInsert = 'INSERT INTO gb (nome, avatar, email, recado, ip, browser, os, lingua, pais, estado, cidade, dataclient, dataserver) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)';
    //mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $stmt = mysqli_prepare($sqlConDB, $sqlInsert);
    mysqli_stmt_bind_param($stmt, 'sssssssssssss', $nome, $avatar, $email, $recado, $ip, $browser, $os, $lingua, $pais, $estado, $cidade, $dataclient, $dataserver);
    mysqli_stmt_execute($stmt);
    mysqli_close($sqlConDB);
?>
</body>
</html>
