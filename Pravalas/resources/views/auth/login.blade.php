@extends('layouts.footer')

@section('Footer')

@endsection
@extends('layouts.MainPage')

@section('MainPage')
    <div class="wrapper flex justify-center ">
        <div class="w-4/12 bg-white  rounded-lg my-36">
            @if(session('status'))
            <div class="text-red-500 mt-2 text-sm">
            {{ session('status') }}
            </div>
            @endif 
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="email" class="sr-only">Elektroninis paštas</label>
                    <input type="text" name="email" id="email" placeholder="Elektroninis paštas"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror"
                        value="{{ old('email') }}">
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Slaptažodis"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror"
                        value="">
                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
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
