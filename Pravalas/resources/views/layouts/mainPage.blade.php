<!DOCTYPE html>
<html lang="en">

<head style="background-color: red; ">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PravalasNEBUS</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <nav class="p-6 bg-white flex justify-between">
        <ul style="align-items: center">
            <img style="margin-left: 0%" src="logo.png" width="250" height="250" />
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
            <button style="margin-right: 5%">
                <img src="book.png" alt="" width="50 px" height="50px">
            </button>
            <li style="justify-items: flex-end">
                <button style=" background-color: rgb(165, 7, 7);color: white; width:90%">Prisijungti</button>
                <button style=" background-color: rgb(165, 7, 7);color: white; margin-right:80%;width:90% ">Registruotis
                </button>
            </li>

            </u l>
    </nav>
    <nav class="p-3 bg-white  mb-1; ">
        <button style="margin-left:5%; color:grey;font-size: 20px">Naujai įdėtos knygos</button>
        <button style="margin-left:1.5%;color:grey;font-size: 20px">Knygos</button>
        <button style="margin-left:1.5%;color:grey;font-size: 20px">Pagalba</button>
        <button style="margin-left:1.5%;color:grey;font-size: 20px ">Apie mus</button>
        <h1 style="margin-top:0.2%; border-bottom: 2px solid grey"></h1>
    </nav>
</head>

<body>
    <img style="margin:auto; width:" src=" your.png" alt="">

    @yield('Try')
</body>

<footer style=" position: fixed;left: 0;bottom: 0;width: 100%;background-color: rgb(165, 7, 7);color: white;text-align:
        center;">
    <nav class="p-6 bg-rgb(165, 7, 7) flex justify-between mb-6; align-items:center">
        <ul style=" align-items: center; margin-left:5%; margin-top:1%">
            <p> Kontaktai</p>
            <p> Pagalba</p>
            <p>Privatumo politika</p>
            <p>Įsigijimo sąlygos</p>
            <p>Partneriams</p>
        </ul>
        <ul style="align-items: center">
            <img style="margin-left: 25%; margin-bottom:5%" src="logo.png" width="150" height="150" />
            <p> pagalba@pravalas.lt</p>
            <p>+370 655 5555</p>
            <p style="margin-top: 15%; margin-bottom:-5%;font-weight: bold">Ⓒ 2021 Pravalas. Visos teisės saugomos</p>
        </ul>
        <ul style="align-items: center; margin-right:5%">
            <p> Mano paskyra</p>
            <p> Pirkinių krepšelis</p>
            <p>Kaip pirkti</p>
            <p>Kaip įdėti knygą į pardavimą</p>
            <p>Apmokėjimas</p>
            <p>Garantija ir grąžinimas</p>
        </ul>

    </nav>
</footer>


</html>
