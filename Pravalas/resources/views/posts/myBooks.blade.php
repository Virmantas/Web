@extends('layouts.footer')

@section('Footer')

@endsection
@extends('layouts.MainPage')

@section('MainPage')
    <div class="wrapper flex justify-center ">
        <div class="w-4/12 bg-white justify-center  rounded-lg my-36">
          

            @if ($books->count())
            @foreach ($books as $book)

            <body>
                <div class="wrapper1">
                  <div class="product-img">
                    <img src="{{ asset('/images/' . $book->image) }}" height="380" width="294">
                   
                  </div>
                  <div class="product-info">
                    <div class="product-text">
                       <br>
                      <h1>{{ $book->name }}</h1>
                      
                      <h2>{{ $book->author }}</h2>
                      <h3>Knygos Kategorija: {{ $book->category }}</h3>
                      <h3>Knygos būklė: {{ $book->status }}</h3>
                    </div>
                    <div class="product-price-btn">
                      <p><span>{{ $book->price }}</span> €</p>
                      <button type="button">buy now</button>
                    </div>
                  </div>
                </div>
              
              </body>
                <!---  reikia graziai kad atrodytu cia rodo visas knygas -->
               
                           
            @endforeach
            {{ $books->links() }}
        @else
            Sąrašas yra tuščias
        @endif
        </div>
        @yield('test');

    </div>

    </body>
@endsection
