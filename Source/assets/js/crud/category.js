/*!
 * Description	:
 * Modified On	:
 */
 $(document).ready(function(){
	 
	table = $('#table_category').DataTable({
		// dom: 'ltip',
		orderCellsTop: true,
		serverSide: true,
		processing: true,
		paging: true,
		pageLength: 10,
		ajax : {
			url : base_url+'category/ajax_list',
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
				targets: 2,
				width: "18%"
			},
			{
				targets: 3,
				className: 'text-center',
				width: "16%"
			}
        ]
	});
	
 });
