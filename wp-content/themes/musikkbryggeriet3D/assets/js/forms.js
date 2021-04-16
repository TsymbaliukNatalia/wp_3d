
jQuery(document).ready(function($){

    $('.sing-up').on('submit', function(e){
        e.preventDefault();
        let $form = $(this);
        let data = $form.serialize();

        $.post( "/wp_3d/wp-admin/admin-ajax.php?action=register", data, function(data)
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
                closePopup();
            }
        }, 'json');
    });

});