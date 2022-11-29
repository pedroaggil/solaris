<!DOCTYPE html>
<html>
<head>
    <title>Artigos</title>
</head>
 <meta charset="utf-8">
<body>
<?php include '../php/connect.php';

    $titulo = $_POST['titulo'];

    $val = "SELECT * FROM tb_artigos WHERE nm_titulo = '" . $titulo ."'";

    $res = $mysqli->query($val);

    if($res->num_rows != 0){
        echo 'Já existe um artigo publicado com esse título';

    } else {

 if (isset($_SESSION['id'])){
    if (isset($_POST['titulo'])){
        $_SESSION['pdf'] = $_FILES['pdf'];
        $_SESSION['titulo'] = $_POST['titulo'];
        foreach ($_POST['tag'] as $chave){
            $_SESSION['tag'] .= " ".$chave."   ";  
           
        };
      echo $_SESSION['pdf'];
        $uploaddir = '../img/';
        $uploadfile = $uploaddir . basename($_FILES['pdf']['name']);
        if (move_uploaded_file($_FILES['pdf']['tmp_name'],$uploadfile)) {
            echo "Arquivo válido e enviado com sucesso.\n";
        } else {
            echo "Possível ataque de upload de arquivo!\n";
        }
        

        $insert = "INSERT INTO tb_artigos (id_user, ds_conteudo, nm_titulo, ds_tag) VALUES ('".$_SESSION['id']."', '".$uploadfile."', '".$_SESSION['titulo']."',  '".$_SESSION['tag']."')";
        if($mysqli->query($insert)){
            echo 'enviado';
        }else{ 
            echo mysqli_error($mysqli); 
        }

    }else{ echo 'preenche essa merda';}
   

    $_SESSION['tag']="";
    $_SESSION['titulo']="";
    $_SESSION['pdf']="";
    header('Location:exibir_artigos.php');

 } else {header('Location: ../login/index.html');}
}
?>
</body>
</html>