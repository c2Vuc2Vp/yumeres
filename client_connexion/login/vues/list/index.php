<?php

require_once"../../list.php";

?>

<!-- Student table  zone start-->
<div class="animated slow slideInRight container">
  <div class="col-md-12">
      <!-- DATA TABLE -->
      <h3 class="title-5 m-b-35">Vos articles <?=$username?></h3>

      <div class="table-responsive table-responsive-data2">

        <table id="articles" class="display table-bordered dt-responsive nowrap dataTable table table-hover no-footer dtr-inline collapsed" role="grid" aria-describedby="tableau_eleves" style="width: 100%;" width="100%" cellspacing="0">

          <thead>

            <tr>

              <th>Id</th>
              <th>Catégorie</th>
              <th>Marque</th>
              <th>Nom</th>
              <th>Prix</th>
              <th>Stock</th>
              <th>Livré</th>
              <th></th>

            </tr>

          </thead>

        </table>

      </div>
      <!-- END DATA TABLE -->
  </div>
</div>
<!-- Student table zone end -->

<!-- scripts zone start -->

<script>

  $(document).ready(function()
    {

      // Affichage

      var dataTable = $('#articles').DataTable(
      {
        "processing":true,
        "serverSide":true,
        "pagingType": "full_numbers",
        "order": [],
        "ajax":{
          url:"table.php",
          type:"POST"
        },

        "columnDefs": [

          {
            "searchable": false,
            "targets": [ 0,7],
          },

          {
            "orderable": false,
            "targets": [0,6,7],

          },

          // {
          //   "visible": false,
          //   "targets": [0]
          // }

        ],

        "language": {
          "emptyTable":     "<i>Aucune donnée disponible.</i>",
          "info":         "De _START_ à _END_ sur _TOTAL_ ",
          "infoEmpty":      "Afficher 0 ligne sur un total de 0.",
          "infoFiltered":     "(Filtré sur un total de _MAX_ ligne)",
          "infoPostFix":      "(Articles)",
          "lengthMenu":     "Afficher _MENU_ activations",
          "loadingRecords":   "Chargement...",
          "processing":     "En cours...",
          "search":     "<span style='font-size:15px;'>Recherche:</span>",
          "searchPlaceholder":    "Recherche",
          "zeroRecords":      "Aucun résultat trouvé.",
          "paginate": {
            "first":      "Première",
            "last":       "Dernière",
            "next":       "Suivant",
            "previous":     "Précédant"
          },
          "aria": {
            "sortAscending":  "Ordenación ascendente",
            "sortDescending": "Ordenación descendente"
          }
        },
        "lengthMenu": "Afficher _MENU_ activations",
        "lengthMenu":  [[3,5,7, 10, 20, 25, 50, -1], [3,5,7, 10, 20, 25, 50, "Tout"]],
        "iDisplayLength": 7,
        select: {
          style:    'os',
          selector: 'td.select-checkbox'
        },
        rowId: 'id',
        select: true,
        dom: 'Bfrtip',
        // buttons: [
        //  { extend: 'create', editor: editor },
        // { extend: 'edit',   editor: editor },
        // { extend: 'remove', editor: editor },
        //   'copy', 'csv', 'excel', 'pdf', 'print'
        // ],
        responsive: true,

      });

      // Ajout

      $(document).on('click','#btn-add',function(){

        var url = 'insertion.php';

        Swal.mixin({

          input: 'text',
          confirmButtonText: 'Next &rarr;',
          showCancelButton: true,
          progressSteps: ['1', '2', '3'],
          backdrop: `
            rgba(0,0,123,0.4)

           `

        }).queue([

          {
            title: 'Question 1',
            text: 'Quel est votre Nom?'
          },
          {
            title: 'Question 2',
            text: 'Quel est votre Classe?'
          },
          {
            title: 'Question 1',
            text: 'Quel est votre Numéro?'
          },

        ]).then((result) => {

          if (result.value) {

            var nom = result.value[0];

            var classe = result.value[1];

            var num = result.value[2];

            const donnees = JSON.stringify(result.value)

            Swal.fire({

              title: 'Terminé!',
              html: `
                Vos données:
                <pre><code>${donnees}</code></pre>
              `,
              confirmButtonText: 'Enrégistrer!'

            }).then((result) => {

              if (result.value) {

                if (nom == '') {

                  Swal.fire(
                    'Erreur!',
                    'Veillez remplir tous les champs.',
                    'error'
                  );

                  return false;
                }

                if (classe == '') {

                  Swal.fire(
                    'Erreur!',
                    'Veillez remplir tous les champs.',
                    'error'
                  );

                  return false;
                }

                if (num == '') {

                  Swal.fire(
                    'Erreur!',
                    'Veillez remplir tous les champs.',
                    'error'
                  );

                  return false;
                }

                $.ajax({

                  type: 'POST',

                  url: url,

                  data: {

                    nom: nom,

                    classe: classe,

                    num: num

                  },

                  success: function(reponse){

                    dataTable.ajax.reload();

                    if (reponse == "erreur"){

                      Swal.fire(
                        'Erreur!',
                        'Ce élève a été déjà listé.',
                        'error'
                      );

                    }
                    if(reponse == "succes") {

                      Swal.fire(
                        'Ajout effectué!',
                        'Ce élève a été ajouté avec succès.',
                        'success'
                      );

                    }

                  }

                });

              }

            });

          }

        });

      });

      // Suppression

      $(document).on('click','#btn-del', function(){

        var id = $(this).data('id3');

        var nom = $(this).data('nom');

        if (id == '') {

          Swal.fire(
            'Erreur!',
            'Veillez choisir un id.',
            'error'
          );

          return false;

        };

        Swal.fire({
          title: 'Êtes-vous sûr?',
          text: "Supprimé de la liste!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Oui!'
        }).then((result) => {

          if (result.value) {

            $.ajax({

              url: 'suppression.php',

              method: 'post',

              data: {

                id: id,

                nom: nom,

              },

              dataType: 'text',

              success: function(data){

                dataTable.ajax.reload();

                if (data == 'Del') {

                  Swal.fire({
                    position: 'top-end',
                    title: 'Supprimer',
                    text: "Supprimer avec success.",
                    type: 'success',
                    showConfirmButton: false,
                    timer: 2500
                  });

                }

              }

            });

          };

        });

      })

    });

</script>

<!-- scripts zone end -->
