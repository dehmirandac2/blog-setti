var menu = (function(){
	var module = {};
	module.init = function(){
		$("#menu li").mouseenter(function(){
			if(!$(this).parent().hasClass("children")){
				$(this).children("a").css("color", "#ffffff");
			}
			$(this).children(".children").fadeIn("fast");
		})
		$("#menu li").mouseleave(function(){
			if(!$(this).parent().hasClass("children")){
				$(this).children("a").css("color", "#000000");
			}
			$(this).children(".children").fadeOut("fast");
		})
	}
	module.init()
	return module;
})()