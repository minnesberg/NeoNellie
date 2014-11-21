$( document ).ready(function() {

//$(".comment-form").addClass("regular");

function formToggle() {
	//console.log("formToggle");
	/*
	if ($(".comment-form").hasClass("regular")) {

	} else {
		console.log("addclass");
		$(".comment-form").addClass("formToggle");
	}
	*/
	//var run = "kor";
	$('.commentheader').click(function() {
		//var run = "har_kort";
		//console.log("click foemtoggle!");
		var form = $(this).parent().find(".comment-form");
		$(this).slideUp()
		form.removeClass("hide").addClass("show")
		/*
		console.log(form);

		if (form.hasClass("regular")) {

		} else {

			if (form.hasClass("hide")) {
				console.log("hej hide");
				form.removeClass("hide").addClass("show")
				
			} else {
				console.log("hej show");
				form.removeClass("show").addClass("hide")
				
			}
			return;
		}
		*/


	});
}

	$('.commentheader').click(function() {

		var form = $(this).parent().find(".comment-form");
		$(this).slideUp()
		form.removeClass("hide").addClass("show")
		
		/*
		console.log("click regular");
		var form = $(this).parent().find(".comment-form");
		//var form = $(this).next(".comment-form");

		if (form.hasClass("formToggle")) {
			console.log("skipped");
			return;
		} else {
			if (form.hasClass("hide")) {
				form.removeClass("hide").addClass("show")
			} else {
				form.removeClass("show").addClass("hide")
			}
		}
		var run = "kor";

		*/
	});

$('.content').jscroll({
    loadingHtml: imagepath,
    padding: 20,
    nextSelector: '.navigation a:last',
    contentSelector: '.scroll-wrapper',
    debug: true,
    callback: formToggle
});



/*

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
    itemSelector : "div.scroll-wrapper",          
                   // selector for all items you'll retrieve
    bufferPx     : 500,
    loading: {
    	img: imagepath,
    	msgText: "",
	},
	animate: false,
    debug : true
  },function(){

    $( document ).ready(function() {
    	var callback = true;
    //$(".comment-form").addClass("hide");
    $('.commentheader').click(function() {
        console.log("click call back")
        var form = $(this).next(".comment-form");
            if (form.hasClass("hide")) {
                form.removeClass("hide").addClass("show")
            } else {
                form.removeClass("show").addClass("hide")
            }   

    });
    });



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

*/

  });



  		//$(this).next(".comment-form").toggleClass("show");
  		//$(this).next(".comment-form").slideToggle();
  		
  		//$(this).next(".comment-form").toggleClass("show");