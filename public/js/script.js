// Scrolling Navigation
	$(document).on("scroll", function(){
		if
      ($(document).scrollTop() > 86){
		  $("#navigation").addClass("shrink");
		}
		else
		{
			$("#navigation").removeClass("shrink");
		}
	});

// Preloader function

jQuery(window).load(function(){
	jQuery(".preloader").fadeOut(200);
});
