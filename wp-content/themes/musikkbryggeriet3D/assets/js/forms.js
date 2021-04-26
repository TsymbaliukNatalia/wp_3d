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
        
        let orderInfo = {};
        let firstName = $('.order-registration').find('#pr-first-name').val();
        let lastName = $('.order-registration').find('#pr-last-name').val();
        let email = $('.order-registration').find('#pr-email').val();
        let phoneNumber = $('.order-registration').find('#pr-tel').val();
        let city = $('.order-registration').find('#pr-city').val();

        if(firstName.length > 0 && lastName.length > 0 && email.length > 0 && phoneNumber.length > 0 && city.length > 0){
            
            orderInfo['customer'] = {};
            orderInfo['customer']['firstName'] = firstName;
            orderInfo['customer']['lastName'] = lastName;
            orderInfo['customer']['email'] = email;
            orderInfo['customer']['phoneNumber'] = phoneNumber;
            orderInfo['customer']['city'] = city;

            let sumPrice = $('.order-registration').find('.sum-price').text();
            orderInfo['sumPrice'] = sumPrice.replace(/\D+/g,"");

            orderInfo['products'] = {};
            orderInfo['products'] = $('.basket-products');
            $('.product-for-js').each(function(index, element) {
                idProduct = element.dataset.id;
                quantityProduct = element.querySelector('.product-amount').value;
                priceProduct = element.querySelector('.product-price').dataset.productPrice;
                orderInfo['products'][index] = {};
                orderInfo['products'][index]['id'] = idProduct;
                orderInfo['products'][index]['quantity'] = quantityProduct;
                orderInfo['products'][index]['price'] = priceProduct.replace(/\D+/g,"");
            });

            let json = JSON.stringify(orderInfo);

            // let searchTerm = "hello";
                // console.log(searchTerm);
                $.ajax({
                    url : window._SERVER_DATA.ajaxurl + '?action=ajax_create_order',
                    type: 'POST',
                    data:{
                        data  :json
                    },
                    success:function(result){
                        console.log(result);
                        // $('.codyshop-ajax-search').fadeIn().html(result);
                        closePopup();
                    }
                });
            
            // $('.order-thanks').css('display', 'block');
            // $('.order-thanks').text('Bestillingen din er akseptert! Takk for ditt kjøp!');
            // var json = {"data":orderInfo};
            // let order_info = JSON.stringify(orderInfo);
            // console.log(json);
            

        }
    });

});