(function(){

var $estructura = $(".estructura-encabezado .boton");
var documento = $(".estructura-pie .documento").find('a');
var $ver = $(".estructura-titulo .boton");

$estructura.on("click", function(e){
  e.preventDefault();
  $(this).parents('.estructura-encabezado').siblings('.estructura-cuerpo, .estructura-pie').animate({height: 'toggle', opacity: 'toggle'})
})

$ver.on('click',function(){
  $(this).find('i').toggleClass('fa-arrow-down fa-arrow-up');
})
})();
