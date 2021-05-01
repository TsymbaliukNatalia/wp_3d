jQuery(document).ready(function($){

    $('[data-revised = 0]').each(function(index, element) {
        let row = element.closest('tr');
        row.style.cssText = "font-weight: bold;";
    });

    $('.delete_order').on('click', function(e){
        e.preventDefault();
        let delete_id = e.target.getAttribute('data-id');
        let delete_row = e.target.closest('tr');
        $('#popup-delete-order').css('display', 'block');
       
        $('#delete-order-no').on('click', function(e){
            $('#popup-delete-order').css('display', 'none');
        });
        $('#delete-order-yes').on('click', function(e){
            $('#popup-delete-order').css('display', 'none');
            $.ajax({
                url : ajaxurl + '?action=ajax_admin_delete_order',
                type: 'POST',
                data: {
                    data: delete_id,},
                success:function(result){
                    delete_row.remove();
                }
            });  
        });
    });

    $("#bulk-action-selector-top").change(function(){
        if($(this).val() == 'bulk-delete'){
            let delete_orders_array = [];
            let delete_rows = [];
            $('.check-column input[type=checkbox]:checked').each(function(index, element) {
                let delete_id = $(this).parent().next('.id').text();
                delete_id = parseInt(delete_id);
                delete_rows.push(element.closest('tr'));
                delete_orders_array.push(delete_id); 
            });
            if(delete_orders_array.length > 0){
                $('#popup-delete-order').css('display', 'block');
                $('#delete-order-no').on('click', function(e){
                    $('#popup-delete-order').css('display', 'none');
                });
                $('#delete-order-yes').on('click', function(e){
                    $('#popup-delete-order').css('display', 'none');
                    $.ajax({
                        url : ajaxurl + '?action=ajax_admin_bulk_delete_order',
                        type: 'POST',
                        data: {
                            data: delete_orders_array,},
                        success:function(result){
                            delete_rows.forEach(function(element){
                                element.remove();
                            });
                        }
                    });  
                });
            }
           
        }
    
    });

    $('.show').on('click', function(e){
        location.reload();
    });
    
});