jQuery(document).ready(function($) {

	//Function for infinityscroll callback
	function formToggle() {
		$('.commentheader').click(function() {
			var form = $(this).parent().find(".comment-form");
			$(this).slideUp()
			form.removeClass("hide").addClass("show")

		});
	}

	//Enables fancybox on linked images
	$('a[href$="jpg"], a[href$="png"], a[href$="jpeg"]').fancybox();

	//requires atleast 3 characters when searching
	$("input#s").attr("required","required").attr("pattern",".{3,}");

	//Shows comment field
	$('.commentheader').click(function() {

		var form = $(this).parent().find(".comment-form");
		$(this).slideUp()
		form.removeClass("hide").addClass("show")
		
	});


	// infinitescroll() is called on the element that surrounds 
	// the items you will be loading more of
	  $('.content').infinitescroll({
	 
	    navSelector  : "div.navigation",            
	                   // selector for the paged navigation (it will be hidden)
	    nextSelector : "a.next-page",    
	                   // selector for the NEXT link (to page 2)
	    itemSelector : ".scroll-wrapper",
		loading: {
			img   : "http://localhost:8888/migrated/wp-content/themes/NeoNellie/img/spinner.gif",
			msgText : "",
		},   
	    debug: true
	  }, function(){
	  	formToggle()
	  });

	  //Mobile menu click..
		$("header>h1>a").click(function(e){
			console.log("click")
			if ($(window).width() <= 768){
				e.preventDefault();
				var menu = $("header .main-menu");
				if (menu.hasClass("up")) {
					menu.removeClass("up").addClass("down");
					menu.slideDown();
					console.log("added down")
					
				} else {
					menu.removeClass("down").addClass("up");
					menu.slideUp();
					console.log("added up")
				}
			}
		});

	

});
