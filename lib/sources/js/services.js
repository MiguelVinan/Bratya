(function(){
  $('.Services-list a').on('click', function(e){
    e.preventDefault();
    var $service = $(this).siblings();
    $service.animate({height: 'toggle',opacity: 'toggle'}, 300);
    disableScroll();

  })

  // $('.ServicesDescription-times').on('click', function(e){
  //   e.preventDefault();
  //   $(this).parents('.ServicesDescription').animate({height: 'toggle', opacity: 'toggle'}, 300);
  //   enableScroll();
  // })

  $('.ServicesDescription').click(function(e){
    e.preventDefault();
    $(this).animate({height: 'toggle', opacity: 'toggle'}, 300);
    enableScroll();
  })

  function disableScroll(){
    $('body').css('overflow-y','hidden')
  }
  function enableScroll(){
    $('body').css('overflow-y','auto')
  }


})();
