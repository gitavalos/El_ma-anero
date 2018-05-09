@extends('layouts.app')

@section('css')
    <!-- include custom css -->
    <link href="{{ asset('css/leer.css') }}" rel="stylesheet">
@endsection

@section('content')
    

    <div class="container">
        <p align="center" style="font-size:40px; font-weight: bold;">{{ $noticia->title }}</p>
        <p align="center" ><img class="img-responsive center-block"
                height="400px" width="800px" 
                src="{{ asset("/storage/" . $noticia->image)}}" 
                /></p>
            <p>{!!html_entity_decode($noticia->body)!!}</p>
    </div>

    <div class="text-center">
    <img src="https://picsum.photos/1300/100/?random" class="img-responsive center-block">
	</div>
@endsection