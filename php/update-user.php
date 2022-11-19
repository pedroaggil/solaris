<?php include('connect.php');

    /*
     * 1. Declara valores a serem manipulados
     * 2. Executa rotina de consulta de usuário especificado pelo ID
     * 3. Valida se senha digitada é igual à cadastrada atualmente no banco
     *     3.1 Se sim, executa rotina de atualização de cadastro
     *         3.1.1 Atualiza nome, e-mail e senha a partir do que é dado pelo usuário
     *     3.2 Se não, retorna erro por parte do usuário
     *     3.3 Em nenhuma das situações, exibe código de erro
     * 4. No caso de não executar a consulta, exibe código de erro
     * 5. No caso de a conexão com o banco falhar, exibe código de erro
     */

    $user = $_POST['id'];
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $oldPass = SHA1($_POST['pass']);
    $newPass = SHA1($_POST['new__pass']);

    $search =  "SELECT * 
                FROM tb_user 
                WHERE cd_user = ". $user;

    $src__sql = $mysqli->query($search);
    
    if ($row = $src__sql -> fetch_object()) {

        $pass = $row->ds_senha;
        $update;

        if (isset($newPass)) {
            $update =  "UPDATE tb_user
                        SET ds_email = '". $mail ."', 
                            ds_username = '". $name ."', 
                            ds_senha = '". $newPass ."' 
                        WHERE cd_user = ". $user;
        } else {
            $update =  "UPDATE tb_user 
                        SET ds_email = '". $mail ."', 
                            ds_username = '". $name ."' 
                        WHERE cd_user = ". $user;
        }

        if ($pass == $oldPass) {
            if ($upd__sql = $mysqli->query($update)) {
                header('Location: ../perfil/profile.php');
            } else {
                echo $mysqli->error;
            }

        } elseif ($pass != $oldPass) {
            header('Location: ../perfil/editar-perfil.php');
        
        } else {
            echo $mysqli->error;     
        }
    }

?>