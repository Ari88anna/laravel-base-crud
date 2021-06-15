@extends('layouts.app')

@section('main_content')

    <section> 
        <div class="container">
            <h1>{{ $comic->title }}</h1>

            <p class="card-text">{{ $comic->description }}</p>

            <div>Autore: {{ $comic->writer }}</div>

            <div>Prezzo: {{ $comic->price }} €</div>

        </div>
    </section>
    
@endsection