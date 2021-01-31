<?php

if(isset($errors)){

  ?>

  <div class="alert alert-danger">

    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <?php

    if (count($errors) == 1) {

      foreach ($errors as $value) {

        echo $value;

      }

    }elseif (count($errors) > 1) {

      foreach ($errors as $value) {

        echo $value.'<br><br>';

      }

    }


    ?>

  </div>

  <?php

}
