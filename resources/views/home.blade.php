@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header navbar-light">
                    <h3 align="center"><span class="badge badge-light">{{ __('¡BIENVENIDO!') }}</span></h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <!-- {{ __('Estás logueado!') }} -->
                   <h5>¡Estás logueado {{ auth::user()->name }}! puedes visitar tu lista de paginas favoritas
                       ingresando al boton 'Favoritos'
                   </h5>
                </div>
                <div class="card-body">
                    @if(Auth::check()) 
                            <a class="btn btn-primary btn-sm float-right" href="{{ route('favoritos.index') }}">{{ __('Favoritos') }}</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
