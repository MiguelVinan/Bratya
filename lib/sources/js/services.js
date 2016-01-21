(function(){
  $('.Services-list a').on('click', function(e){
    e.preventDefault();
    var $service = $(this).siblings();
    $service.animate({height: 'toggle',opacity: 'toggle'}, 300);
    $('.ServicesDescription').on({
    'mousewheel': function(e) {
        if (e.target.id == 'el') return;
        e.preventDefault();
        e.stopPropagation();
        }
    });
    $(document).delegate(".ServicesDescription", "scrollstart", false);
    $('.btn-top').hide();
  });
  $('.ServicesDescription').click(function(e){
    e.preventDefault();
    $(this).animate({height: 'toggle', opacity: 'toggle'}, 300);
    $('.btn-top').show();
  })

  function disableScroll(){
    $('body').css('overflow-y','hidden')
  }
  function enableScroll(){
    $('body').css('overflow-y','auto')
  }


})();
