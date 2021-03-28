<!DOCTYPE html>
<html lang="en">

<head style="background-color: red; ">
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
        <a href="{{ 'http://127.0.0.1:8000/' }}"> <img style="margin-left: 0%" src="logo.png" width="250" height="250" /> </a>
        </ul>


        <ul class="flex items-center">
            <li class="">
                <textarea style="border:3px; border-style:solid; border-color:rgb(165, 7, 7); resize:none"
                    name="Surasti Knygą" id="" cols="50" rows="1"> Ieškoti knygos pagal jos autorių, pavadinimą..</textarea>
                <button style="margin-left:-2%">
                    <img src="search.png" alt="" width="33.5px" height="33.5px">
                </button>
            </li>
        </ul>
        <ul class="flex items-center">
            <button style="margin-right: 5%">
                <img src="book.png" alt="" width="50 px" height="50px">
            </button>
            <li style="justify-items: flex-end">
                
                <a href="{{ 'login' }}"
                style=" background-color: rgb(165, 7, 7);color: white; margin-right:80%;width:90%;">
                Prisijungti
            </a>
                <a href="{{ 'register' }}"
                    style=" background-color: rgb(165, 7, 7);color: white; margin-right:80%;width:90%;">
                    Registruotis
                </a>
            </li>
        </ul>
    </nav>
</div>
    <nav class="p-3 bg-white  mb-1; ">
        <h1 style="margin-top:0.2%; border-bottom: 1px solid lightgray"></h1>
        <button style="margin-left:5%; color:grey;font-size: 20px">Naujai įdėtos knygos</button>
        <button style="margin-left:1.5%;color:grey;font-size: 20px">Knygos</button>
        <button style="margin-left:1.5%;color:grey;font-size: 20px">Pagalba</button>
        <button style="margin-left:1.5%;color:grey;font-size: 20px ">Apie mus</button>
        <h1 style="margin-top:0.2%; border-bottom: 1px solid lightgray"></h1>
    </nav>

    @yield('MainPage')
</body>




</html>
