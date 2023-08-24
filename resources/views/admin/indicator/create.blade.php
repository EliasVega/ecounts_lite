@extends("layouts.admin")
@section('titulo')
    {{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Indicador</h3>
            </div>
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                         @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!!Form::open(array('url'=>'indicator', 'method'=>'POST', 'autocomplete'=>'off'))!!}
            {!!Form::token()!!}
            <div class="box-body row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="name">DIAN</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Nombre">
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="nit">NIT DIAN</label>
                        <input type="text" name="nit" value="{{ old('nit') }}" class="form-control" placeholder="Ingrese nit dian">
                    </div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="dv">DV</label>
                        <input type="text" name="dv" value="{{ old('dv') }}" class="form-control" placeholder="DV">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="resolution">Resolution</label>
                        <input type="text" name="resolution" value="{{ old('resolution') }}" class="form-control" placeholder="Resolution">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="date_from">Inicio Facturacion</label>
                        <input type="date" name="date_from" value="{{ old('date_from') }}" class="form-control" placeholder="Inicio fecha Facturacion">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="date_to">Fin Facturacion</label>
                        <input type="date" name="date_to" value="{{ old('date_to') }}" class="form-control" placeholder="Fin fecha Facturacion">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="prefix">Prefijo</label>
                        <input type="text" name="prefix" value="{{ old('prefix') }}" class="form-control" placeholder="Ingrese el prefijo">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="from">Inicio Facturacion</label>
                        <input type="number" name="from" value="{{ old('from') }}" class="form-control" placeholder="Inicio de Facturacion">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="to">Fin Facturacion</label>
                        <input type="number" name="to" value="{{ old('to') }}" class="form-control" placeholder="Fin de Facturacion">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="software_id">ID Software</label>
                        <input type="text" name="software_id" value="{{ old('software_id') }}" class="form-control" placeholder="ID Software">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="pin">PIN</label>
                        <input type="text" name="pin" value="{{ old('pin') }}" class="form-control" placeholder="PIN">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="technical_key">Clave Tecnica</label>
                        <input type="text" name="technical_key" value="{{ old('technical_key') }}" class="form-control" placeholder="Clave Tecnica">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="document_version">Version Documento</label>
                        <input type="text" name="document_version" value="{{ old('document_version') }}" class="form-control" placeholder="Version del Documento dian">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="form_version">Version Formato</label>
                        <input type="text" name="form_version" value="{{ old('form_version') }}" class="form-control" placeholder="Version del Formato">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="country_code">Codigo Pais</label>
                        <input type="text" name="country_code" value="{{ old('country_code') }}" class="form-control" placeholder="Codigo del Pais">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="country">Pais</label>
                        <input type="text" name="country" value="{{ old('country') }}" class="form-control" placeholder="name del Pais">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="currency">Tipo Moneda</label>
                        <input type="text" name="currency" value="{{ old('currency') }}" class="form-control" placeholder="COP">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="economic_activity">Actividad Economica</label>
                        <input type="text" name="economic_activity" value="{{ old('economic_activity') }}" class="form-control" placeholder="Ej/ 1254; 1255; 1566">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="postal_code">Codigo Postal</label>
                        <input type="text" name="postal_code" value="{{ old('postal_code') }}" class="form-control" placeholder="68001">
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for=mercantil_registration">Matricula Mercantil</label>
                        <input type="text" name=mercantil_registration" value="{{ old('mat_mercantil') }}" class="form-control" placeholder="Matricula Mercantil">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <button class="btn btn-primary btn-md" type="submit"><i class="fa fa-save"></i>&nbsp; Guardar</button>
                        <a href="{{url('indicator')}}" class="btn btn-danger"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
                    </div>
                </div>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection
