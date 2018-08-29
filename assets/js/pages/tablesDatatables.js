/*
	*  Document   : tablesDatatables.js
	*  Author     : pixelcave
	*  Description: Custom javascript code used in Tables Datatables page
*/

var TablesDatatables = function() {
	
    return {
        init: function() {
            /* Initialize Bootstrap Datatables Integration */
            App.datatables();
			
            /* Initialize Datatables */
            $('#example-datatable').dataTable({
				"order":[[0, "desc"]],
				"aoColumnDefs": [ 
				{ "bSortable": false, "aTargets": [ 4, 5, 6, 7] }
				],
                "iDisplayLength": 20,
                "aLengthMenu": [[10, 20, 30, 40, 50, -1], ["Tampilkan 10 baris", "Tampilkan 20 baris", "Tampilkan 30 baris", "Tampilkan 40 baris", "Tampilkan 50 baris", "Tampilkan semua baris"]]
			});
			
			$('#example-datatable1').dataTable({
                "aoColumnDefs": [ 
				{ "bVisible": false, "aTargets": [0] },
				{ "bSortable": false, "aTargets": [ 0, 1, 2, 3, 4 ] }
				],
                "iDisplayLength": 30,
                "aLengthMenu": [[10, 20, 30, -1], ["Tampilkan 10 baris", "Tampilkan 20 baris", "Tampilkan 30 baris", "Tampilkan semua baris"]]
			})
			.rowReordering();
			
			$('#example-datatable2').dataTable({
                "aoColumnDefs": [ 
				{ "bSortable": false, "aTargets": [ 3, 4 ] }
				],
                "iDisplayLength": 30,
                "aLengthMenu": [[10, 20, 30, -1], ["Tampilkan 10 baris", "Tampilkan 20 baris", "Tampilkan 30 baris", "Tampilkan semua baris"]]
			})
			
			$('#example-datatable3').dataTable({
                "aoColumnDefs": [ 
				{ "bSortable": false, "aTargets": [ 3 ] }
				],
                "iDisplayLength": 10,
                "aLengthMenu": [[10, 20, 30, -1], ["Tampilkan 10 baris", "Tampilkan 20 baris", "Tampilkan 30 baris", "Tampilkan semua baris"]]
			})
			
			$('#example-datatable4').dataTable({
                "aoColumnDefs": [ 
				{ "bSortable": false, "aTargets": [ 3 ] }
				],
                "iDisplayLength": 10,
                "aLengthMenu": [[10, 20, 30, -1], ["Tampilkan 10 baris", "Tampilkan 20 baris", "Tampilkan 30 baris", "Tampilkan semua baris"]]
			})
			
			$('#example-datatable5').dataTable({
                "aoColumnDefs": [ 
				{ "bSortable": false, "aTargets": [ 3 ] }
				],
                "iDisplayLength": 5,
                "aLengthMenu": [[5, 10, 20, -1], ["Tampilkan 5 baris", "Tampilkan 10 baris", "Tampilkan 20 baris", "Tampilkan semua baris"]]
			})
			
			$('#example-datatable6').dataTable({
				"order":[[0, "desc"]],
				"aoColumnDefs": [ 
				{ "bSortable": false, "aTargets": [ 3 ] }
				],
                "iDisplayLength": 20,
                "aLengthMenu": [[10, 20, 30, 40, 50, -1], ["Tampilkan 10 baris", "Tampilkan 20 baris", "Tampilkan 30 baris", "Tampilkan 40 baris", "Tampilkan 50 baris", "Tampilkan semua baris"]]
			});
		
			$('#example-datatable7').dataTable({
                "aoColumnDefs": [ 
				{ "bSortable": false, "aTargets": [ 2 ] }
				],
                "iDisplayLength": 5,
                "aLengthMenu": [[5, 10, 20, -1], ["Tampilkan 5 baris", "Tampilkan 10 baris", "Tampilkan 20 baris", "Tampilkan semua baris"]]
			})
			
			$('#example-datatable8').dataTable({
                "aoColumnDefs": [ 
				{ "bSortable": false, "aTargets": [ 3 ] }
				],
                "iDisplayLength": 20,
                "aLengthMenu": [[20, 30, 50, -1], [ "Tampilkan 20 baris", "Tampilkan 30 baris", "Tampilkan 50 baris", "Tampilkan semua baris"]]
			})
			
			$('#example-datatable9').dataTable({
				"order":[[0, "asc"]],
				"aoColumnDefs": [ 
				{ "bSortable": false, "aTargets": [7,8] }
				],
                "iDisplayLength": 20,
                "aLengthMenu": [[10, 20, 30, 40, 50, -1], ["Tampilkan 10 baris", "Tampilkan 20 baris", "Tampilkan 30 baris", "Tampilkan 40 baris", "Tampilkan 50 baris", "Tampilkan semua baris"]]
			});
			$('#list_kuesioner_list').dataTable({
				"order":[[0, "asc"]],
				"aoColumnDefs": [ 
				{ "bVisible": false, "aTargets": [0] },
				{ "bSortable": false, "aTargets": [6,7,8,9,10] }
				],
                "iDisplayLength": 20,
                "aLengthMenu": [[10, 20, 30, 40, 50, -1], ["Tampilkan 10 baris", "Tampilkan 20 baris", "Tampilkan 30 baris", "Tampilkan 40 baris", "Tampilkan 50 baris", "Tampilkan semua baris"]]
			});
			$('#list_kuesioner').dataTable({
				"order":[[0, "asc"]],
				"aoColumnDefs": [ 
				//{ "bSortable": false, "aTargets": [1,2,3] }
				{ "bSortable": false, "aTargets": [-1] }
				],
                "iDisplayLength":  50,
                "aLengthMenu": [[50,75,100, -1], ["Tampilkan 50 baris","Tampilkan 75 baris","Tampilkan 100 baris", "Tampilkan semua baris"]]
			});
			
			$('#assign_kuesioner').dataTable({
				"order":[[0, "asc"]],
				"aoColumnDefs": [ 
				{ "bSortable": false, "aTargets": [-1] }
				],
                "iDisplayLength": 20,
                "aLengthMenu": [[10, 20, 30, 40, 50, -1], ["Tampilkan 10 baris", "Tampilkan 20 baris", "Tampilkan 30 baris", "Tampilkan 40 baris", "Tampilkan 50 baris", "Tampilkan semua baris"]]
			});
			
			$('#example-datatable91').dataTable({
				"order":[[0, "asc"]],
				"aoColumnDefs": [ 
				{ "bSortable": false, "aTargets": [7] }
				],
                "iDisplayLength": 20,
                "aLengthMenu": [[10, 20, 30, 40, 50, -1], ["Tampilkan 10 baris", "Tampilkan 20 baris", "Tampilkan 30 baris", "Tampilkan 40 baris", "Tampilkan 50 baris", "Tampilkan semua baris"]]
			});
			
			$('#example-datatable10').dataTable({
				"order":[[0, "asc"]],
				"aoColumnDefs": [ 
				{ "bSortable": false, "aTargets": [ 3 ] }
				],
                "iDisplayLength": 20,
                "aLengthMenu": [[10, 20, 30, 40, 50, -1], ["Tampilkan 10 baris", "Tampilkan 20 baris", "Tampilkan 30 baris", "Tampilkan 40 baris", "Tampilkan 50 baris", "Tampilkan semua baris"]]
			});
			
			$('#example-datatable11').dataTable({
				"order":[[0, "asc"]],
				"aoColumnDefs": [ 
				{ "bSortable": true, "aTargets": [ 1 ] }
				],
				"bLengthChange": false,
				"bFilter": false,
                "iDisplayLength": 20,
                "aLengthMenu": [[10, 20, 30, 40, 50, -1], ["Tampilkan 10 baris", "Tampilkan 20 baris", "Tampilkan 30 baris", "Tampilkan 40 baris", "Tampilkan 50 baris", "Tampilkan semua baris"]]
			});
			
			$('#example-datatable12').dataTable({
				"order":[],
                "aoColumnDefs": [ 
				{ "bSortable": false, "aTargets": ['_all'] }
				],
				"info": false,
				"paging": false,
				"bLengthChange": false,
                "iDisplayLength": 30,
                "aLengthMenu": [[10, 20, 30, -1], ["Tampilkan 10 baris", "Tampilkan 20 baris", "Tampilkan 30 baris", "Tampilkan semua baris"]]
			})
			
            /* Add placeholder attribute to the search input */
            $('.dataTables_filter input').attr('placeholder', 'Cari');
			
			
			$('#diagram').dataTable({
				"order":[[0, "asc"]],
				"aoColumnDefs": [ 
				{ "bSortable": false, "aTargets": [-1] }
				],
                "iDisplayLength": 50,
                "aLengthMenu": [[50,75,100, -1], ["Tampilkan 50 baris","Tampilkan 75 baris","Tampilkan 100 baris", "Tampilkan semua baris"]]
			});
		}
	};
}();
