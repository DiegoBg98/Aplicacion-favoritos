@extends('layouts.app')

@section('template_title')
    Crear Favorito
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <div class="float-left">
                            <h3><span class="badge bg-secundary">Crear Favorito</span></h3>
                        </div>
                        <div class="float-right">
                            <a href="{{ route('favoritos.index') }}" class="btn btn-success btn-sm float-right" data-placement="left">
                            {{ __('Regresar') }}
                            </a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('favoritos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('favorito.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
