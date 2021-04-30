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
            <ul style="align-items: center">
                <a href="/"> <img style="margin-left: 0%" src="logo.png" width="250" height="250" /> </a>
            </ul>
            <ul class="flex items-center">
                <li class="">
                    <form action="{{ route('find') }}" method="get">
                        @csrf
                        <textarea style="border:3px; border-style:solid; border-color:rgb(165, 7, 7); resize:none"
                            name="book" placeholder="Ieškoti knygos" id="" cols="50" rows="1"></textarea>
                        <button type="submit" style="margin-left:-2%">
                            <img src="search.png" alt="" width="33.5px" height="33.5px">
                        </button>
                    </form>

                </li>
            </ul>
            <ul class="flex items-center">

                @guest
                    <button style="Book">
                        <img src="book.png" alt="" width="50 px" height="50px">
                    </button>
                    <li style="justify-items: flex-end">

                        <a href="{{ 'login' }}" class="LogButton" ;>
                            Prisijungti
                        </a>
                        <a href="{{ 'register' }}" class="RegButton" ;>
                            Registruotis
                        </a>
                    </li>
                @endguest
                @auth
                    <li class="flex items-center">
                        <button class="BookUser">
                            <img src="bookuser.png" alt="">
                        </button>
                        <button class="Mail">
                            <img src="mail.png" alt="">
                        </button>
                        <button class="User">
                            <img src="useris.png" alt="">
                        </button>
                        <form action="{{ route('logout') }}" method="post" class="inline">
                            @csrf
                            <button type="submit" class="Logout">
                                <img src="logout.png" alt="">
                            </button>
                        </form>
                    </li>

                @endauth

            </ul>
        </nav>
    </div>
    @yield('Header')
</body>

</html>
