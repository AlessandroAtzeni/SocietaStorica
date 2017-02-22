$(document).ready(function() {

    setTimeout(function(){
        $('body').addClass('loaded');
    }, 3000);

    $(window).scroll(function() {
      var scroll = $(this).scrollTop();

      $('.image').css({
        'transform' : 'translate(0px, -'+ scroll / 10 +'%)'
      });
    });
});
