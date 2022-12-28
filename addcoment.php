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
    echo $_POST['texto'];
    $data = date('Y-m-d H:i:s', time());
    /* $sql_insert = 'INSERT INTO gb (usuario, comentario, data, ip) VALUES (? , ? , ?, ?)';
    $stmt = mysqli_prepare($sql_con, $sql_insert);
    mysqli_stmt_bind_param($stmt, 'ssss', $usuario, $lorem, $data, $ip);
    mysqli_stmt_execute($stmt);
    echo $sql_insert.'<br>';
    $total++;
    mysqli_close($sql_con);*/
?>
</body>
</html>
