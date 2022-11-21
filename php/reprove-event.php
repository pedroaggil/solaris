<?php include('connect.php');

    $event = $_GET['event'];

    echo $event;

    // $delete =  "DELETE 
    //             FROM tb_agenda 
    //             WHERE cd_agenda = ". $event;

   // echo $delete;

    // if ($sql = $mysqli->query($delete)) {
    //     header('Location: ../palestras/solicitacao-p-adm.php');
    // } else { echo $mysqli->error; }

?>