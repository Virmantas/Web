@extends('layouts.footer')

@show
@extends('layouts.mainPage')

@section('MainPage')

<div style="width:68%; margin:0 auto; background-color:#F3F3F3;">
    <nav class=" flex items-center">
        <img style="margin:auto" src=" your.png" alt="">
    </nav>
    <div class="container flex justify-between" style=" align-items: left; margin-left:10%;">
        <div class="">
            <br>
            <h1>Prekių filtras</h1>
            <h2>Kategorija</h2>

            <form action="{{ route('findCategory') }}" method="get">
                @csrf
                <div class="group">
                    <input type="checkbox" name="option[]" value="drama" id="drama" />
                    <label for="drama">Drama </label>
                </div>

                <div class="group">
                    <input type="checkbox" name="option[]" value="tikros" id="tikros" />
                    <label for="tikros">Tikros istorijos </label>
                </div>

                <div class="group">
                    <input type="checkbox" name="option[]" value="test" id="test" />
                    <label for="meiles">Meilės romanai </label>
                </div>

                <div class="group" style="margin-left:2%">
                    <input type="checkbox" name="option[]" value="erotinės" id="erotinės" />
                    <label for="erotinės">Erotinės knygos </label>
                </div>

                <div class="group" style="margin-left:2%">
                    <input type="checkbox" name="option[]" value="erotinės" id="meilėsr" />
                    <label for="meilėsr">Meilės romanai </label>
                </div>

                <div class="group">
                    <input type="checkbox" name="option[]" value="detektyvai" id="detektyvai" />
                    <label for="detektyvai">Detektyvai ir trileriai </label>
                </div>

                <div class="group">
                    <input type="checkbox" name="option[]" value="modernioji" id="modernioji" />
                    <label for="modernioji">Modernioji ir šiuolaikinė literatūra </label>
                </div>

                <div class="group">
                    <input type="checkbox" name="option[]" value="fantasy" id="fantasy" />
                    <label for="fantasy">Fantastika ir fantasy </label>
                </div>

                <div class="group">
                    <input type="checkbox" name="option[]" value="klasika" id="klasika" />
                    <label for="klasika">Klasika </label>
                </div>

                <div class="group">
                    <input type="checkbox" name="option[]" value="publicistika" id="publicistika" />
                    <label for="publicistika">Biografijos, žmonės, publicistika </label>
                </div>

                <div class="group" style="margin-left:2%">
                    <input type="checkbox" name="option[]" value="autobiografijos" id="autobiografijos" />
                    <label for="autobiografijos">Biografijos, autobiografijos </label>
                </div>

                <div class="group" style="margin-left:2%">
                    <input type="checkbox" name="option[]" value="dienorasciai" id="dienorasciai" />
                    <label for="dienorasciai">Prisiminimai, dienoraščiai </label>
                </div>
                <button type="submit" class="bg-red-50 text-white px-4 py-3 rounded font-medium w-full">Surasti</button>

                </button>
            </form>
        </div>
        <div class="flex justify-between">
            <div>
                @if ($books->count())
                    @foreach ($books as $book)
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
                            <img src="{{ asset('/images/' . $book->image) }}" alt="">
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

        </div>
    </div>
</div>
</body>
@endsection
