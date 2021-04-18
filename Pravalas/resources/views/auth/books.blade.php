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

            @if ($books->count() )
                @foreach ($books as $book)
                    <div class="mb-4">
                        <a href="" class="font-bold">{{ $book->user}}</a>

                        <p class="mb-2"> {{ $book->name }}</p>

                    </div>
                @endforeach
            @else
                Sąrašas yra tuščias
            @endif




        </div>

    </div>

    </body>
@endsection
