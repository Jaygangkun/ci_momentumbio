(function($){
    $(document).on('click', '#btn_nav_hamburger', function() {
        if($('.menu-container').hasClass('open')) {
            $('.menu-container').removeClass('open')
        }
        else {
            $('.menu-container').addClass('open')
        }
    })
})(jQuery)