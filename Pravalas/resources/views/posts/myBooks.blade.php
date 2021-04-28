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
                    <div class="mb-4">
                        <p class="mb-2">
                            <br> Knygos pavadinimas:{{ $book->name }}
                            <br> Knygos Kategorija:{{ $book->category }}
                            <br> Knygos Autorius:{{ $book->author }}
                            <br> Knygos būklė:{{ $book->status }}
                            <br> Kaina:{{ $book->price }}
                        </p>
                    </div>
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
