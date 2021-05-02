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
                                    @auth
                                        @if (!$book->likedBy(auth()->user()))
                                            <form action="{{ route('likes', $book) }}" method="post" class="like">
                                                @csrf
                                                <button type="submit" class="">
                                                    <img src="unlike.png">
                                                </button>
                                            </form>
                                        @else
                                            <form action="{{ route('likes', $book) }}" method="post" class="like">
                                                @csrf
                                                @method('DELETE') 
                                                <button type="submit" class="">
                                                    <img src="like.png">
                                                </button>
                                            </form>

                                        @endif
                                    @endauth
                                    @guest
                                        <br>
                                    @endguest
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

                    @auth
                        <!---  reikia graziai kad atrodytu cias paspausti kad patiko ar ne -->
                        <div class="flex items-center text-white">






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
