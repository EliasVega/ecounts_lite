@extends("layouts.admin")
@section('titulo')
{{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<main class="main">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h4>Listado de Productos <a href="product/create"><button class="btn btn-celeste"><i class="fa fa-plus"></i>&nbsp;&nbsp; Agregar Producto</button></a>
                <a href="{{ route('branch.index') }}" class="btn btn-gris"><i class="fas fa-undo-alt mr-2"></i>Regresar</a>
                @if (Auth::user()->role_id == 1)
                    <a href="productImport" class="btn btn-success"><i class="fa fa-plus"></i> Importar Productos</a>
                @endif
            </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-condensed table-hover" id="products">
                    <thead>
                        <tr class="bg-info">
                            <th>Id</th>
                            <th>Imagen</th>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Precio_compra</th>
                            <th>Precio_Venta</th>
                            <th>stock</th>
                            <th>Estado</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    @push('scripts')
<script type="text/javascript">
    $(document).ready(function ()
    {
        $('#products').DataTable(
        {
            responsive: true,
            autoWidth: false,
            processing: true,
            serverSide: true,
            info: true,
            stateSave: true,
            ajax: '{{ route('product.index') }}',
            columns:
            [
                {data: 'id'},
                {data: 'image',
                    'sortable': false,
                    'searchable': false,
                    'render': function (image) {
                    if (!image) {
                        return 'N/A';
                    } else {
                        var img = image;
                        return '<img src="' + img + '" height="50px" width="50px" />';
                    }
                }},
                {data: 'code'},
                {data: 'name'},
                {data: 'price', className: 'dt-body-right', render: $.fn.dataTable.render.number( '.', ',', 2, '$')},
                {data: 'sale_price', className: 'dt-body-right', render: $.fn.dataTable.render.number( '.', ',', 2, '$')},
                {data: 'stock'},
                {data: 'status'},
                {data: 'edit'},
            ],
            dom: '<"pull-left"B><"pull-right"f>rt<"row"<"col-sm-4"l><"col-sm-4"i><"col-sm-4"p>>',
            buttons:
            [
                'copy', 'csv', 'excel', 'print',
                {
                    extend: 'pdfHtml5',
                    orientation: 'landscape',
                    pageSize: 'LEGAL'
                }
            ],
            lengthMenu:
            [
                [
                    10, 25, 50, -1
                ],
                [
                    '10 rows', '25 rows', '50 rows', 'Show all'
                ]
            ],
            "language":
            {
                "processing": "Cargando...",
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "emptyTable": "Ningún dato disponible en esta tabla",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(Filtrado de un total de _MAX_ registros)",
                "search": "Buscar:",
                "loadingRecords": "Cargando...",
                "paginate":
                {
                    "next": "Siguiente",
                    "previous": "Anterior",
                },

                "buttons":
                {
                    "copy": "Copiar",
                    "print": "Imprimir"
                },
            }
        });
    });
</script>
@endpush
</main>
@endsection



