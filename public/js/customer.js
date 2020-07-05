// make shadow when scroll
var header = $('.header');
$(window).scroll(function(e){
    if(header.offset().top >= 300){
        if(!header.hasClass('shadow-header')){
            header.addClass('shadow-header');
        }
    }else{
        header.removeClass('shadow-header');
    }
});

function is_show_menu_mobile() {
    // x.classList.toggleClass("change-mobile");
    $('.navbar-toggler').toggleClass("change-mobile");

    $('.ct-slidebar-01').toggleClass("show");
    $('.ct-mobile-overlay').toggleClass("show");
  }
