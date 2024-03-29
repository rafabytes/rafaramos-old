$(document).ready(function(){
   // cache the window object
   $window = $(window);
 
   $('#intro').each(function(){
     // declare the variable to affect the defined data-type
     var $scroll = $(this);
                     
      $(window).scroll(function() {
        // HTML5 proves useful for helping with creating JS functions!
        // also, negative value because we're scrolling upwards                             
        var yPos = -($window.scrollTop() / $scroll.data('speed')); 
        // yPos += 500;
        // background position
        var coords = '50% '+ yPos + 'px';
 
        // move the background
        $scroll.css({ backgroundPosition: coords });    
      }); // end window scroll
   });  // end section function
}); // close out script

$( "button.navbar-toggle" ).click(function() {
  $( "nav.navbar" ).toggleClass( "in" );
});