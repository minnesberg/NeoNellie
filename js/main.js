$( document ).ready(function() {


function formToggle() {
	var form = $(this).next(".comment-form");
	if (form.hasClass("hide")) {
		form.removeClass("hide").addClass("show")
	} else {
		form.removeClass("show").addClass("hide")
	}	
}

	$(".comment-form").addClass("hide");
	$('.commentheader').click(function() {
		
		var form = $(this).next(".comment-form");
		if (form.hasClass("added")) {
			return
		} else {
			console.log("click innan");
			if (form.hasClass("hide")) {
				form.removeClass("hide").addClass("show")
			} else {
				form.removeClass("show").addClass("hide")
			}	
		}

	});



  $('div.scroll-wrapper').infinitescroll({
    navSelector  : "div.navigation",            
                   // selector for the paged navigation (it will be hidden)
    nextSelector : "a.next-page",    
                   // selector for the NEXT link (to page 2)
    itemSelector : "div.post-wrapper",          
                   // selector for all items you'll retrieve
    bufferPx     : 500,
    loading: {
    	img: imagepath,
    	msgText: "",
	},
	animate: false,
    debug : true
  },function(){


  	$(".comment-form").addClass("added hide");
	$('.commentheader').click(function() {
		var form = $(this).next(".comment-form");
		if ($(this).next(".comment-form").hasClass("hide")) {
			$(this).next(".comment-form").removeClass("hide").addClass("show clicked")
		} else {
			$(this).next(".comment-form").removeClass("show").addClass("hide")
			$(".color5 form").removeClass("hide").addClass("show clicked")
		}
	});


  	});



  });



  		//$(this).next(".comment-form").toggleClass("show");
  		//$(this).next(".comment-form").slideToggle();
  		
  		//$(this).next(".comment-form").toggleClass("show");