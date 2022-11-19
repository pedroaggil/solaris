<?php include('connect.php');

    $event = $_GET['event'];

    $delete =  "DELETE 
                FROM tb_agenda 
                WHERE cd_agenda = ". $event;

    if ($sql = $mysqli->query($delete)) {
        echo 'VENCEMO PORA';
    } else { echo $mysqli->error; }

?>