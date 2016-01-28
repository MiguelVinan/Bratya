(function(){
  var $btnMenu = $('.btn-menu');
  var $nav = $('.navigation-list');
  var $btnMinisterios = $('.entidad .btn-ministerios');
  var $entidad = $('.entidad');

  $btnMenu.click( function(e){
    e.preventDefault();
    $nav.animate({height: 'toggle', opacity: 'toggle'});
  });

  $btnMinisterios.on("click", function(e){
    e.preventDefault();
    $(this).siblings(".list").animate({height: 'toggle', opacity: 'toggle'});
  })

})();
