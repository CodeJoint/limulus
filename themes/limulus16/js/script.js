$(document).ready(function(){
	console.log("si no funcionara no me vieras");

	$(".menu-caja").hide();
	$(".menu-bars").click(function(){
		$(".menu-bars").hide();$(".menu-caja").fadeIn("slow","swing");
	});
	$(".chosen").click(function(){
		$(".menu-caja").fadeOut("slow");$(".menu-bars").show();
	});

/*
SEARCH FORM
*/
	if ($(window).width() <=840) {
		/*$(".logo").hide();*/
		$(".menu_item").hide();
		$(".search_btn").click(function(){
			$(".menu-bars").hide();
			$(".logo").fadeOut("slow");
			$(".menu_item").fadeIn("slow");
		});
	};
});





