@extends('layouts.mainPage')

@section('MainPage')




    <nav class=" flex align-items:center">
        <img style="margin:auto" src=" your.png" alt="">
    </nav>
    <div class="container" ; style=" align-items: left; margin-left:10%;">
        <h1>Prekių filtras</h1>
        <h2>Kategorija</h2>

        <div class="group">
            <input type="checkbox" id="drama" />
            <label for="drama">Drama </label>
        </div>

        <div class="group">
            <input type="checkbox" id="tikros" />
            <label for="tikros">Tikros istorijos </label>
        </div>

        <div class="group">
            <input type="checkbox" id="meilės" />
            <label for="meilės">Meilės romanai </label>
        </div>

        <div class="group" style="margin-left:2%">
            <input type="checkbox" id="erotinės" />
            <label for="erotinės">Erotinės knygos </label>
        </div>

        <div class="group" style="margin-left:2%">
            <input type="checkbox" id="meilėsr" />
            <label for="meilėsr">Meilės romanai </label>
        </div>

        <div class="group">
            <input type="checkbox" id="detektyvai" />
            <label for="detektyvai">Detektyvai ir trileriai </label>
        </div>

        <div class="group">
            <input type="checkbox" id="modernioji" />
            <label for="modernioji">Modernioji ir šiuolaikinė literatūra </label>
        </div>

        <div class="group">
            <input type="checkbox" id="fantasy" />
            <label for="fantasy">Fantastika ir fantasy </label>
        </div>

        <div class="group">
            <input type="checkbox" id="klasika" />
            <label for="klasika">Klasika </label>
        </div>

        <div class="group">
            <input type="checkbox" id="publicistika" />
            <label for="publicistika">Biografijos, žmonės, publicistika </label>
        </div>

        <div class="group" style="margin-left:2%">
            <input type="checkbox" id="autobiografijos" />
            <label for="autobiografijos">Biografijos, autobiografijos </label>
        </div>

        <div class="group" style="margin-left:2%">
            <input type="checkbox" id="dienorasciai" />
            <label for="dienorasciai">Prisiminimai, dienoraščiai </label>
        </div>

    </div>

    <nav class="p-6 bg-red-50 flex justify-between mb-6; align-items:center">
        <ul style=" align-items: center; margin-left:5%; margin-top:0%">
            <p> Kontaktai</p>
            <p> Pagalba</p>
            <p>Privatumo politika</p>
            <p>Įsigijimo sąlygos</p>
            <p>Partneriams</p>
        </ul>
        <ul style="align-items: center">
            <img style="margin-left: 15%; margin-bottom:5%" src="logo.png" width="180" height="150" />
            <p style="margin-top: 1%; margin-left: 20%; font-weight: bold"> pagalba@pravalas.lt</p>
            <p style="margin-top: 1%; margin-left: 25%; font-weight: bold"> +370 655 5555 </p>
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

    </body>

@endsection
