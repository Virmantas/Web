@extends('layouts.footer')

@section('Footer')

@endsection
@extends('layouts.MainPage')

@section('MainPage')
    <div style="width:68%; margin:0 auto; background-color:#F3F3F3;">
        <div>
            <div class="flex items-center place-content-around">
                @if ($books->count())
                    <?php $numberrow = 0; ?>
                    @foreach ($books as $book)
                        @if ($numberrow % 3 == 0 && $numberrow != 0)
                            <div class="flex items-center place-content-around">
                        @endif

                        <body>
                            <div class="wrapper1 ">
                                <div class="product-img">
                                    <img src="{{ asset('/images/' . $book->image) }}" height="380" width="294">

                                </div>
                                <div class="product-info">
                                    <div class="product-text">
                                        <br>
                                        <h1>{{ $book->name }}</h1>
                                        <h2>{{ $book->author }}</h2>
                                        <h3><button><img src="location.png" alt="" width="16 px" height="16px"></button>
                                            {{ $book->wheretostore }}</h3>
                                    </div>
                                    <div class="product-price-btn">
                                        <p><span>{{ $book->price }}</span> €</p>
                                        <button type="button">TEIRAUTIS</button>
                                    </div>
                                </div>
                            </div>

                        </body>
                        <?php
                        $numberrow++;
                        if ($numberrow % 3 == 0) {
                        echo '
            </div>';
            }
            ?>

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
