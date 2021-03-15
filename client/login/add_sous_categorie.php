<?php

  /////////////////////////
  // demarrer la session //
  /////////////////////////

  session_start();

  //////////////////////////////////////////////////////////////
  // inclure le fichier de fonction et de connection à la bdd //
  //////////////////////////////////////////////////////////////

  require_once "../../app/inc/function.php";

  require_once "../../app/inc/connect.php";

  $user = $_SESSION['auth'];

  if($_SESSION['auth']){

    if (isset($_POST) AND !empty($_POST)) {

      extract($_POST);

      $sous_categories = $pdo->prepare("SELECT * FROM sous_categories WHERE list_cat = ?");

      $sous_categories->execute([$sous_categorie]);

      $cat = $sous_categories->fetch();

      $id_cat = $cat['id'];

      $list_cat = $cat['list_cat'];

      $sous_categories = $pdo->prepare("SELECT list_cat FROM sous_categories_infor WHERE id_sous_categories = ? ORDER BY list_cat ASC");

      $sous_categories->execute([$id_cat]);

        ?>

          <div class="col col-md-3">

            <label for="select" class=" form-control-label"><?=$list_cat?> categorie</label>

          </div>

          <div class="col-12 ml-auto col-md-6">

            <select name="sous_categorie_infor" id="sous_categorie_infor" class="form-control" required="">

              <option>Choisir</option>
        <?php

        while($sousCategories = $sous_categories->fetch()) {

          $SousCategories = $sousCategories['list_cat'];

          ?>

          <option value="<?=$SousCategories?>"><?=$SousCategories?></option>

          <?php

        }

        ?>

            </select>

          </div>

          <script>

            $(document).ready(function(){

              // chargement de la marque depuis les sous categories infor

              $("select#sous_categorie_infor").change(function(){

                if ($(this).children("option:selected")){

                  const marque = $(this).children("option:selected").val()

                  const url = 'add_marque_infor.php'

                  $.ajax({

                    type: 'POST',

                    url: url,

                    data: {

                      mark : marque,
                    },

                    success: function(reponse){

                      $('#marque').html(reponse).show();
                    }

                  });

                };

              });

            });
          </script>

        <?php

    }

  }elseif (!isset($_SESSION["auth"])){

    redirect('logout.php');

  }

?>
