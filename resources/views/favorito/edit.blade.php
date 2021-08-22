@extends('layouts.app')

@section('template_title')
    Editar Favorito
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <div class="float-left">
                            <h3><span class="badge bg-secundary">Editar Favorito</span></h3>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('favoritos.index') }}"> Regresar</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('favoritos.update', $favorito->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('favorito.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
