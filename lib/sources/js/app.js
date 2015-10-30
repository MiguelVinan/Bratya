(function(){

  var controller = new ScrollMagic.Controller({globalSceneOptions:{
      triggerHook: 'onCenter'
    }
  });

  // build tween
	var tween = new TimelineMax()
		.add([
			TweenMax.fromTo("#parallaxText .layer1", 1, {scale: 3, autoAlpha: 0.05, top: 300}, {top: -350}),
			TweenMax.fromTo("#parallaxText .layer2", 1, {scale: 2, autoAlpha: 0.3, top: 150}, {top: -175})
		]);

	// build scene
	var scene = new ScrollMagic.Scene({triggerElement: "#trigger2", duration: "30%" })
					.setTween(tween)
					.addIndicators() // add indicators (requires plugin)
					.addTo(controller);

})();
