<?php include '../php/connect.php';
 //if (isset($SESSION['id'])){
    if (isset($_POST['titulo'])){
        $SESSION['pdf'] = $_FILES['pdf'];
        var_dump($_FILES['pdf']);
        $SESSION['titulo'] = $_POST['titulo'];
        foreach ($_POST['tag'] as $chave) {
            $SESSION['tag'] = $chave;  
        }
    }
 // } else {header('Location: ../home-nolog.html');}

?>