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

    $('#shop-search').change(function(eventObject){
        
        var searchTerm = $(this).val();
        $(".search-hiden").css("display", "none");
        $.ajax({
            url : window._SERVER_DATA.ajaxurl + '?action=shop_ajax_search',
            type: 'POST',
            data:{
                'term'  :searchTerm
            },
            success:function(result){

                $('.codyshop-ajax-search').fadeIn().html(result);
            }
        });
    });


    $('#event-search-form').on('submit', function(e){
        e.preventDefault();
    });

    $('#event-search').change(function(eventObject){
        
        var searchTerm = $(this).val();
        if(searchTerm.length > 2){
            $(".search-hiden").css("display", "none");
			$.ajax({
				url : window._SERVER_DATA.ajaxurl + '?action=event_ajax_search',
				type: 'POST',
				data:{
					'term'  :searchTerm
				},
				success:function(result){
                    // console.log(result);
					$('.codyshop-ajax-search').fadeIn().html(result);
				}
            });
        }
        
    });

    $('.order-registration').on('submit', function(e){
        e.preventDefault();
    });

    $('#confirm_order').click(function(eventObject){
        
        let orderInfo = [];
        let firstName = $('.order-registration').find('#pr-first-name').val();
        let lastName = $('.order-registration').find('#pr-last-name').val();
        let email = $('.order-registration').find('#pr-email').val();
        let phoneNumber = $('.order-registration').find('#pr-tel').val();
        let city = $('.order-registration').find('#pr-city').val();

        if(firstName.length > 0 && lastName.length > 0 && email.length > 0 && phoneNumber.length > 0 && city.length > 0){

            // $('#confirm_order').prop("disabled",true);
            
            orderInfo[0] = [];
            orderInfo[0].push(firstName);
            orderInfo[0].push(lastName);
            orderInfo[0].push(email);
            orderInfo[0].push(phoneNumber);
            orderInfo[0].push(city);

            orderInfo[1] = [];
            
            $('.product-for-js').each(function(index, element) {
                idProduct = element.dataset.id;
                quantityProduct = element.querySelector('.product-amount').value;
                priceProduct = element.querySelector('.product-price').dataset.productPrice;
                orderInfo[1][index] = [];
                orderInfo[1][index].push(idProduct);
                orderInfo[1][index].push(quantityProduct);
                orderInfo[1][index].push(priceProduct.replace(/\D+/g,""));
            });
            
            let json = JSON.stringify(orderInfo);
           
            $.ajax({
                url : window._SERVER_DATA.ajaxurl + '?action=ajax_create_order',
                type: 'POST',
                data: {
                    data: orderInfo,},
                success:function(result){
                    if(result !== 0){
                        // console.log('ok');
                    }
                    //    
                    closePopup();
                }
            });   
        }
    });

});