!function(){"use strict";var e=new ScrollMagic.Controller({globalSceneOptions:{triggerHook:"onCenter"}});e.scrollTo(function(e){TweenMax.to(window,1,{scrollTo:{y:e}})}),$(document).on("click","a[href^='#']",function(o){var t=$(this).attr("href");$(t).length>0&&(o.preventDefault(),e.scrollTo(t),window.history&&window.history.pushState&&history.pushState("",document.title,t))});var o=(new TimelineMax).add([TweenMax.fromTo(".btn-top",.5,{visibility:"hidden"},{visibility:"visible"}),TweenMax.from(".btn-top",1,{opacity:0,y:-20,delay:.5})]);new ScrollMagic.Scene({triggerElement:"#triggerBtnTop",duration:"100",offset:"-250"}).setTween(o).addTo(e);if(window.matchMedia("(min-width: 769px)").matches){var t=(new TimelineMax).add([TweenMax.fromTo("#parallaxText .layer1",1,{y:-30},{y:-130}),TweenMax.fromTo("#parallaxText .layer2",1,{y:180},{y:-30})]),n=(new ScrollMagic.Scene({duration:"50%",easing:"easeOutStrong"}).setTween(t).addTo(e),(new TimelineMax).add([TweenMax.to("#Hands .leftHand",1,{y:80,x:200}),TweenMax.to("#Hands .rightHand",1,{y:-250,x:-200}),TweenMax.fromTo("#HandsText h2",1,{opacity:0,y:-80},{opacity:1,y:0,delay:"0.5"}),TweenMax.fromTo("#HandsText p",1,{opacity:0,y:-90},{opacity:1,y:0,delay:"0.8"})])),a=(new ScrollMagic.Scene({triggerElement:"#trigger2",duration:"90%"}).setTween(n).addTo(e),(new TimelineMax).add([TweenMax.fromTo("#Results-info h2",1,{opacity:"0",y:"-80"},{opacity:"1",y:"0"}),TweenMax.fromTo("#Results-info p",1,{opacity:"0",y:"-90"},{opacity:"1",y:"0",delay:"0.3"})])),i=(new ScrollMagic.Scene({triggerElement:"#triggerProgress",duration:300,offset:"270"}).setTween(a).addTo(e).on("progress",function(e){$("#progress").text((200*e.progress).toFixed(0))}),(new TimelineMax).add([TweenMax.fromTo(".Title .markWater",4,{opacity:.3},{opacity:1,y:-130}),TweenMax.fromTo(".Including-objetions .Objetion-one",1,{y:150,scale:.7,opacity:0},{y:0,scale:1,opacity:1}),TweenMax.fromTo(".Including-objetions .Objetion-two",1,{y:150,scale:.7,opacity:0},{y:0,scale:1,opacity:1,delay:1}),TweenMax.fromTo(".Including-objetions .Objetion-three",1,{y:150,scale:.7,opacity:0},{y:0,scale:1,opacity:1,delay:2}),TweenMax.fromTo(".Including-objetions .Objetion-four",1,{y:150,scale:.7,opacity:0},{y:0,scale:1,opacity:1,delay:3}),TweenMax.to(".Including .Objetion",2,{y:200,delay:4})])),r=(new ScrollMagic.Scene({triggerElement:"#trigger3",duration:"80%",offset:"100"}).setTween(i).addTo(e),(new TimelineMax).add([TweenMax.fromTo("#GetIn .GetIn-info h2",1,{opacity:0,y:"-100"},{opacity:1,y:"0"}),TweenMax.fromTo("#GetIn .GetIn-info p",1,{opacity:0,y:"-150"},{opacity:1,y:"0"})]));new ScrollMagic.Scene({triggerElement:"#triggerGetIn",duration:"50%",offset:"100"}).setTween(r).addTo(e)}else console.log("mobile"),$("#progress").text("200").css("font-size","102px")}();
!function(){$btnMenu=$(".btn-menu"),$nav=$(".navigation-list"),$btnMenu.click(function(n){n.preventDefault(),$nav.animate({height:"toggle",opacity:"toggle"})})}();
!function(){function t(){$("body").css("overflow-y","hidden")}function i(){$("body").css("overflow-y","auto")}$(".Services-list a").on("click",function(i){i.preventDefault();var e=$(this).siblings();e.animate({height:"toggle",opacity:"toggle"},300),t()}),$(".ServicesDescription").click(function(t){t.preventDefault(),$(this).animate({height:"toggle",opacity:"toggle"},300),i()})}();