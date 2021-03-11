<?php

require_once"../../account.php";

?>
<div class="animated slow pulse section__content section__content--p30">
  
  <div class="container-fluid">
   
    <div class="row">
     
      <div class="col-md-12">
     
        <div class="overview-wrap">
     
          <h2 class="heading-title">Bienvenue <?=$username?></h2>
     
        </div>
     
      </div>
    
    </div>

    <div class="row">
      
      <div class="col-md-4">
     
        <div class="card">
          
          <div class="card-header">
            <i class="fas fa-info-circle"></i>
            <strong class="card-title"> Info. Général
            
              <small>
        
                <span class="badge badge-danger float-right mt-1">1</span>
        
              </small>
            
            </strong>
      
          </div>
      
          <div class="card-body">
          
            <p class="card-text">C'est ici que tous les informations vous seront transmisent.</p>
     
          </div>
      
        </div>
      
      </div>
  
    </div>

  </div>

  <div class="row bottom-fixed">
      
    <div class="col-md-12">
      
      <div class="copyright">

        <p>Copyright © <?=date("Y")?> Yumeres. All rights reserved.</p>

      </div>

    </div>

  </div>

</div>
