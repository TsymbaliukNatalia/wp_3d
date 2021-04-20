
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
        }, 'json');
    });

    $('.forgot-password').on('submit', function(e){
        e.preventDefault();
        let $form = $(this);
        let data = $form.serialize();
        console.log(data);
        $.post( window._SERVER_DATA.ajaxurl + "?action=recover_password", data, function(data)
        {
            let $forgotPasswordErrors = $('.forgot-password-errors');
            if(!data["email_exist"]){
                $forgotPasswordErrors.empty();
                $forgotPasswordErrors.css('color', 'red');
                $forgotPasswordErrors.css('font-size', '18px');
                $forgotPasswordErrors.text(data["error"]);
            } else {
                console.log(data);
                $forgotPasswordErrors.empty();
                closePopup();
            }
        }, 'json');
    });

    $('#shop-search-form').on('submit', function(e){
        e.preventDefault();
    });

    $('#shop-search').keyup(function(eventObject){
        
        var searchTerm = $(this).val();
        if(searchTerm.length > 2){
            $(".search-hiden").css("display", "none");
			$.ajax({
				url : window._SERVER_DATA.ajaxurl + '?action=shop_ajax_search',
				type: 'POST',
				data:{
					'term'  :searchTerm
				},
				success:function(result){
                    console.log(result);
					$('.codyshop-ajax-search').fadeIn().html(result);
				}
            });
        }
        
    });

});