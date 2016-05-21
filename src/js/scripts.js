;(function($, window, document, undefined) {
  $(document).ready(function() {

  
    function mobileMenu() {
      var browserWidth = window.innerWidth;

      if(browserWidth < 860) {

        //Set width to the dropdown menu
        var outerBrowserWidth = $(window).width();
        $('#menu-block').css('width', outerBrowserWidth-30);

        //Show menu block if it's mobile device
        $('.navbar-toggle').click(function() {
          if(!$('#menu-block').hasClass('open')) {


            //Slidedown the dropdown menu
            $('#menu-block').slideDown('400', function(){
              $('#menu-block').removeClass('close');
              $('#menu-block').addClass('open');
            });
          }
          else {
            $('#menu-block').slideUp('400', function(){
              $('#menu-block').removeClass('open');
              $('#menu-block').addClass('close');
            });
          }
        });
      }
      else if (860 <= browserWidth) {
        $('#menu-block').css('width', 'auto');
        if( $('#menu-block').css('display') == 'none') {
          $('#menu-block').show();
        }
      }

    }

    //Excecute mobileMenu when users land on the page
    mobileMenu();

    //To execute when window is resized
    $(window).resize(function(){
      mobileMenu();
    });

  });



})(jQuery, window, document);
