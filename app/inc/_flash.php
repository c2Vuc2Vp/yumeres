<?php

if(isset($_SESSION['notification']['message'])){

  ?>

  <div class="alert alert-<?=$_SESSION['notification']['type']?>">

    <button type="button" class="close" data-dismiss="alert">&times;</button>

    <?=$_SESSION['notification']['message']?>

  </div>

  <?php

  $_SESSION['notification'] = [];

}
