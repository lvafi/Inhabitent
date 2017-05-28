(function($) {
  console.log("working?")
  //This will show/hide the search form in navigation!!
  $(document).ready(function() {
    $('.show-search').on('click', function(event){
      event.preventDefault();
      console.log('hello world');
      $('#site-navigation input[type=search]').animate({width: 'toggle'}).focus();
    });

    //This will hide the search form when no longer in focus.
    $('#site-navigation input[type=search]').on('focusout', function(){
      $(this).animate({width: 'toggle'});
    });
  });
})(jQuery);