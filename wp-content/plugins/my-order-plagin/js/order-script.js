jQuery(document).ready(function($){

    $('[data-revised = 0]').each(function(index, element) {
        let row = element.closest('tr');
        row.style.cssText = "font-weight: bold;";
    });

    // $('.sing-up').on('submit', function(e){
    //     e.preventDefault();
    //     let $form = $(this);
    //     let data = $form.serialize();

    //     $.post( window._SERVER_DATA.ajaxurl + "?action=register", data, function(data)
    //     {
    //         let $singUpErrors = $('.sing-up-errors');
    //         if(typeof(data) == 'object'){
    //             $.each(data, function(key, error){
    //                 $.each(error, function(key, er){
    //                     $singUpErrors.empty();
    //                     $singUpErrors.css('color', 'red');
    //                     $singUpErrors.css('font-size', '18px');
    //                     $singUpErrors.text(er[0]);
    //                 });
    //             });  
    //         }
    //         if(typeof(data) == 'number'){
    //             $singUpErrors.empty();
    //             closePopup();
    //             singInOpen(e);
    //         }
    //     }, 'json');
    // });  

});