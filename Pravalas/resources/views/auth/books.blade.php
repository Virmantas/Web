@extends('layouts.footer')

@section('Footer')

@endsection
@extends('layouts.MainPage')

@section('MainPage')
    <div class="wrapper flex justify-center ">
        <div class="w-4/12 bg-white justify-center  rounded-lg my-36">
            <form action="{{ route('books') }}" method="post">

                Čia bus visos įkeltos knygos

            </form>

            @if ($books->count())
                @foreach ($books as $book)
                    <!---  reikia graziai kad atrodytu cia rodo visas knygas -->
                    <div class="mb-4">
                        <p class="mb-2">Knygos savininkas: {{ $book->user->name }}
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
                            <form action="" method="post" class="mr-1">
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
        @yield('test');

    </div>

    </body>
@endsection
