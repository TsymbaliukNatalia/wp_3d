jQuery(document).ready(function($){

    
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
            closePopup();
            // $('.order-thanks').css('display', 'block');
            // $('.order-thanks').text('Bestillingen din er akseptert! Takk for ditt kjøp!');

        }

        
            console.log(orderInfo);
        

            

        
        
        

        
        // var searchTerm = $(this).val();
        // if(searchTerm.length > 2){
        //     $(".search-hiden").css("display", "none");
		// 	$.ajax({
		// 		url : window._SERVER_DATA.ajaxurl + '?action=event_ajax_search',
		// 		type: 'POST',
		// 		data:{
		// 			'term'  :searchTerm
		// 		},
		// 		success:function(result){
        //             console.log(result);
		// 			$('.codyshop-ajax-search').fadeIn().html(result);
		// 		}
        //     });
        // }
        
    });

});