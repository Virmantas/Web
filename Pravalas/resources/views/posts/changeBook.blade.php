@extends('layouts.footer')

@show
@extends('layouts.mainPage')
@section('MainPage')
<div class="wrapper flex justify-center ">
    <div class="w-4/12 bg-white  rounded-lg my-36">
        <form action="{{ Route('post.edit') }}" method="post">
            @csrf
            @foreach ($books as $book)
                @csrf
                <div>
                    <label for="name" class="sr-only">Pavadinimas</label>
                    <input type="text" name="name" id="name" placeholder="Pavadinimas"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror"
                        value="{{ $book->name }}">
                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                    <input hidden type="text" name="id" id="id" value="{{ $book->id }}">
                </div>

                <div>
                    <label for="category" class="sr-only">Kategorija</label>
                    <input type="text" name="category" id="category" placeholder="Kategorija"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('category') border-red-500 @enderror"
                        value="{{ $book->category }}">
                    @error('category')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="author" class="sr-only">Autorius</label>
                    <input type="text" name="author" id="author" placeholder="Autorius"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('author') border-red-500 @enderror"
                        value="{{ $book->author }}">
                    @error('author')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="status" class="sr-only">Būklė</label>
                    <input type="text" name="status" id="status" placeholder="Būklė"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('status') border-red-500 @enderror"
                        value="{{ $book->status }}">
                    @error('status')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <label for="price" class="sr-only">Kaina</label>
                    <input type="text" name="price" id="price" placeholder="Kaina"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('price') border-red-500 @enderror"
                        value="{{ $book->price }}">
                </div>
                @error('price')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
                <div>
                    <label for="wheretostore" class="sr-only">wheretostore</label>
                    <input type="text" name="wheretostore" id="wheretostore" placeholder="Iš kur esate?"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('wheretostore') border-red-500 @enderror"
                        value="{{ $book->wheretostore }}">
                    @error('wheretostore')
                        <div class=" text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <div>
                    <button type="submit"
                        class="bg-red-50 text-white px-4 py-3 rounded font-medium w-full">Atnaujinti</button>

                </div>
            @endforeach
        </form>
    </div>
</div>
</body>
@endsection
