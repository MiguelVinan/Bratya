(function(){
  $btnMenu = $('.btn-menu');
  $nav = $('.navigation-list');

  $btnMenu.click( function(e){
    e.preventDefault();
    $nav.animate({height: 'toggle', opacity: 'toggle'});
  });

})();
