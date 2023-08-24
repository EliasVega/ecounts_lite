@extends("layouts.admin")
@section('titulo')
{{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<main class="main">
    <a href="{{ route('indicator.edit', $indicators->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Editar</a>
    <a href="{{ route('company.index') }}" class="btn btn-limon"><i class="fas fa-undo-alt mr-2"></i>Regresar</a>
    <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
                <label class="form-control-label" for="id">ID:</label>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                <strong>{{ $indicators->id }}</strong>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
                <label class="form-control-label" for="id">NOMBRE:</label>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                <strong>{{ $indicators->name }}</strong>
        </div>
        <div class="clearfix"></div>

        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
                <label class="form-control-label" for="id">NIT:</label>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                <strong>{{ $indicators->nit }}</strong>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
                <label class="form-control-label" for="id">DV:</label>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                <strong>{{ $indicators->dv }}</strong>
        </div>
        <div class="clearfix"></div>

        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
            <label class="form-control-label" for="id">PREFIJO:</label>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                <strong>{{ $indicators->prefix }}</strong>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
            <label class="form-control-label" for="id">RESOLUTION:</label>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                <strong>{{ $indicators->resolution }}</strong>
        </div>
        <div class="clearfix"></div>

        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
            <label class="form-control-label" for="id">FECHA DESDE:</label>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                <strong>{{ $indicators->date_from }}</strong>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
            <label class="form-control-label" for="id">FECHA HASTA:</label>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
                <strong>{{ $indicators->date_to }}</strong>
        </div>
        <div class="clearfix"></div>



        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
            <label class="form-control-label" for="id">DESDE:</label>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
            <strong>{{ $indicators->from }}</strong>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
            <label class="form-control-label" for="id">HASTA:</label>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
            <strong>{{ $indicators->to }}</strong>
        </div>
        <div class="clearfix"></div>

        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
            <label class="form-control-label" for="id">COD. POSTAL:</label>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
            <strong>{{ $indicators->postal_code }}</strong>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
            <label class="form-control-label" for="id">PIN:</label>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
            <strong>{{ $indicators->pin }}</strong>
        </div>
        <div class="clearfix"></div>

        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
            <label class="form-control-label" for="id">VERSION DOCUMENTO:</label>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
            <strong>{{ $indicators->document_version }}</strong>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
            <label class="form-control-label" for="id">VERSION FORMULARIO:</label>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
            <strong>{{ $indicators->form_version }}</strong>
        </div>
        <div class="clearfix"></div>

        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
            <label class="form-control-label" for="id">CODIGO PAIS:</label>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
            <strong>{{ $indicators->country_code }}</strong>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
            <label class="form-control-label" for="id">PAIS:</label>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
            <strong>{{ $indicators->country }}</strong>
        </div>
        <div class="clearfix"></div>



        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
            <label class="form-control-label" for="id">VACTIVIDAD ECONOMICA:</label>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
            <strong>{{ $indicators->economic_activity }}</strong>
        </div>


        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
            <label class="form-control-label" for="id">REGISTRO MERCANTIL:</label>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
            <strong>{{ $indicators->mercantil_registration }}</strong>
        </div>
        <div class="clearfix"></div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
            <label class="form-control-label" for="id">MONEDA:</label>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
            <strong>{{ $indicators->currency }}</strong>
        </div>

        <div class="clearfix"></div>
        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 ">
            <label class="form-control-label" for="id">SOFTWARE ID:</label>
        </div>
        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
            <strong>{{ $indicators->software_id }}</strong>
        </div>
        <div class="clearfix"></div>

        <div class="col-lg-2 col-md-4 col-sm-4 col-xs-12 ">
            <label class="form-control-label" for="id">CLAVE TECNICA:</label>
        </div>
        <div class="col-lg-6 col-md-8 col-sm-8 col-xs-12">
            <strong>{{ $indicators->technical_key }}</strong>
        </div>
    </div>
</main>
@endsection
