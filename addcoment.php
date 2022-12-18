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
    $sql_info = array('localhost', 'root', '', 'guestbook');
    $sql_con = mysqli_connect($sql_info[0], $sql_info[1], $sql_info[2], $sql_info[3]); 
    //check connection
    if (mysqli_connect_error()) {
        echo 'Falha ao conectar no banco de dados, Erro:' . mysqli_connect_error();
        exit();
    }
    $total = 0;
    //TO DO usar prepare para inserir data com variaveis
    while($total < 5) {
        $lorem = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore quia accusamus sint itaque iusto tempora corporis, repellendus, rerum iure labore nobis quod nostrum aliquam recusandae illo impedit. Consectetur, recusandae rem.';
        $data = date('Y-m-d H:i:s', time());
        $sql_insert = 'INSERT INTO gb (usuario, comentario, data, ip) VALUES ("Usuário" , '.$lorem.' , "2022-12-17 00:00:00", "127.0.0.1")';
        mysqli_query($sql_con, $sql_insert);
        echo $sql_insert.'<br>';
        $total++;
    }
?>
</body>
</html>
