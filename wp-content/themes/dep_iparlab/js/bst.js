(function ($) {
	
	"use strict";

	$(document).ready(function() {

		// Comments
		$(".commentlist li").addClass("panel panel-default");
		$(".comment-reply-link").addClass("btn btn-default");
	
		// Forms
		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');
		
		// You can put your own code in here

	});
	$('#nav-icon').on('click',function(e){
        e.preventDefault();
        $(this).toggleClass('active');
        $(document.body).toggleClass('opened-menu');
    });

}(jQuery));
