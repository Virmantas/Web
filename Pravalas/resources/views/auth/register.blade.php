@extends('layouts.footer')
@section('Footer')
@endsection

@extends('layouts.mainPage')
@section('MainPage')
    <div class="wrapper flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg ">
            <form action="{{ route('register') }}" method="post">
                <div>
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" placeholder="Vardas"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div>
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="name" id="name" placeholder="Prisijungimo vardas"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div>
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="name" id="name" placeholder="Emailas"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Slaptažodis"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div>
                    <label for="password_confirmation" class="sr-only">Password again</label>
                    <input type="password" name="password_confirmation" id="password" placeholder="Pakartokite slaptažodi"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div>
                    <button type="submit"
                        class="bg-red-50 text-white px-4 py-3 rounded 
                                                                                                                                font-medium w-full">Registruotis</button>
                </div>

            </form>
        </div>

    </div>
    </body>
@endsection
