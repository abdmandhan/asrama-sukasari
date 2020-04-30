<script>
	"use strict";
// Class definition

var KTDatatableLocalSortDemo = function() {
	// Private functions

	// basic demo
	var demo = function() {

		var datatable = $('.kt-datatable').KTDatatable({
			// datasource definition
			data: {
				type: 'remote',
				source: {
					read: {
						url: "{{ route('view.team' )}}",
					},
				},
				pageSize: 2,
				serverPaging: false,
				serverFiltering: true,
				serverSorting: false,
				saveState: {
					cookie: true,
					webstorage: true,
				},
			},

			// layout definition
			layout: {
				scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
				footer: true, // display/hide footer
			},

			// column sorting
			sortable: true,

			pagination: true,

			search: {
				input: $('#generalSearch'),
			},

			// columns definition
			columns: [
				{
					field: 'team_id',
					title: '#',
					sortable: 'asc',
					width: 30,
					type: 'number',
					selector: false,
					textAlign: 'center',
				},{
					field: 'imgSrc',
					title: 'Image',
					template: function(data) {
						return '<img src="{{ url("/") }}/' +data.imgSrc+ '" alt="photo" width="100%">';
					},
				},{
					field: 'facebookSrc',
					title: 'Facebook',
				},{
					field: 'twitterSrc',
					title: 'Twitter',
				},{
					field: 'instagramSrc',
					title: 'Instagram',
				},{
					field: 'name',
					title: 'Name',
				},{
					field: 'm_name',
					title: 'Major',
				},{
					field: 'hidden',
					title: 'Hidden',
				},
				{
					field: "Actions",
					title: "Actions",
					sortable: false,
					width: 110,
					overflow: "visible",
					autoHide: false,
					template: function() {
						return '\
									<div class="dropdown">\
										<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" data-toggle="dropdown">\
											<i class="la la-cog"></i>\
										</a>\
										<div class="dropdown-menu dropdown-menu-right">\
											<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>\
											<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>\
											<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>\
										</div>\
									</div>\
									<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">\
										<i class="la la-edit"></i>\
									</a>\
									<a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Delete">\
										<i class="la la-trash"></i>\
									</a>\
								';
					}
        		}],
			});

    $('#kt_form_status').on('change', function() {
      datatable.search($(this).val().toLowerCase(), 'Status');
    });

	};

	return {
		// public functions
		init: function() {
			demo();
		},
	};
}();

jQuery(document).ready(function() {
	KTDatatableLocalSortDemo.init();
});
</script>