(function(){
  'use strict'

  var controller = new ScrollMagic.Controller({globalSceneOptions:{
      triggerHook: 'onCenter'
    }
  });

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

  /*
   * Building
   */

  var tweenContact = new TimelineMax()
    .add([
      TweenMax.fromTo('#markWater-contact .markWater',1, {opacity:"0.1",y:'50'},{opacity:"0.3", y:"-30"} )
    ]);

  var sceneContact = new ScrollMagic.Scene({
    triggerElement: '#triggerContact',
    duration: '200',
    offset: '100'
  })
  .setTween(tweenContact)
  .addTo(controller)

})();
