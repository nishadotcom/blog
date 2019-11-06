/*!
 * Description	:
 * Modified On	:
 */
 $(document).ready(function(){
	
	table = $('#table_article').DataTable({
		dom: 'ltip',
		orderCellsTop: true,
		serverSide: true,
		processing: true,
		paging: true,
		pageLength: 10,
		ajax : {
			url : base_url+'article/ajax_list',
			type: 'POST',
			dataType: 'JSON',
			async: true
		},
		order: false,
		columnDefs: [
            { orderable: false, targets: 'nosort' },
			{
				targets: 0,
				className: 'text-center',
				width: "4%"
			},
			{
				targets: 4,
				className: 'text-center',
				width: "16%"
			}
        ]
	});
	
	$('.editor').summernote({
		height: 250
	});
        
        $('.btn_fw').click(function(){
        //$('#table_user').on('click', ".btn_fw", function(){ 
            var action = $(this).attr('data-action');
            var user_id = $(this).attr('data-userid');
            $.ajax({
                method: 'POST',
                url: base_url+'user/featured_writer',
                data: {'user_id': user_id, 'action': action},
                success: function(result){
                    location.reload(true);
                }
            });
        });
	
 });
