<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ 'css/pdfs.css' }}">
        <title>Nota debito Compra</title>

    </head>
    <header id="header">
        <!-- LOGGO -->
        <div class="center">
            <div id="logo">
                <img src="{{ asset($company->logo) }}" alt="{{ $company->name }}" width="150px" height="50px" class="app-logo">
            </div>
        <!--DATOS company -->
            <div class="empresa">
                <p><strong id="nombre">{{  $company->name  }}</strong></p>

                <p id="datos">Nit: {{ $company->nit }} -- {{ $company->dv }} --  {{ $company->liability->name }} -- <br> R. fiscal. {{ $company->regime->name }}  <br> {{ $company->organization->name }}  {{ $company->address }} <br> {{ $company->municipality->name }} -- {{ $company->department->name }} <br> Email: {{ $company->email }}
                    </p>
            </div>
            <!--DATOS FACTURA -->
            <div id="factura">
                <p> <h4>NOTA DEBITO <br> <strong id="numfact">N°.{{ $ndpurchase->id }}</strong>  </h4>

                </p>
                <p> <h4>FECHA DE EMISION <br> <strong id="detosfact">{{ date('d-m-Y', strtotime($ndpurchase->created_at)) }}</strong>  </h4>
                </p>
            </div>
        </div>
    </header>
    <body>
        <!--DATOS CLIENTE -->
        <div class="content">
            <div class="center">
                <div id="tcliente">
                    <span id="titulo"><strong>DATOS DEL PROVEEDOR</strong></span>
                </div>
            </div>
            <div class="center">
                <!--CODIGO QR -->
                <div id="qr">
                    <img src="" alt="qr">
                </div>
                <div id="cliente">
                    <!--DATOS CLIENTE -->
                    <div id="titc">
                        <span id="tc">CC o NIT: </span><br>
                        <span id="tc">NOMBRE:   </span><br>
                        <span id="tc">REGIMEN:  </span><br>
                        <span id="tc">CIUDAD:   </span><br>
                        <span id="tc">TELEFONO: </span><br>
                        <span id="tc">EMAIL:    </span><br>
                        <span id="tc">DIRECCION:</span><br>
                    </div>
                    <div id="titd">
                        <span id="td">{{ $ndpurchase->supplier->number }}</span><br>
                        <span id="td">{{ $ndpurchase->supplier->name }}</span><br>
                        <span id="td">{{ $ndpurchase->supplier->regime->name }}</span><br>
                        <span id="td">{{ $ndpurchase->supplier->municipality->name }}</span><br>
                        <span id="td">{{ $ndpurchase->supplier->phone }}</span><br>
                        <span id="td">{{ $ndpurchase->supplier->email }}</span><br>
                        <span id="td">{{ $ndpurchase->supplier->address }}</span><br>
                    </div>
                </div>
            </div>
        </div>
        @if ($ndpurchase->note != null)
            <div>
                <p>Nota: {{ $ndpurchase->note }}</p>
            </div>
        @endif
        <div class="contenido">
            <div class="center">
                <div id="ttabla">
                    <table class="tabla">
                        <!--DETALLE DE VENTA -->
                        <thead>
                            <tr>
                                <th id="dos">Descripcion del producto</th>
                                <th id="uno">Cant.</th>
                                <th>Valor</th>
                                <th>SubTotal ($)</th>
                            </tr>
                        </thead>
                        <tbody class="detalle">
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
                               <th colspan="3" class="footder">TOTAL:</th>
                               <td class="footder"><strong>${{number_format($ndpurchase->total,2)}}</strong></td>
                            </tr>

                            <tr>
                                <th colspan="3" class="footder">TOTAL IVA:</th>
                                <td class="footder"><strong>${{number_format($ndpurchase->total_iva,2)}}</strong> </td>
                            </tr>
                            @if ($ndpurchase->retention > 0)
                                <tr>
                                    <th colspan="3" class="footder">RETERENTA:</th>
                                    <td class="footder"><strong>${{number_format($ndpurchase->retention,2)}}</strong> </td>
                                </tr>
                                <tr>
                                    <th colspan="3" class="footder">TOTAL - DESC:</th>
                                    <td class="footder"><strong>${{number_format($ndpurchase->total_pay - $ndpurchase->retention,2)}}</strong> </td>
                                </tr>
                            @endif
                            <tr>
                                <th  colspan="3" class="footder">TOTAL PAGAR:</th>
                                <td class="footder"><strong id="total">${{number_format($ndpurchase->total_pay,2)}}</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
        <br>
        <br>
        <footer>
            Impreso por Ecounts S.A.S. derechos reservados
        </footer>
    </body>
</html>



