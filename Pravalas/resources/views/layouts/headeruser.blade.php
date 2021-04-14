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
                <a href="dashboard"> <img style="margin-left: 0%" src="logo.png" width="250" height="250" /> </a>
            </ul>
            <ul class="flex items-center">
                <li class="">
                    <textarea style="border:3px; border-style:solid; border-color:rgb(165, 7, 7); resize:none"
                        name="Surasti Knygą" id="" cols="50" rows="1"> Ieškoti knygos</textarea>
                    <button style="margin-left:-2%">
                        <img src="search.png" alt="" width="33.5px" height="33.5px">
                    </button>
                </li>
            </ul>
            <ul class="flex items-center">
                <button class="BookUser">
                    <img src="bookuser.png" alt="" >
                </button>
                <button class="Mail">
                    <img src="mail.png" alt="" >
                </button>
                <button class="User">
                    <img src="useris.png" alt="" >
                </button>
               <form action="{{ route('logout') }}" method="post" class="inline">
                @csrf
                <button type="submit" class="Logout">
                <img src="logout.png" alt="" >
                </button>
               </form>
            </ul>
        </nav>

    </div>
    <div id="logo">
    <a href="{{ 'dashboard' }}"
    class="Ad";> Įkelti skelbimą</a>
    </div>
    <nav class="p-3 bg-white mb-1; ">
        <form> 
        <h1 style="border-bottom: 1.5px solid rgb(217, 217, 217)"></h1>
        <div class="Navigation">
            <button style="margin-left:5%; color:grey;font-size: 20px">Naujai įdėtos knygos</button>
            <button style="margin-left:1.5%;color:grey;font-size: 20px">Knygos</button>
            <button formaction="{{ 'help' }}" style="margin-left:1.5%;color:grey;font-size: 20px">Pagalba</button>
            <button formaction="{{ 'about' }}" style="margin-left:1.5%;color:grey;font-size: 20px ">Apie mus</button>
            <button formaction="{{ 'about' }}" style="margin-left:1.5%;color:grey;font-size: 20px ">Mano skelbimai</button>
        </div>     
        <h1 style="border-bottom: 1.5px solid rgb(217, 217, 217)"></h1>
        </form>
        
    </nav>
    
    @yield('HeaderUser')
</body>

</html>
