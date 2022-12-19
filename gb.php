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
<?php 
    $sql_info = array('localhost', 'root', '', 'guestbook');
    $sql_con = mysqli_connect($sql_info[0], $sql_info[1], $sql_info[2], $sql_info[3]); 
    //check connection
    if (mysqli_connect_error()) {
        echo 'Falha ao conectar no banco de dados, Erro:' . mysqli_connect_error();
        exit();
    }
    mysqli_set_charset($sql_con, 'utf8');
    $sql_select = 'SELECT id, usuario, comentario, data FROM gb';
    $sql_return = mysqli_query($sql_con, $sql_select);
    while ($sql_row = mysqli_fetch_assoc($sql_return)) {
    echo 'ID ='.$sql_row['id'].'<br>Usuário ='.$sql_row['usuario'].'<br>Comentário ='.$sql_row['comentario'].'<br>Data ='.$sql_row['data'].'<br>';
    }
    $data = date('Y-m-d H:i:s', time());
    echo '<br>'.$data;
?>
</body>
</html>
