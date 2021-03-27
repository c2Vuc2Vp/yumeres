
<?php

  /////////////////////////
  // demarrer la session //
  /////////////////////////

  session_start();

  //////////////////////////////////////////////////////////////
  // inclure le fichier de fonction et de connection à la bdd //
  //////////////////////////////////////////////////////////////

  require_once "../app/inc/function.php";
  require_once "../app/inc/connect.php";

 ?>
 
<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">

	  <select name="categorie" id="categorie" class="form-control" required="">

      <option>Choisir</option>

      <?php

        $cat = $pdo->query("SELECT list_cat FROM categories ORDER BY list_cat ASC");

        while ($categorie = $cat->fetch()){

          ?>

            <option value="<?=$categorie['list_cat']?>"><?=$categorie['list_cat']?></option>

          <?php

        }

      ?>

    </select>
  Select image to upload:
  <input type="file" name="file" id="fileToUpload">
  
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
