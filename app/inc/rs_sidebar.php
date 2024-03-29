
<?php

  $assets = '../../assets/';

  $vendor = '../../vendor/';

  $js = '../files/js/';

  $img = '../files/img/';

  $css = '../files/css/';

?>
<div class="mobile-nav">
    <div class="ynb">
        <a href="rs/acceuil/index.php"><img src="<?=$img?>logo.png" alt=""></a>
    </div>
    <div class="yntg">
        <span></span><span></span><span></span>
    </div>
</div>

<header class="header-area">
    <div class="nav-close">
        <i class="fa fa-close" aria-hidden="true"></i>
    </div>
    <div class="logo">
        <a href="../acceuil/index.php"><img src="<?=$img?>logo.png" alt=""></a>
    </div>
    <nav class="nvb">
        <ul>
            <li class="active"><a href="../acceuil/index.php">Accueil</a></li>
            <li><a href="../catalog/index.php">Catégorie</a></li>
            <li><a href="mailto:support@yumeres.com">Contact</a></li>
        </ul>
    </nav>

    <div class="mb-70"></div>
    <div class="cart-fav-search mb-50">
        <a href="../wishlist/index.php" class="cart-nav">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 24 24" stroke="currentColor"
                 fill="none" stroke-width="2">
                <circle cx="9" cy="21" r="1"></circle>
                <circle cx="20" cy="21" r="1"></circle>
                <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
            </svg>
            Panier
            <span>(0)</span></a>
        <a href="#" class="search-nav">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 52.966 52.966"
                 stroke="currentColor" fill="none" stroke-width="4">
                <path d="M51.704,51.273L36.845,35.82c3.79-3.801,6.138-9.041,6.138-14.82c0-11.58-9.42-21-21-21s-21,9.42-21,21s9.42,21,21,21c5.083,0,9.748-1.817,13.384-4.832l14.895,15.491c0.196,0.205,0.458,0.307,0.721,0.307c0.25,0,0.499-0.093,0.693-0.279C52.074,52.304,52.086,51.671,51.704,51.273z M21.983,40c-10.477,0-19-8.523-19-19s8.523-19,19-19s19,8.523,19,19S32.459,40,21.983,40z"/>
            </svg>
            Rechercher</a>
    </div>

    <div class="social-info d-flex justify-content-between">
        <a href="https://www.facebook.com/yumeres">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
            </svg>
        </a>
        <a href="https://www.telegram.com/yumeres">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 448 512"
                 fill="currentColor">
                <path d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z"/>
            </svg>
        </a>
        <a href="https://www.instagram.com/yumeres">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 448 512"
                 fill="currentColor">
                <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
            </svg>
        </a>
        <a href="mailto:support@yumeres.com">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 512 512"
                 fill="currentColor">
                <path d="M256 48C141.1 48 48 141.1 48 256s93.1 208 208 208 208-93.1 208-208S370.9 48 256 48zm54.6 36.4c27.1 8.6 52 23.6 72.7 44.3 20.7 20.7 35.7 45.6 44.3 72.7l-88.8 6c-8.2-14-19.9-25.7-33.9-34l5.7-89zm-181.9 44.3c20.7-20.7 45.5-35.7 72.7-44.3l5.7 89c-13.9 8.3-25.6 20-33.9 33.9l-88.9-5.9c8.7-27.1 23.7-52 44.4-72.7zm72.7 298.9c-27.1-8.6-52-23.6-72.7-44.3-20.7-20.7-35.7-45.6-44.3-72.7l89-5.7c8.2 13.9 19.9 25.5 33.8 33.8l-5.8 88.9zM256 324c-37.5 0-68-30.5-68-68s30.5-68 68-68 68 30.5 68 68-30.5 68-68 68zm127.3 59.3c-20.7 20.7-45.6 35.7-72.7 44.3l-5.9-88.9c14.1-8.3 25.8-20.1 34.1-34.2l88.8 6c-8.6 27.2-23.6 52.1-44.3 72.8z"/>
            </svg>
        </a>
    </div>

    <div id="dark_swipe">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="1" y="5" width="22" height="14" rx="7" ry="7"></rect>
            <circle cx="8" cy="12" r="3"></circle>
        </svg>
    </div>
</header>

<script>
    
  function search(){

    var search = $('input#search').val();

    var url = '../../app/inc/rs_search.php'

    if(search.length > 0){

      $.ajax({

        type: 'POST',

        url : url,

        data : {

          article : search
        },

        success: function(data){

          $('#result').html(" "+data).show();

        }

      });

    }else{
      $('#result').empty();
    }

  }
  
</script>
