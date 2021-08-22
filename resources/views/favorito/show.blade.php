@extends('layouts.app')

@section('template_title')
    {{ $favorito->name ?? 'Show Favorito' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h3><span class="badge bg-secundary">Show Favorito</span></h3>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('favoritos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $favorito->titulo }}
                        </div>
                        <div class="form-group">
                            <strong>Tema:</strong>
                            {{ $favorito->tema }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $favorito->url }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
