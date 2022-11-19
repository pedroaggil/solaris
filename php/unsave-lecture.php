<?php include('connect.php');

    $user = $_GET['user'];

    $update =  "UPDATE tb_agenda_user
                SET st_salvo = 0
                WHERE cd_agenda_user = ". $user;

    if ($sql = $mysqli->query($insert)) {
       echo 'eeeeeh';
       // header('Location: ../admin/index.php');
    } else {
        echo 'iiiiih';
        echo $mysqli->error;
    }

?>