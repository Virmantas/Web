@extends('layouts.footer')

@show
@extends('layouts.mainPage')

@section('MainPage')

<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<div style="width:68%; margin:0 auto; background-color:#F3F3F3;">
    <nav class=" flex items-center">
        <img style="margin:auto" src=" your.png" alt="">
    </nav>
    <div class="container flex justify-between" style=" align-items: left; margin-left:10%;">


        </div>
        <div class="flex justify-between">
            <div>
                @if ($books->count())
                    @foreach ($books as $book)

                    <body>
                        <div class="wrapper1">
                          <div class="product-img">
                            <img src="{{ asset('/images/' . $book->image) }}" height="380" width="294">
                           
                          </div>
                          <div class="product-info">
                            <div class="product-text">
                              <h1>{{ $book->name }}</h1>
                              <h2>{{ $book->author }}</h2>
                              <h3>{{ $book->user->name }}</h3>
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
                        <div class="mb-4 ">
                            <p class="mb-2">
                                @if ($book->user != null)
                                    Knygos savininkas: {{ $book->user->name }}
                                @endif
                                <br> Knygos pavadinimas:{{ $book->name }}
                                <br> Knygos Kategorija:{{ $book->category }}
                                <br> Knygos Autorius:{{ $book->author }}
                                <br> Knygos būklė:{{ $book->status }}
                                <br> Kaina:{{ $book->price }}
                            </p>
                            
                        </div>
                        @auth
                            <!---  reikia graziai kad atrodytu cias paspausti kad patiko ar ne -->
                            <div class="flex items-center bg-red-50 text-white">

                                <form action="{{ route('likes', $book->id) }}" method="post" class="mr-1">
                                    @csrf
                                    <button type="submit" class="">Patiko</button>
                                </form>

                                @csrf
                                <form action="" method="post" class="mr-1">
                                    <button type="submit" class="">Nepatiko</button>
                                </form>

                                <div class=" mr-1">
                                    {{ $book->LikedPosts->count() }} likas
                                </div>

                            </div>

                        @endauth
                                   
                    @endforeach
                    {{ $books->links() }}
                @else
                    Sąrašas yra tuščias
                @endif
            </div>

        </div>
    </div>
</div>
</body>
@endsection
