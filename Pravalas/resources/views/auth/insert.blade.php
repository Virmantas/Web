@extends('layouts.footer')

@section('Footer')

@endsection
@extends('layouts.MainPage')

@section('MainPage')
    <div class="wrapper flex justify-center ">
        <div class="w-4/12 bg-white  rounded-lg my-36">
            <form action="{{ route('insert') }}" method="post">
               
                <div>
                    <label for="name" class="sr-only">Pavadinimas</label>
                    <input type="text" name="name" id="name" placeholder="Pavadinimas"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div>
                    <label for="category" class="sr-only">Kategorija</label>
                    <input type="text" name="Kategorija" id="category" placeholder="Kategorija"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div>
                    <label for="author" class="sr-only">Autorius</label>
                    <input type="text" name="Autorius" id="author" placeholder="Autorius"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div>
                    <label for="status" class="sr-only">Būklė</label>
                    <input type="text" name="Būklė" id="status" placeholder="Būklė"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div>
                    <label for="price" class="sr-only">Kaina</label>
                    <input type="text" name="Kaina" id="price" placeholder="Kaina"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div>
                    <button type="submit"
                        class="bg-red-50 text-white px-4 py-3 rounded font-medium w-full">Įkelti</button>
                </div>

            </form>
        </div>

    </div>

    </body>
@endsection
