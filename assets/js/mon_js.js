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

});
