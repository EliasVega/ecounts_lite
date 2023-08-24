@extends("layouts.admin")
@section('titulo')
    {{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Nuevo Producto</h3>
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
            {!!Form::open(array('url'=>'product', 'method'=>'POST', 'autocomplete'=>'off', 'files' => 'true'))!!}
            {!!Form::token()!!}
            <div class="box-body row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="name">Nombre del product</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Nombre del producto">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="category_id">Categorias</label>
                        <div class="select">
                            <select name="category_id" class="form-control selectpicker" data-live-search="true" id="category_id" required>
                                <option value="" disabled selected>Seleccionar.</option>
                                @foreach($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="unit_measure_id">U/medida</label>
                        <div class="select">
                            <select name="unit_measure_id" class="form-control selectpicker" data-live-search="true" id="unit_measure_id" required>
                                <option value="" disabled selected>Seleccionar.</option>
                                @foreach($measures as $mea)
                                <option value="{{ $mea->id }}">{{ $mea->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="code">Codigo</label>
                        <input type="text" name="code" value="{{ old('code') }}" class="form-control" placeholder="Codigo del product">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="price">Precio</label>
                        <input type="number" name="price" value="0" class="form-control" placeholder="Precio de Compra">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="sale_price">Precio de Venta</label>
                        <input type="number" name="sale_price" value="0" class="form-control" placeholder="Precio de Venta">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label for="image">Imagen</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <button class="btn btn-celeste btn-md" type="submit"><i class="fa fa-save"></i>&nbsp; Guardar</button>
                        <a href="{{url('product')}}" class="btn btn-gris"><i class="fa fa-window-close"></i>&nbsp; Cancelar</a>
                    </div>
                </div>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection
