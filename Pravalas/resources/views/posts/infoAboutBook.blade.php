@extends('layouts.footer')

@section('Footer')

@endsection
@extends('layouts.MainPage')

@section('MainPage')

<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootFstrap.min.css">
	<link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="{{ asset('css/book.css') }}">

	<!-- Cusom css -->
   <link rel="stylesheet" href="css/custom.css">

	<!-- Modernizer js -->
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>



@foreach ($books as $book)
    
    <div class="col-lg-6 col-12" style="width:300px; margin:auto;">
        							<div class="product__info__main">
        								<h1> {{ $book->name }}</h1>
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
        								<div class="price-box">
        									<span>Knygos kaina: {{$book->price}}€ </span>
        								</div>
										<div class="product__overview">
        									<p>Autorius: {{$book->author}}</p>
        									<p>Knygos būklė: {{$book->status}} </p>
                                            <p>Knyga yra iš: {{$book->wheretostore}} </p>
        								</div>
        								
										<div class="product_meta">
											<span class="posted_in">Kategorija: 
												<a href="#">{{$book->category}}</a>, 
										
											</span>
										</div>
										
        							</div>
        						</div>
        					</div>






@endforeach



@endsection