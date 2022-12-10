<?php include('connect.php');

    $event = $_GET['event'];

    $update =  "UPDATE tb_agenda 
                SET st_aprovada = 1, id_salvar = 1 
                WHERE cd_agenda = ". $event;

    if ($sql = $mysqli->query($update)) {
        header('Location: ../palestras/solicitacao-p-adm.php');
    } else { echo $mysqli->error; }

?>