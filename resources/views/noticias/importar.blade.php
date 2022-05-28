@extends('layout.main')

@section('content')
<h2> Resultado Importação de Notícias</h2>
<div class="row">
    <div class="col-4 flex-column align-self-stretch">
        <div class="card mb-4 box-shadow bg-info text-light">
            <div class="card-body d-flex flex-column">
                <strong class="card-title">Total de Notícias</strong>
                <p class="card-text">{{ $total }}</p>
            </div>
        </div>
    </div>
    <div class="col-4 flex-column align-self-stretch">
        <div class="card mb-4 box-shadow bg-success text-light">
            <div class="card-body d-flex flex-column">
                <strong class="card-title">Novas Notícias</strong>
                <p class="card-text">{{ $novas }}</p>
            </div>
        </div>
    </div>

    <div class="col-4 flex-column align-self-stretch">
        <div class="card mb-4 box-shadow bg-warning text-light">
            <div class="card-body d-flex flex-column">
                <strong class="card-title">Notícias Já Cadastradas</strong>
                <p class="card-text">{{ $cadastradas }}</p>
            </div>
        </div>
    </div>
</div>
@stop