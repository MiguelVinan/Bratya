(function(){
  var btnMinisterios = $('.entidad .btn-ministerios');
  btnMinisterios.on('click',function(){
    $(this).find('i').toggleClass('fa-plus fa-minus');
  })
})();
