(function( $ ) {
	'use strict';

	  $(function() {
            var color = weAreOpenOptions.highlightColor;
           //get the current date & current Day
           var date = new Date(),
           day = date.getDay()-1;

           //subract 1 from date changing the date range from Sunday - Monday to Monday-Sunday
           if (day < 0) {
               day = 6;
           }
           //get all we-are-open rows
           var $widget = $('.widget_we_are_open_widget');

           $widget.each(function(i,el){

            var $rows =  $(this).find('tr');

              $($rows[day]).addClass('we-are-open-current').css({background:color});

           });
             });
	

})( jQuery );
