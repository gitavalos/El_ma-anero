@extends('layouts.app')

@section('css')
    <!-- include custom css -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container">
        @if(count($noticias) > 0)
        <p style="text-align: center; font-size: 40px;">¡Últimas noticias!</p>
        <div id="main">
        <div class="contenedor">
            <div class="child1">Número</div>
            <div class="child2">Título</div>
            <div class="child3">Publicado</div>
        </div>
            <!-- {{ $indice = 1 }} !-->
            @foreach ($noticias as $noticia)
                @if($noticia->state == "Publicado")
                <div class="contenedor">
                    <div class="child1">{{ $indice++  }}</div>
                    <div class="child2"><a href="{{ route('ver_noticia', $noticia->id) }}">{{ $noticia->title }}</a></div>
                    <div class="child3">{{ date_create($noticia->created_at)->format('d/M/Y') }}</div>
                </div>
                @endif
            @endforeach
        </div>
        @else
        <p style="text-align: center; font-size: 40px;">¡No hay noticias para mostrar actualmente!</p>
        @endif
    </div>
@endsection