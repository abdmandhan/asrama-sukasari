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
						url: "{{ route('view.blog' )}}",
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
					field: 'blog_id',
					title: '#',
					sortable: 'asc',
					width: 30,
					type: 'number',
					selector: false,
					textAlign: 'center',
				}, {
					field: 'u_name',
					title: 'User Name',
				}, {
					field: 'imgSrc',
					title: 'Image',
					template: function(data) {
						return '<img src="{{ url("/") }}/' +data.imgSrc+ '" alt="photo" width="100%">';
					},
				},{
					field: 'slug',
					title: 'Slug',
				},{
					field: 'title',
					title: 'Title',
				},{
					field: 'desc',
					title: 'Description',
				},{
					field: 'c_name',
					title: 'Category',
				},{
					field: 'created_at',
					title: 'Created at',
					type: 'date',
					format: 'MM/DD/YYYY',
				},
				{
					field: "Actions",
					title: "Actions",
					sortable: false,
					width: 110,
					overflow: "visible",
					autoHide: false,
					template: function(data) {
						var urlShow = '{{ route("admin.blog.show", ":id") }}';
						urlShow = urlShow.replace(':id', data.blog_id);
						var urlDelete = '{{ route("admin.blog.destroy", ":id") }}';
						urlDelete = urlDelete.replace(':id', data.blog_id);
						return '\
									<a href="' + urlShow + '" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Edit details">\
										<i class="la la-edit"></i>\
									</a>\
									<form action="'+urlDelete+'" method="POST">\
										@csrf\
										@method("delete")\
										<button type="submit" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-trash"></i></button>\
									</form>\
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