jQuery(document).ready(function($) {

    $('.members-login p').click(function(e){
      if (!(e.which > 1 || e.shiftKey || e.altKey || e.metaKey)) {
        e.preventDefault();
        if($('.members-login').hasClass('expanded')){
          $('.members-login').removeClass('expanded');
        }else{
          $('.members-login').addClass('expanded');
        }
      }
    });
     $('.menu-toggle').click(function(e){
      if (!(e.which > 1 || e.shiftKey || e.altKey || e.metaKey)) {
        e.preventDefault();
        if($('.menu-header ul').hasClass('expanded-menu')){
          $('.menu-header ul').removeClass('expanded-menu');
        }else{
          $('.menu-header ul').addClass('expanded-menu');
        }
      }
    });

});