@extends('layouts.footer')

@section('Footer')

@endsection
@extends('layouts.MainPage')

@section('MainPage')
    <div class="wrapper flex justify-center ">
        <div class="w-4/12 bg-white  rounded-lg my-36">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div>
                    <label for="email" class="sr-only">Elektroninis paštas</label>
                    <input type="text" name="name" id="name" placeholder="Elektroninis paštas"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div>
                    <label for="password" class="sr-only">Įveskite slaptažodį</label>
                    <input type="password" name="password" id="password" placeholder="Įveskite slaptažodį"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div>
                    <button type="submit"
                        class="bg-red-50 text-white px-4 py-3 rounded 
                                                                                                                                                                                                                                                                                                                    font-medium w-full">Prisijungti</button>
                </div>

            </form>
        </div>

    </div>

    </body>
@endsection
