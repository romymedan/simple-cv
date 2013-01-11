$(document).ready(function() {
	anchor.init()
});

anchor = {
	init : function()  {
	
		$("a.anchorLink").click(function () {	
			elementClick = $(this).attr("href")
			$(this).parents('ul').find('li').removeClass('active')
			$(this).parent('li').addClass('active');
			
			destination = $(elementClick).offset().top;
			$("html:not(:animated),body:not(:animated)").animate({ scrollTop: destination}, 500 );
		  	return false;
		})
		
	}
}