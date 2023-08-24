@extends("layouts.admin")
@section('titulo')
    {{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Editar indicator:</h3>
            </div>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!!Form::model($indicator, ['method'=>'PATCH','route'=>['indicator.update', $indicator->id]])!!}
            {!!Form::token()!!}
                <div class="box-body row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="name">DIAN</label>
                            <input type="text" name="name" value="{{ $indicator->name }}" class="form-control" placeholder="Ingrese el tipo de documento">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                        <div class="form-group">
                            <label for="nit">NIT DIAN</label>
                            <input type="text" name="nit" value="{{ $indicator->nit }}" class="form-control" placeholder="Ingrese nit dian">
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12">
                        <div class="form-group">
                            <label for="dv">DV</label>
                            <input type="text" name="dv" value="{{ $indicator->dv }}"  class="form-control" placeholder="DV">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="resolution">Resolucion</label>
                            <input type="text" name="resolution" value="{{ $indicator->resolution }}"  class="form-control" placeholder="Resolucion">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="date_from">Inicio Facturacion</label>
                            <input type="date" name="date_from" value="{{ $indicator->date_from }}"  class="form-control" placeholder="Inicio fecha Facturacion">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="date_to">Fin Facturacion</label>
                            <input type="date" name="date_to" value="{{ $indicator->date_to }}"  class="form-control" placeholder="Fin fecha Facturacion">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="prefix">prefijo</label>
                            <input type="text" name="prefix" value="{{ $indicator->prefix }}" class="form-control" placeholder="Ingrese el prefijo">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="from">Inicio Facturacion</label>
                            <input type="text" name="from" value="{{ $indicator->from }}" class="form-control" placeholder="Inicio de Facturacion">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="to">Fin Facturacion</label>
                            <input type="text" name="to" value="{{ $indicator->to }}"  class="form-control" placeholder="Fin de Facturacion">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="software_id">ID Software</label>
                            <input type="text" name="software_id" value="{{ $indicator->software_id }}"  class="form-control" placeholder="ID Software">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="pin">Numero de Pin</label>
                            <input type="text" name="pin" value="{{ $indicator->pin }}"  class="form-control" placeholder="Numero Pin">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="technical_key">Clave Tecnica</label>
                            <input type="text" name="technical_key" value="{{ $indicator->technical_key }}"  class="form-control" placeholder="Clave Tecnica">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for=document_version">Version Documento</label>
                            <input type="text" name=document_version" value="{{ $indicator->versionDoc }}"  class="form-control" placeholder="Version del Documento dian">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for=form_version">Version Formato</label>
                            <input type="text" name=form_version" value="{{ $indicator->versionForm }}"  class="form-control" placeholder="Version del Formato">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="country_code">Codigo pais</label>
                            <input type="text" name="country_code" value="{{ $indicator->country_code }}"  class="form-control" placeholder="Codigo del Pais">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="country">Pais</label>
                            <input type="text" name="country" value="{{ $indicator->country }}"  class="form-control" placeholder="name del Pais">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="currency">Tipo Moneda</label>
                            <input type="text" name="currency" value="{{ $indicator->currency }}"  class="form-control" placeholder="COP">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="economic_activity">Actividad Economica</label>
                            <input type="text" name="economic_activity" value="{{ $indicator->economic_activity }}"  class="form-control" placeholder="Ej/ 1254; 1255; 1566">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="postal_code">Codigo Postal</label>
                            <input type="text" name="postal_code" value="{{ $indicator->postal_code }}" class="form-control" placeholder="68001">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="mercantil_registration">Matricula Mercantil</label>
                            <input type="text" name="mercantil_registration" value="{{ $indicator->mercantil_registration }}"  class="form-control" placeholder="Matricula Mercantil">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <button class="btn btn-primary btn-md" type="submit"><i class="fa fa-pencil-alt"></i>&nbsp; Actualizar</button>
                            <a href="{{ url('indicator') }}" class="btn btn-danger"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
                        </div>
                    </div>
                </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection
