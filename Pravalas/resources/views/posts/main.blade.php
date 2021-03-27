@extends('layouts.mainPage')

@section('MainPage')

    <nav>
        <img style="margin:auto" src=" your.png" alt="">
    </nav>

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

@endsection
