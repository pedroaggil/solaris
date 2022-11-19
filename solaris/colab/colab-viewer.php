  <!-- colaboradores -->
  <div class="colab" id="colaboradores">
    <h2 class="fw-bold text-center" style="font-size: 40px;">Conheça nossos colaboradores</h2>

    <?php include('../php/connect.php');

      $search  = "SELECT * 
                  FROM tb_colaborador 
                  WHERE nr_aprovado = 1 
                  ORDER BY nr_nome ASC";

      $query = $mysqli->query($search);

      while ($sql = $query->fetch_assoc()) {
        ?>
        <div class="container">
          <div class="row">
            <div class="col-4">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="<?= $sql['img_logo']; ?>" alt="Logomarca">
                <div class="card-body">
                  <h5 class="card-title"><?= $sql['nm_nome']; ?></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
      }

    ?>

    <div class="colabtn"><a class="form-btn" href="colaborador/index.html">Quero me tornar um colaborador</a></div>

  </div>
  <!-- colaboradores -->