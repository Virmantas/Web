@extends('layouts.footer')

@section('Footer')

@endsection
@extends('layouts.MainPage')

@section('MainPage')





@foreach ($books as $book)
    <p>
        Knygos duomenys: <br>
        <img src="{{ asset('/images/' . $book->image) }}" height="380" width="294">
         {{ $book->name }} {{$book->category}} {{$book->author}} {{$book->status}} {{$book->price}} {{$book->wheretostore}} <br>
        Pardavėjo duomenys: <br>
        {{$book->user->name}}  {{$book->user->email}}  {{$book->user->username}}
    </p>
@endforeach



@endsection