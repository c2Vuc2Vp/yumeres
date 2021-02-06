$(document).ready(function() {

  //login page
  // init
  $('.main-content').load('vues/account/');

  $('button.link').click(function(){

    const page = $(this).attr('id');

    $('.main-content').load('vues/'+page);

    /* Changement d'état des liens de navigation */
    $('button.link.active').removeClass('active');
    $(this).addClass('active');

  })

  //account page
  // init
  $('#container_home').load('content_home.php');

  $('a.nav-link').click(function(){

    const contain = $(this).attr('id');

    $('#container_home').load(contain + '.php');

    $('a.nav-link.active').removeClass('active');
    $(this).addClass('active');

  })

});
