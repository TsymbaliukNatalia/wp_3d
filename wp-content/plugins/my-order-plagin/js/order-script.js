jQuery(document).ready(function($){

    $('[data-revised = 0]').each(function(index, element) {
        let row = element.closest('tr');
        row.style.cssText = "font-weight: bold;";
    });

    $('.delete_order').on('click', function(e){
        e.preventDefault();
        let delete_id = e.target.getAttribute('data-id');
        let delete_row = e.target.closest('tr');
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