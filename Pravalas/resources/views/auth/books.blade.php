@extends('layouts.footer')

@section('Footer')

@endsection
@extends('layouts.MainPage')

@section('MainPage')
    <div class="wrapper flex justify-center ">
        <div class="w-4/12 bg-white  rounded-lg my-36">
            <form action="{{ route('books') }}" method="post">

                Čia bus visos įkeltos knygos

            </form>

            @if ($books->count())
                @foreach ($books as $book)
                    <div class="mb-4">

                        <p class="mb-2">Knygos savininkas: {{ $book->user->name }} {{ $book->name }}
                            {{ $book->Category }}
                            {{ $book->Author }}
                            {{ $book->Status }} {{ $book->Price }} {{ $book->WhereToStore }}</p>

                    </div>
                @endforeach
            @else
                Sąrašas yra tuščias
            @endif




        </div>

    </div>

    </body>
@endsection
