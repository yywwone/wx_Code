// JavaScript Document
 $(function(){
	$('.nav_leftlist').on('click', 'h2', function(event) {
		$(this).siblings('dl').toggle();
		$(this).siblings('dl').find("dd").css("display","none");
		$(".nav_leftlist_name").removeClass("cur");
	});
	$('.nav_leftlist').on('click', 'dl dt', function(event){
		$(this).siblings('dd').toggle();
	});
	 $('.a1').click(function(){
			$(".a1 .nav_leftlist_name").removeClass("cur");
			$(this).find(".nav_leftlist_name").addClass("cur");
	});


	 $('.nav_leftlist1').on('click', 'h2', function(event) {
		$(this).siblings('dl').toggle();
		$(this).siblings('dl').find("dd").css("display","none");
		$(".nav_leftlist_name").removeClass("cur");
	});
	$('.nav_leftlist1').on('click', 'dl dt', function(event){
		$(this).siblings('dd').toggle();
	});
});