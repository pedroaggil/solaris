<?php include('connect.php');

    $event = $_GET['event'];

    $update =  "UPDATE tb_agenda 
                SET st_aprovada = 1
                WHERE cd_agenda = ". $event;

    if ($sql = $mysqli->query($update)) {
        echo 'deu tudo certo família só sucesso na trajetória ai';
    } else { echo $mysqli->error; }

?>