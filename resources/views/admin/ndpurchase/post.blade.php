<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ 'css/post.css' }}">
        <title>Nota Debito Compra</title>

    </head>

    <header id="header">
        <!-- LOGGO -->
        <div class="center">
            <div id="logo">
                <img src="{{ asset($company->logo) }}" alt="{{ $company->name }}">
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="center">
        <!--DATOS company -->
            <div class="empresa">
                <p><strong id="nombre">{{  $company->name  }}</strong></p>

                <p id="datos">Nit: {{ $company->nit }} - {{ $company->dv }} - {{ $company->regime->name }} - {{ $company->nameO }}  {{ $ndpurchase->branch->address }}--{{ $ndpurchase->branch->phone  }} - {{ $company->municipality->name }} {{ $company->department->name }} <br> Email: {{ $ndpurchase->branch->email }}
                    </p>
            </div>
            <!--DATOS FACTURA -->
            <div id="factura">
                <p> COMPRA: <strong id="numfact">N°.{{ $ndpurchase->id }}</strong> <br>
                    FECHA DE EMISION: <strong id="datfact">{{ date('d-m-Y', strtotime($ndpurchase->created_at)) }}</strong>
                </p>
            </div>
        </div>
    </header>
    <div class="clearfix"></div>
    <body>
        <div class="content">
            <!--DATOS CLIENTE -->
            <p id="titulo">DATOS DEL PROVEEDOR</p>
            <div class="center">
                <div id="cliente">
                    <!--DATOS CLIENTE -->
                    <div id="titc">
                        <span id="tc">CC o NIT: </span><br>
                        <span id="tc">NOMBRE:   </span><br>
                        <span id="tc">DIRECCION:</span><br>
                        <span id="tc">CIUDAD:   </span><br>
                        <span id="tc">TELEFONO: </span><br>
                        <span id="tc">EMAIL:    </span><br>
                    </div>
                    <div id="titd">
                        <span id="td">{{ $ndpurchase->supplier->number }}</span><br>
                        <span id="td">{{ $ndpurchase->supplier->name }}</span><br>
                        <span id="td">{{ $ndpurchase->supplier->address }}</span><br>
                        <span id="td">{{ $ndpurchase->supplier->municipality->name }}</span><br>
                        <span id="td">{{ $ndpurchase->supplier->phone }}</span><br>
                        <span id="td">{{ $ndpurchase->supplier->email }}</span><br>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            @if ($ndpurchase->note != null)
                <div class="form-group">
                    <p id="factura">Nota: {{ $ndpurchase->note }}</p>
                </div>
            @endif
            <table class="tabla">
                <!--DETALLE DE VENTA -->
                <thead>
                    <tr>
                        <th>Descripcion</th>
                        <th>Cant.</th>
                        <th>Valor</th>
                        <th>SubTotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ndpurchase_products as $ndpurchase_product)
                    <tr>
                        <td>{{ $ndpurchase_product->product->name }}</td>
                        <td id="ccent">{{ number_format($ndpurchase_product->quantity,2) }}</td>
                        <td class="tdder">${{ number_format($ndpurchase_product->price,2)}}</td>
                        <td class="tdder">${{number_format($ndpurchase_product->quantity * $ndpurchase_product->price,2)}}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <!--DATOS FTOTALES -->
                    <tr>
                        <th colspan="2" class="footder">TOTAL:</th>
                        <td colspan="2" class="footder"><strong>${{number_format($ndpurchase->total,2)}}</strong></td>
                    </tr>

                    <tr>
                        <th colspan="2" class="footder">TOTAL IVA:</th>
                        <td colspan="2" class="footder"><strong>${{number_format($ndpurchase->total_iva,2)}}</strong> </td>
                    </tr>

                    <tr>
                        <th  colspan="2" class="footder">TOTAL PAGAR:</th>
                        <td colspan="2" class="footder"><strong>${{number_format($ndpurchase->total_pay,2)}}</strong></td>
                    </tr>
                    @if ($ndpurchase->pay > 0)
                        <tr>
                            <th  colspan="2" class="footder">ABONOS:</th>
                            <td colspan="2" class="footder"><strong>${{number_format($ndpurchase->pay,2)}}</strong></td>
                        </tr>
                        <tr>
                            <th  colspan="2" class="footder">SALDO:</th>
                            <td colspan="2" class="footder"><strong>${{number_format($ndpurchase->balance,2)}}</strong></td>
                        </tr>
                    @endif
                </tfoot>
            </table>
        </div>
        <br>
        <br>
        <footer>
            Impreso por Ecounts S.A.S. derechos reservados
        </footer>
    </body>

</html>



