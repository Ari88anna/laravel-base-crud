@extends ('layouts.app')


@section('main_content')

    <section>
        <div class="container">

            <div class="row">

                @foreach($comics as $comic)  

                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ $comic->image }}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">{{ $comic->title }}</h5>
                          <p class="card-text">{{ $comic->description }}</p>
                          <a href="#" class="btn btn-primary">Dettagli</a>
                        </div>
                      </div>

                @endforeach              

            </div>

              

        </div>
    </section>
    
@endsection