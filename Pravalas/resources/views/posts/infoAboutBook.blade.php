@extends('layouts.footer')

@section('Footer')

@endsection
@extends('layouts.MainPage')

@section('MainPage')


    @foreach ($books as $book)

        <div class="col-lg-6 col-12" style="width:300px; margin:auto;">
            <div class="product__info__main">
                <h1 class="mb-1 text-3xl font-semibold "> {{ $book->name }}</h1>
                <div class="product__overview ">
                <img src="{{ asset('/images/' . $book->image) }}" height="380" width="294">
                <div class="product-reviews-summary d-flex">
                    <ul class="rating-summary d-flex">
                        <li><i class="zmdi zmdi-star-outline"></i></li>
                        <li><i class="zmdi zmdi-star-outline"></i></li>
                        <li><i class="zmdi zmdi-star-outline"></i></li>
                        <li class="off"><i class="zmdi zmdi-star-outline"></i></li>
                        <li class="off"><i class="zmdi zmdi-star-outline"></i></li>
                    </ul>
                </div>
                <div class="">
                    <span class="font-semibold">Knygos kaina: {{ $book->price }} € </span>
                </div>
                <div class="product__overview "> 
                </div>
                <div class="mb-12">
                    <p> <b>Autorius:</b> {{ $book->author }}</p>
                    <p> <b>Knygos būklė:</b> {{ $book->status }} </p>
                    <p> <b>Knyga yra iš:</b> {{ $book->wheretostore }} </p>
                    <p> <b>Knygos kategorija:</b> {{ $book->category }}</p>
                    <div class="product__overview "> 
                    </div>
                </div>
                <div class="mb-12">
                    <p> <b>Knygos pardavėjas: </b> {{ $book->user->name }} </p>    
                    <p> <b>Pardavėjo kontaktai: </b> {{ $book->user->email }} </p>   
                </div>
                        

                

            </div>
        </div>
        </div>






    @endforeach



@endsection
