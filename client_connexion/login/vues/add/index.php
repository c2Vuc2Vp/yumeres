<?php

require_once"../../add.php";

?>

<div class="animated slow slideInDown col-lg">

  <div class="card">

    <div class="card-header">

      <strong>Ajout</strong> d'article

    </div>

    <div class="card-body card-block">

      <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

        <div class="row form-group">

          <div class="col col-md-3">

            <label for="select" class=" form-control-label">Catégorie</label>

          </div>

          <div class="col-12 ml-auto col-md-6">

            <select name="categorie" id="categorie" class="form-control">

              <option>Choisir</option>

              <option value="1">Option #1</option>

              <option value="2">Option #2</option>

              <option value="3">Option #3</option>

            </select>

          </div>

        </div>

        <div class="row form-group">

          <div class="col col-md-3">

            <label for="select" class=" form-control-label">Marque</label>

          </div>

          <div class="col-12 ml-auto col-md-6">

            <select name="marque" id="marque" class="form-control">

              <option>Choisir</option>

              <option value="1">Option #1</option>

              <option value="2">Option #2</option>

              <option value="3">Option #3</option>

            </select>

          </div>

        </div>

        <div class="row form-group">

          <div class="col col-md-3">

            <label for="text-input" class=" form-control-label">Nom de l'article</label>

          </div>

          <div class="col-12 ml-auto col-md-6">

            <input type="text" id="nom" name="nom" placeholder="Entrer le nom de l'article" class="form-control">

            <small class="form-text text-muted">Un nom accrocheur</small>

          </div>

        </div>

        <div class="row form-group">

          <div class="col col-md-3">

            <label for="file-input" class=" form-control-label">Image principale</label>

          </div>

          <div class="col-12 ml-auto col-md-6">

            <input type="file" id="img_1" name="img_1" class="form-control-file">

          </div>

        </div>

        <div class="row form-group">

          <div class="col col-md-3">

            <label for="file-input" class=" form-control-label">Image secondaire</label>

          </div>

          <div class="col-12 ml-auto col-md-6">

            <input type="file" id="img_2" name="img_2" class="form-control-file">

          </div>

        </div>

        <div class="row form-group">

          <div class="col col-md-3">

            <label for="textarea-input" class=" form-control-label">Description</label>

          </div>

          <div class="col-12 ml-auto col-md-9">

            <!-- <textarea name="description" id="description" rows="9" placeholder="Content..." class="textarea form-control"></textarea> -->

            <div id="editor"></div>

          </div>

          <script type="text/javascript">

            ClassicEditor.create(document.querySelector('#editor')).catch(error => {console.error(error)});

          </script>

        </div>

        <div class="row form-group">

          <div class="col col-md-3">

            <label for="text-input" class=" form-control-label">Prix de l'article</label>

          </div>

          <div class="col ml-auto col-md-6">

            <div class="input-group">

              <!-- <div class="input-group-addon">

                <i class="fa fa-money"></i>

              </div> -->

              <input type="text" id="input3-group1" name="prix" placeholder=".." class="form-control">

              <div class="input-group-addon">CFA</div>

            </div>

          </div>

        </div>

      </form>

    </div>
    <div class="card-footer">
        <button id="add_article" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
        </button>
    </div>

    <script>

      $(document).ready(function() {

        //ajout d'article

        $(document).on('click','#add_article',function(){

          const url = 'add_add.php';

          const cat = $('#categorie').val();

          const marque = $('#marque').val();

          const nom = $('#nom').val();


          // console.log('teste');

          $.ajax({

            type: 'POST',

            url: url,

            data: {

              nom : nom,
            },

            success: function(reponse){

              console.log(reponse)
            }

          });

        });

      });

    </script>
  </div>

</div>
