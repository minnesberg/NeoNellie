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

});
