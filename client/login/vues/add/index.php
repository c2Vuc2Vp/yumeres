<?php

require_once"../../add.php";

?>

<div class="animated slow slideInDown col-lg">

  <div class="card">

    <div class="card-header">

      <strong>Ajout</strong> d'article

    </div>

    <div class="card-body card-block">

      <form class="form-horizontal" id="form-horizontal" enctype='multipart/form-data'>

        <input type="hidden" id="username" name="username" value="<?=$username?>">
        <div class="row form-group">

          <div class="col col-md-3">

            <label for="text-input" class=" form-control-label">Nom de l'article</label>

          </div>

          <div class="col-12 ml-auto col-md-6">

            <input type="text" id="nom" name="nom" placeholder="Entrer le nom de l'article" class="form-control" required="">

            <small class="form-text text-muted">Un nom accrocheur</small>

          </div>

        </div>

        <div class="row form-group">

          <div class="col col-md-3">

            <label for="text-input" class=" form-control-label">Nombre d'article</label>

          </div>

          <div class="col-12 ml-auto col-md-6">

            <input type="number" id="stock" name="stock" min="1" value="1" class="form-control" required="">

          </div>

        </div>

        <div class="row form-group">

          <div class="col col-md-3">

            <label for="select" class=" form-control-label">Catégorie</label>

          </div>

          <div class="col-12 ml-auto col-md-6">

            <select name="categorie" id="categorie" class="form-control" required="">

              <option>Choisir</option>

              <<?php

                $cat = $pdo->query("SELECT list_cat FROM categories ORDER BY list_cat ASC");

                while ($categorie = $cat->fetch()){

                  ?>

                    <option value="<?=$categorie['list_cat']?>"><?=$categorie['list_cat']?></option>

                  <?php

                }

              ?>

            </select>

          </div>

        </div>

        <div class="row form-group">

          <div class="col col-md-3">

            <label for="select" class=" form-control-label">Sous categorie</label>

          </div>

          <div class="col-12 ml-auto col-md-6">

            <select name="sous_categorie" id="sous_categorie" class="form-control" required="">

              <!-- les options seront charger ici en ajax -->

            </select>

          </div>

        </div>

        <div id="infor" class="row form-group">

          <!-- la balise de selection sera charge ici pour les sous sous categories -->

        </div>

        <div class="row form-group">

          <div class="col col-md-3">

            <label for="select" class=" form-control-label">Marque</label>

          </div>

          <div class="col-12 ml-auto col-md-6">

            <select name="marque" id="marque" class="form-control" required="">

             <!-- les options seront charger ici en ajax -->

            </select>

          </div>

        </div>

        <div class="row form-group">

          <div class="col col-md-3">

            <label for="file-input" class=" form-control-label">Images</label>

          </div>

          <!-- <input id="filepond" type="file" class="filepond" name="filepond" multiple data-allow-reorder="true" data-max-file-size="3MB" data-max-files="3"> -->

          <!-- <input type="file"> -->

          <div class="col-12 ml-auto col-md-6 dropzone needsclick dz-clickable" id="dropzone">

            <div class="dz-message needsclick">
              <button type="button" class="dz-button">Deplacer <strong>ici</strong> ou cliquer pour télécharger.</button><br>
            </div>

          </div>

        </div>

        <div class="row form-group">

          <div class="col col-md-3">

            <label for="textarea-input" class=" form-control-label">Description</label>

          </div>

          <div class="">

            <!-- <textarea name="description" id="description" rows="9" placeholder="Content..." class="textarea form-control"></textarea> -->

            <div id="editor"></div>

          </div>

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

              <input type="text" id="prix" name="prix" placeholder=".." class="form-control" onkeypress="isInputNumber(event);">

              <div class="input-group-addon">CFA</div>

            </div>

          </div>

        </div>

      </form>

    </div>

    <div class="card-footer">
      
      <button id="add_article" class="btn btn-primary btn-sm">
       
        <i class="fa fa-dot-circle-o"></i> Poster
      
      </button>

      <button type="reset" id="reset" class="btn btn-danger btn-sm">
        
        <i class="fa fa-ban"></i> Effacer
     
      </button>
   
    </div>

    <script>

      // fonction de restriction de caractère au nombre

      function isInputNumber(evt){

        var ch = String.fromCharCode(evt.which);

        if(!(/[0-9]/.test(ch))){

          evt.preventDefault();

        }

      };

      // activation ckeditor

      CKEDITOR.replace('editor');

      // activation dropzone et envoie églament les valeurs des autres input

      var dropzone = $("#dropzone").dropzone({
        url: 'add_add.php',
        maxFilesize: 8,
        maxFiles: 3,
        addRemoveLinks: true,
        uploadMultiple: true,
        parallelUploads: 100,
        paramName: 'file',
        autoProcessQueue: false,
        dictDefaultMessage: 'Drag an image here to upload, or click to select one',
        acceptedFiles: 'image/*,application/pdf',
        clickable: true,
        init: function () {

            var dz = this;
            // Utilisation du button #add_article pour soumettre les images
            $('#add_article').click(function () {

              dz.processQueue();

            });

            // actions excuté pendant l'envoi
            this.on('sendingmultiple', function (file, xhr, formData) {
             

              // poste des valeur des champs du formulaire par ajax
              var data = $('#form-horizontal').serializeArray();
              $.each(data, function (key, el) {
                  formData.append(el.name, el.value);
              });
              formData.append('content', CKEDITOR.instances['editor'].getData());
              console.log(formData);

            });
        },
        error: function (file, response){
            if ($.type(response) === "string")
                var message = response; //dropzone sends it's own error messages in string
            else
                var message = response.message;
            file.previewElement.classList.add("dz-error");
            _ref = file.previewElement.querySelectorAll("[data-dz-errormessage]");
            _results = [];
            for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                node = _ref[_i];
                _results.push(node.textContent = message);
            }
            return _results;
        },
        successmultiple: function (file, response) {

          console.log(file,response);
          CKEDITOR.instances.editor.setData("");
          $('#form-horizontal')[0].reset();

          Swal.fire({

            position: 'top-end',
            title: 'Insertion',
            text: "Article inséré avec success.",
            type: 'success',
            showConfirmButton: false,
            timer: 3000
          
          }).then((result) =>{

            $('.main-content').load('vues/add');

          });

        },
        completemultiple: function (file, response) {
            // console.log(file, response, "completemultiple");
            // $modal.modal("show");
        },
        reset: function () {
            console.log("Images retirées");
        }
      });

      $(document).ready(function() {

        // vider les champs du formulaire
        
        $('#reset').click(function () {

          $('#form-horizontal')[0].reset();
          CKEDITOR.instances.editor.setData("");

        });
        // chargement de la sous_categorie

        $("select#categorie").change(function(){

          if ($(this).children("option:selected")){

            const categorie = $(this).children("option:selected").val()

            const url = 'add_categorie.php'

            $.ajax({

              type: 'POST',

              url: url,

              data: {

                categorie : categorie,
              },

              success: function(reponse){

                $('#sous_categorie').html(reponse).show();
              }

            });

          };

        });

        // chargement de la sous_categorie_infor

        $("select#sous_categorie").change(function(){

          if ($(this).children("option:selected")){

            const sous_categorie = $(this).children("option:selected").val()

            const url = 'add_sous_categorie.php'

            $.ajax({

              type: 'POST',

              url: url,

              data: {

                sous_categorie : sous_categorie,
              },

              success: function(reponse){

                $('#infor').html(reponse).show();
              }

            });

          };

        });

        // chargement de la marque depuis les sous categories
        $("select#sous_categorie").change(function(){

          if ($(this).children("option:selected")){

            const marque = $(this).children("option:selected").val()

            const url = 'add_marque.php'

            $.ajax({

              type: 'POST',

              url: url,

              data: {

                marque : marque,
              },

              success: function(reponse){

                $('#marque').html(reponse).show();
              }

            });

          };

        });

      });

    </script>
  </div>

</div>
