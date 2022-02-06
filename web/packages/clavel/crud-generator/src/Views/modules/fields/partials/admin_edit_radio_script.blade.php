<!-- DataTables -->
<link href="{{ asset('/assets/admin/vendor/datatables.net/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('/assets/admin/vendor/datatables.net/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- DataTables -->
<script src="{{ asset('/assets/admin/vendor/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/assets/admin/vendor/datatables.net/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/admin/vendor/datatables.net/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('/assets/admin/vendor/datatables.net/js/responsive.bootstrap4.min.js') }}"></script>

<!-- page script -->
<script type="text/javascript">
    var oTable = '';
    var count = 0;
    $(document).ready(function() {
        oTable = $('#table_options').DataTable( {
            searching: false,
            "bLengthChange": false,
            columns: [
                {
                    "title"         : "{!! trans('crud-generator::fields/admin_lang.name') !!}",
                    orderable       : false,
                    searchable      : false,
                    sWidth          : ''
                },
                {
                    "title"         : "{!! trans('crud-generator::fields/admin_lang.visual') !!}",
                    orderable       : false,
                    searchable      : false,
                    sWidth          : ''
                },
                {
                    "title"         : "{!! trans('crud-generator::fields/admin_lang.actions') !!}",
                    orderable       : false,
                    searchable      : false,
                    sWidth          : '80px'
                }

            ],
            "order": [[0, 'asc']],
            oLanguage: {!! json_encode(trans('datatable/lang')) !!}
        });

        $('#addRow').on( 'click', function (event) {
            event.preventDefault();
            oTable.row.add( [
                '<input placeholder="Valor" class="form-control input-xlarge" style="width: 100% !important;" id="radio_data[]" name="radio_data[]" type="text">',
                '<input placeholder="Texto" class="form-control input-xlarge" style="width: 100% !important;" id="radio_value[]" name="radio_value[]" type="text">',
                '<button class="btn btn-danger btn-sm" data-content="Borrar" data-placement="left" data-toggle="popover"><i class="fa fa-trash" aria-hidden="true"></i></button>'
            ] ).draw( false );
            count++;
        } );

        oTable.on("click", "button", function(){
            event.preventDefault();
            console.log($(this).parent());
            oTable.row($(this).parents('tr')).remove().draw(false);
        });

    });




</script>
