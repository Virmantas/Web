@extends('layouts.footer')

@show
@extends('layouts.mainPage')

@section('MainPage')

<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<div style="width:68%; margin:0 auto; background-color:#F3F3F3;">
    <nav class=" flex items-center">
        <img style="margin:auto" src=" your.png" alt="">
    </nav>
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
                                        @if ($book->ownedBy(auth()->user()))
                                            <form action="{{ route('posts.destroy', $book) }}" method="post"
                                                class="deletePost">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="">šalinti</button>
                                            </form>
                                        @endif
                                    @endauth
                                    @guest
                                        <br>
                                    @endguest
                                    <h1>{{ $book->name }}</h1>

                                    <h2>{{ $book->author }}</h2>
                                    <h3><button><img src="user_bookcard.png" alt="" width="16 px"
                                                height="16px"></button>
                                        {{ $book->user->name }}</h3>
                                    <h3><button><img src="location.png" alt="" width="16 px" height="16px"></button>
                                        {{ $book->wheretostore }}</h3>
                                </div>



                                <div class="product-price-btn">
                                    <p><span>{{ $book->price }}</span> €</p>
                                    <button type="button">PLAČIAU</button>
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
