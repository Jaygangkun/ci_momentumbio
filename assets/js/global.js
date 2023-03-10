(function($){
    $(document).ready(function() {
        // AOS.init({
        //     once: true
        // });
    })
    
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();
    
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });

    $(document).on('click', '#btn_nav_hamburger', function() {
        if($(this).hasClass('active')) {
            $(this).removeClass('active');
        }
        else {
            $(this).addClass('active')
        }

        if($('body').hasClass('menu-open')) {
            $('body').removeClass('menu-open')
        }
        else {
            $('body').addClass('menu-open')
        }
    })

    window.showAlert = function(html, fnCallback) {
        $('#alert .alert-message').html(html);
        $('#alert').fadeIn();  

        $(document).off('click', '#btn_alert_ok');
        $(document).on('click', '#btn_alert_ok', function() {
            $('#alert').fadeOut();
            
            if(fnCallback) {
                fnCallback();
            }
        })
    }
})(jQuery)