/*!
 * Description	:
 * Modified On	:
 */
 $(document).ready(function(){
	
	table = $('#table_article').DataTable({
		// dom: 'ltip',
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
	
 });
