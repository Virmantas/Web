<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pravalas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div id="logo">
        <nav class="p-6 bg-white flex justify-between">
            <ul class="flex items-center">
                <a href="http://127.0.0.1:8000/"> <img src="logo.png" width="270"> </a>
            </ul>

            <ul class="flex items-center">
                <li>
                    <textarea class="Search" name="Surasti Knygą" id="" cols="50"
                        rows="1"> Ieškoti knygos pagal jos autorių, pavadinimą.. </textarea>

                    <button style="margin-left:-2%">
                        <img class="SearchButton" src="search.png" alt="">
                    </button>
                </li>
            </ul>
            <ul class="flex items-center">

                <button style="margin-left: 44%;">
                    <img class="Book" src="book.png" alt="">
                </button>
                <li class="place-items-center">

                    <a href="{{ 'login' }}" class="LogButton" ;>
                        Prisijungti
                    </a>
                    <a href="{{ 'register' }}" class="RegButton" ;>
                        Registruotis
                    </a>

                </li>
            </ul>
        </nav>
    </div>
    @yield('Header')
</body>

</html>
