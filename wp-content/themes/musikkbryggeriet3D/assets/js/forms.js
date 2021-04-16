
jQuery(document).ready(function($){

    $('.sing-up').on('submit', function(e){
        e.preventDefault();
        let $form = $(this);
        let data = $form.serialize();

        $.post( window._SERVER_DATA.ajaxurl + "?action=register", data, function(data)
        {
            let $singUpErrors = $('.sing-up-errors');
            if(typeof(data) == 'object'){
                $.each(data, function(key, error){
                    $.each(error, function(key, er){
                        $singUpErrors.empty();
                        $singUpErrors.css('color', 'red');
                        $singUpErrors.css('font-size', '18px');
                        $singUpErrors.text(er[0]);
                    });
                });  
            }
            if(typeof(data) == 'number'){
                $singUpErrors.empty();
                closePopup();
                singInOpen(e);
            }
        }, 'json');
    });

    $('.sing-in').on('submit', function(e){
        e.preventDefault();
        let $form = $(this);
        let data = $form.serialize();

        $.post( window._SERVER_DATA.ajaxurl + "?action=login", data, function(data)
        {
            let $loginUpErrors = $('.login-errors');
            if(typeof(data) == 'string'){
                $loginUpErrors.empty();
                $loginUpErrors.css('color', 'red');
                $loginUpErrors.css('font-size', '18px');
                $loginUpErrors.text(data);
            } else {
                $loginUpErrors.empty();
                closePopup();
            }
            console.log(data);
        }, 'json');
    });

});