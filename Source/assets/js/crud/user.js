/*!
 * Description	:
 * Modified On	:
 */
$(document).ready(function () {

    table = $('#table_user').DataTable({
        dom: 'ltip',
        orderCellsTop: true,
        serverSide: true,
        processing: true,
        paging: true,
        pageLength: 10,
        ajax: {
            url: base_url + 'user/ajax_list',
            type: 'POST',
            dataType: 'JSON',
            async: true
        },
        order: false,
        columnDefs: [
            {orderable: false, targets: 'nosort'},
            {
                targets: 0,
                className: 'text-center',
                width: "4%"
            },
            {
                targets: 3,
                className: 'text-center',
                width: "16%"
            }
        ]
    });

    $('#table_user').on('click', ".btn_fw", function(){ 
        var action = $(this).attr('data-action');
        var user_id = $(this).attr('data-userid');
        $.ajax({
            method: 'POST',
            url: base_url+'user/featured_writer',
            data: {'user_id': user_id, 'action': action},
            success: function(result){
                table_reload();
            }
        });
    });

});

function table_reload(){
    table.ajax.reload();
}
