@extends("layouts.admin")
@section('titulo')
    {{ config('app.name', 'Ecounts') }}
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Editar producto:  {{ $product->name }}</h3>
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
                {!!Form::model($product, ['method'=>'PATCH', 'files' => 'true', 'route'=>['product.update', $product->id]])!!}
                {!!Form::token()!!}
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        @include('admin/product.form')
                    </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    @include('admin/product.script')
@endsection
