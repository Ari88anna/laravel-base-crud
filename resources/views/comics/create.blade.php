@extends('layouts.app')


@section('main_content')

    <section>
        <div class="container">
            <h1>Crea un nuovo fumetto da aggiungere alla collection</h1>
            <form action="{{ route('comics.store') }}" method="post">
                @csrf
                @method('POST')

                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Titolo">
                </div>

                <div class="form-group">
                    <label for="writer">Autore</label>
                    <input type="text" class="form-control" id="writer" name="writer" placeholder="Autore">
                </div>

                <div class="form-group">
                    <label for="price">Prezzo</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Prezzo">
                </div>

                <div class="form-group">
                    <label for="image">Immagine</label>
                    <input type="text" class="form-control" id="image" name="image" placeholder="immagine">
                </div>

                <div class="form-group">
                    <label for="description">Trama</label>                    
                    <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
                </div>

                

                <input type="submit" class="btn btn-primary" value="salva fumetto">
            </form>



        </div>
    </section>

@endsection