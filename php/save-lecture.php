<?php include('connect.php');

    $event = $_GET['event'];

    $update =  "UPDATE tb_agenda 
                SET id_salvar = 1 
                WHERE cd_agenda = ". $event;

    if ($sql = $mysqli->query($update)) {
       header('Location: ../perfil/profile.php');
    } else {
        echo 'iiiiih';
        echo $mysqli->error;
    }

?>