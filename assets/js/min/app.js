!function(){"use strict";if(window.matchMedia("(min-width: 400px)").matches){var e=new ScrollMagic.Controller({globalSceneOptions:{triggerHook:"onCenter"}}),o=(new TimelineMax).add([TweenMax.fromTo("#parallaxText .layer1",1,{y:-30},{y:-130}),TweenMax.fromTo("#parallaxText .layer2",1,{y:180},{y:-30})]),a=(new ScrollMagic.Scene({duration:"50%",easing:"easeOutStrong"}).setTween(o).addTo(e),(new TimelineMax).add([TweenMax.to("#Hands .leftHand",1,{y:80,x:200}),TweenMax.to("#Hands .rightHand",1,{y:-250,x:-200}),TweenMax.fromTo("#HandsText h2",1,{opacity:0,y:-80},{opacity:1,y:0,delay:"0.5"}),TweenMax.fromTo("#HandsText p",1,{opacity:0,y:-90},{opacity:1,y:0,delay:"0.8"})])),n=(new ScrollMagic.Scene({triggerElement:"#trigger2",duration:"90%"}).setTween(a).addTo(e),(new TimelineMax).add([TweenMax.fromTo("#Results-info h2",1,{opacity:"0",y:"-80"},{opacity:"1",y:"0"}),TweenMax.fromTo("#Results-info p",1,{opacity:"0",y:"-90"},{opacity:"1",y:"0",delay:"0.3"})])),t=(new ScrollMagic.Scene({triggerElement:"#triggerProgress",duration:300,offset:"270"}).setTween(n).addTo(e).on("progress",function(e){$("#progress").text((200*e.progress).toFixed(0))}),(new TimelineMax).add([TweenMax.fromTo(".Title .markWater",4,{opacity:.3},{opacity:1,y:-130}),TweenMax.fromTo(".Including-objetions .Objetion-one",1,{y:150,scale:.7,opacity:0},{y:0,scale:1,opacity:1}),TweenMax.fromTo(".Including-objetions .Objetion-two",1,{y:150,scale:.7,opacity:0},{y:0,scale:1,opacity:1,delay:1}),TweenMax.fromTo(".Including-objetions .Objetion-three",1,{y:150,scale:.7,opacity:0},{y:0,scale:1,opacity:1,delay:2}),TweenMax.fromTo(".Including-objetions .Objetion-four",1,{y:150,scale:.7,opacity:0},{y:0,scale:1,opacity:1,delay:3}),TweenMax.to(".Including .Objetion",2,{y:200,delay:4})])),i=(new ScrollMagic.Scene({triggerElement:"#trigger3",duration:"80%",offset:"100"}).setTween(t).addTo(e),(new TimelineMax).add([TweenMax.fromTo("#GetIn .GetIn-info h2",1,{opacity:0,y:"-100"},{opacity:1,y:"0"}),TweenMax.fromTo("#GetIn .GetIn-info p",1,{opacity:0,y:"-150"},{opacity:1,y:"0"})])),r=(new ScrollMagic.Scene({triggerElement:"#triggerGetIn",duration:"50%",offset:"100"}).setTween(i).addTo(e),(new TimelineMax).add([TweenMax.fromTo("#markWater-contact .markWater",1,{opacity:"0.1",y:"50"},{opacity:"0.3",y:"-30"})]));new ScrollMagic.Scene({triggerElement:"#triggerContact",duration:"200",offset:"100"}).setTween(r).addTo(e)}else console.log("mobile")}();
!function(){function t(){$("body").css("overflow-y","hidden")}function i(){$("body").css("overflow-y","auto")}$(".Services-list a").on("click",function(i){i.preventDefault();var e=$(this).siblings();e.animate({height:"toggle",opacity:"toggle"},300),t()}),$(".ServicesDescription").click(function(t){t.preventDefault(),$(this).animate({height:"toggle",opacity:"toggle"},300),i()})}();