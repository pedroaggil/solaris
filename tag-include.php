<?php include('connect.php');

    $un = $_POST['username'];
    $email = $_POST['mail'];
    $title = $_POST['tag'];

    $update = "UPDATE tb_user SET 
    ds_username = '".$un."', 
    ds_email = '".$email."', 
    ds_tag = '".$title."' 
    WHERE cd_user = ".$_SESSION['user'].";"; 

?>