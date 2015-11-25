(function(){
  'use strict'

  var controller = new ScrollMagic.Controller({globalSceneOptions:{
      triggerHook: 'onCenter'
    }
  });

  controller.scrollTo(function (newpos){
    TweenMax.to(window, 1, {scrollTo: {y: newpos}} );
  })

  $(document).on("click", "a[href^='#']", function (e) {
		var id = $(this).attr("href");
		if ($(id).length > 0) {
			e.preventDefault();
			controller.scrollTo(id);
			if (window.history && window.history.pushState) {
				history.pushState("", document.title, id);
			}
		}
	});


	var $window = $(window);		//Window object

	var scrollTime = 1.2;			//Scroll time
	var scrollDistance = 120;		//Distance. Use smaller value for shorter scroll and greater value for longer scroll

	$window.on("mousewheel DOMMouseScroll", function(event){

		event.preventDefault();

		var delta = event.originalEvent.wheelDelta/120 || -event.originalEvent.detail/3;
		var scrollTop = $window.scrollTop();
		var finalScroll = scrollTop - parseInt(delta*scrollDistance);

		TweenMax.to($window, scrollTime, {
			scrollTo : { y: finalScroll, autoKill:true },
				ease: Power1.easeOut,	//For more easing functions see http://api.greensock.com/js/com/greensock/easing/package-detail.html
				autoKill: true,
				overwrite: 5
			});

	});

  /*
   * Building Top buton
   */

  var tweenBtnTop = new TimelineMax()
  .add([
    TweenMax.fromTo(".btn-top", 0.5, {visibility: 'hidden'},{visibility: 'visible'}),
    TweenMax.from(".btn-top", 1, {opacity: 0, y: -20, delay: 0.5} )
  ])

  var sceneBtnTop = new ScrollMagic.Scene({
    triggerElement: '#triggerBtnTop',
    duration: '100',
    offset: '-250'
  })
  .setTween(tweenBtnTop)
  .addTo(controller)

  if(window.matchMedia("(min-width: 769px)").matches){
    // build tween Intro
  	var tween = new TimelineMax()
  		.add([
  			TweenMax.fromTo("#parallaxText .layer1", 1, {y:-30}, {y:-130}),
  			TweenMax.fromTo("#parallaxText .layer2", 1, {y:180}, {y:-30})
  		]);

  	// build scene
  	var scene = new ScrollMagic.Scene({duration: "50%",easing:"easeOutStrong" })
  		.setTween(tween)
  		.addTo(controller);

    /*
     * Build Join hands
     */

    var tweenHand = new TimelineMax()
      .add([
        TweenMax.to('#Hands .leftHand', 1, {y:80, x:200}),
        TweenMax.to('#Hands .rightHand', 1, {y:-250, x:-200}),
        TweenMax.fromTo('#HandsText h2', 1, {opacity: 0,y:-80},{opacity:1,y:0, delay: '0.5'}),
        TweenMax.fromTo('#HandsText p', 1, {opacity: 0,y:-90},{opacity:1,y:0, delay: '0.8'})

      ]);

    var sceneHand = new ScrollMagic.Scene({triggerElement: '#trigger2' , duration: '90%' })
      .setTween(tweenHand)
      .addTo(controller)

    /*
     * Build Progress
     */
     var tweenResults = new TimelineMax()
      .add([
        TweenMax.fromTo('#Results-info h2', 1, {opacity: '0', y: '-80'}, {opacity: '1', y: '0'}),
        TweenMax.fromTo('#Results-info p', 1, {opacity: '0', y: '-90'}, {opacity: '1', y: '0', delay: "0.3"})
      ])

     var sceneProgress = new ScrollMagic.Scene({triggerElement: "#triggerProgress", duration: 300, offset: '270'})
      .setTween(tweenResults)
  		.addTo(controller)
  		 // add indicators (requires plugin)
  		.on("progress", function (e) {
  			$("#progress").text((e.progress * 200).toFixed(0))
  		});

    /*
     * Build Including
     */

    var tweenIncluding = new TimelineMax()
      .add([
        TweenMax.fromTo('.Title .markWater', 4,{opacity: 0.3} ,{opacity: 1,y:-130}),
        TweenMax.fromTo('.Including-objetions .Objetion-one', 1,{y:150,scale:0.7,opacity: 0},{y:0,scale:1,opacity:1}),
        TweenMax.fromTo('.Including-objetions .Objetion-two', 1,{y:150,scale:0.7,opacity: 0},{y:0,scale:1,opacity:1, delay:1}),
        TweenMax.fromTo('.Including-objetions .Objetion-three', 1,{y:150,scale:0.7,opacity: 0},{y:0,scale:1,opacity:1, delay:2}),
        TweenMax.fromTo('.Including-objetions .Objetion-four', 1,{y:150,scale:0.7,opacity: 0},{y:0,scale:1,opacity:1, delay:3}),
        TweenMax.to('.Including .Objetion',2,{y:200, delay: 4})
      ])
    var sceneIncluding = new ScrollMagic.Scene({triggerElement: '#trigger3', duration: '80%', offset:'100'})
      .setTween(tweenIncluding)
      .addTo(controller)

    /*
     * Building GetIn
     */

    var tweenGetIn = new TimelineMax()
      .add([
        TweenMax.fromTo('#GetIn .GetIn-info h2',1,{opacity: 0, y:"-100"},{opacity: 1, y:"0"} ),
        TweenMax.fromTo('#GetIn .GetIn-info p',1,{opacity: 0, y:"-150"},{opacity: 1, y:"0"} )
      ])

    var sceneGetIn = new ScrollMagic.Scene({
      triggerElement: '#triggerGetIn',
      duration: '50%',
      offset: '100'
    })
    .setTween(tweenGetIn)
    .addTo(controller)

  } else{
    console.log('mobile');
    $('#progress').text('200').css('font-size','102px')
  }

  $(document).ready(function(){
    $('.loading').fadeOut()
  });

})();
