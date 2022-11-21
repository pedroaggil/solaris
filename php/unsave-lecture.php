<?php include('connect.php');

    $event = $_GET['event'];

    $update =  "UPDATE tb_agenda
                SET id_salvar = 0
                WHERE cd_agenda = ". $event;

    if ($sql = $mysqli->query($update)) {
       header('Location: ../index.php');
    } else {
        echo $mysqli->error;
    }

?>