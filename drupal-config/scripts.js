(function ($) {
  Drupal.behaviors.personalMenu = {
    attach: function (context, settings) {
      $(document).ready(function() {

        function mobileMenu() {
          var browserWidth = window.innerWidth;
          //If browser window width is under 860px
          if(browserWidth < 660) {

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
                //Slideup the dropdown menu
                $('#menu-block').slideUp('400', function(){
                  $('#menu-block').removeClass('open');
                  $('#menu-block').addClass('close');
                });
              }
            });
          }//If browser window width is over 860px; show menu
          else if (660 <= browserWidth) {
            $('#menu-block').css('width', 'auto');
            if( $('#menu-block').css('display') == 'none') {
              $('#menu-block').show();
            }
          }

        }

        //Excecute mobileMenu function when users land on the page
        mobileMenu();

        //To execute the function when window is resized
        $(window).resize(function(){
          mobileMenu();
        });

      });
    }
  }
})(jQuery);