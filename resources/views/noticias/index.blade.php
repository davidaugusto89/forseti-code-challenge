@extends('layout.main')

@section('content')
<h2> Últimas 5 notícias importadas</h2>
<div class="row">
    @foreach ($noticias as $noticia)
    <div class="col-12 flex-column align-self-stretch">
        <div class="card mb-4 box-shadow">
            <div class="card-body d-flex flex-column">
                <strong class="card-title">{{ $noticia->manchete  }}</strong>
                <p class="card-text">{{ date('d/m/Y', strtotime($noticia->data)) }} | {{ Str::limit($noticia->hora, 5, '') }}</p>
                <p class="card-text">{{ $noticia->link  }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@stop