@extends('layouts.MainPage')
@section('MainPage')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('login') }}" method="post">

                <div>
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="name" id="name" placeholder="Email"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose password"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div>
                    <button type="submit" class="bg-red-50 text-white px-4 py-3 rounded 
                                                    font-medium w-full">Prisijungti</button>
                </div>

            </form>
        </div>

    </div>
    </body>
@endsection
