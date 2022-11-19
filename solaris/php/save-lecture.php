<?php include('connect.php');

    $user = $_GET['user'];
    $event = $_GET['event'];

    $insert =  "INSERT INTO tb_agenda_user 
                VALUES (null, '".$user."', '".$event."', 1)";

    if ($sql = $mysqli->query($insert)) {
       echo 'eeeeeh';
       // header('Location: ../admin/index.php');
    } else {
        echo 'iiiiih';
        echo $mysqli->error;
    }

?>