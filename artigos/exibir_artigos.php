<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
    <body>
    <?php include '../php/connect.php';

        $search =  "SELECT *
        FROM tb_artigos";

        if($sql = $mysqli->query($search)){

            while ($linha = $sql->fetch_object()) { ?>

                <form method="post" action="ler_artigo.php">
                    <input type="hidden" name="codigo" readonly value="<?= $linha->cd_artigo;?>">
                    <input type="text" name="titulo" readonly value="<?= $linha->nm_titulo;?>">
                    <input type="text" name="tag" readonly value="<?= $linha->ds_tag;?>">
                    <input type="submit" value="ler">
                </form>

            
            <?php } } else { echo 'não tem artigos';}
    ?>
    </body>
</html>