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
    <title>Guest Book</title>
</head>
<body>
<h1>GuestBook</h1>
<?php
    require 'mysql.php';
    //require 'clientInfo.php';
    mysqli_query($sqlConDB,'
    CREATE TABLE IF NOT EXISTS gb (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        nome varchar(30) NOT NULL,
        email varchar(50) NOT NULL,
        avatar char(2) NOT NULL,
        recado text(350) NOT NULL,
        browser varchar(30) NOT NULL,
        os varchar(15) NOT NULL,
        lingua varchar(20) NOT NULL,
        ip varchar(50) NOT NULL,
        pais varchar(50) NOT NULL,
        estado varchar(70) NOT NULL,
        cidade varchar(70) NOT NULL,
        dataclient varchar(40) NOT NULL,
        dataserver varchar(40) NOT NULL
        ) default charset = utf8mb4;
    ');
    $sqlSelect = 'SELECT avatar, nome, recado, dataserver FROM gb';
    $sqlReturn = mysqli_query($sqlConDB, $sqlSelect);
    while ($sqlRow = mysqli_fetch_assoc($sqlReturn)) {
    echo '
    <div class="div-recado-guestbook">
        <img src="imgs/avatars/user'.$sqlRow['avatar'].'.png" class="avatar-guestbook">
        '.$sqlRow['nome'].'<br>
        Recado ='.$sqlRow['recado'].'<br>
        Data ='.$sqlRow['dataserver'].'<br>
        </div>';
    }
?>
</body>
</html>
