@extends('layouts.app')

@section('css')
    <!-- include custom css -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection
@section('content')
	<div class="text-center">
    <img src="https://picsum.photos/1300/100/?random" class="img-responsive center-block">
	</div>
    <div class="container">
        @if(count($noticias) > 0)
        <p style="text-align: center; font-size: 40px;">Un periodismo independiente, honrado y digno.</p>
        <div id="main">
        <div class="contenedor">
            <div class="child1"></div>
            <div class="child2">Título</div>
            <div class="child3">Publicado</div>
        </div>
            <!-- {{ $indice = 1 }} !-->
            @foreach ($noticias as $noticia)
                @if($noticia->state == "Publicado")
                <div class="contenedor">
                    <div class="child1"><img class="img-responsive center-block"
                height="75px" width="75px" 
                src="{{ asset("/storage/" . $noticia->image)}}" 
                /></div>
                    <div class="child2"><a href="{{ route('ver_noticia', $noticia->id) }}">{{ $noticia->title }}</a></div>
                    <div class="child3">{{ date_create($noticia->created_at)->format('d/M/Y') }}</div>
                </div>
                @endif
            @endforeach
        </div>
        @else
        <p style="text-align: center; font-size: 40px;">¡Actualizacion 1.0.2!</p>
        @endif
    </div>
@endsection	
