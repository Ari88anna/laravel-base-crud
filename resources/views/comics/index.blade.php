@extends ('layouts.app')


@section('main_content')

    <section>
        <h1>La nostra collection</h1>
        <div class="container">

            <div class="row">

                @foreach($comics as $comic)  

                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ $comic->image }}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">{{ $comic->title }}</h5>                          
                          <a href="{{ route('comics.show', [
                              'comic'=>$comic->id
                              ]) }}" class="btn btn-primary">
                              Dettagli
                            </a>
                        </div>
                      </div>

                @endforeach              

            </div>

              

        </div>
    </section>
    
@endsection