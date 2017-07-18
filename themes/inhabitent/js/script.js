jQuery(document).ready(function($) {

  // latest adventure layout
	$('.adventures ul').isotope({
    itemSelector: '.adventures li',
    masonry: {
    gutter: 10,
    columnWidth: 270
    }
	});
  
  // search toggle
  $( ".show-search" ).click(function() {
    $( ".search-field" ).toggle( "fold", 1000 );
  });

  // scroll menu bar
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
    console.log(scroll);
    
  });
  
}); // end document ready
