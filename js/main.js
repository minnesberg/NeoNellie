$( document ).ready(function() {

	function formToggle() {
		$('.commentheader').click(function() {
			var form = $(this).parent().find(".comment-form");
			$(this).slideUp()
			form.removeClass("hide").addClass("show")

		});
	}

	//$("header").slideDown(250)

	$('.commentheader').click(function() {

		var form = $(this).parent().find(".comment-form");
		$(this).slideUp()
		form.removeClass("hide").addClass("show")
		
	});

	$('.content').jscroll({
	    loadingHtml: imagepath,
	    padding: 20,
	    nextSelector: '.navigation a:last',
	    contentSelector: '.scroll-wrapper',
	    debug: true,
	    callback: formToggle
	});

		$("header>h1>a").click(function(e){
			console.log("click")
			e.preventDefault();
			if ($(window).width() <= 768){
				var menu = $("header .main-menu");
				if (menu.hasClass("up")) {
					menu.removeClass("up").addClass("down");
					menu.slideDown();
					console.log("hrj")
					
				} else {
					menu.removeClass("down").addClass("up");
					menu.slideUp();
					console.log("hr222j")
				}
			}
		});

});
