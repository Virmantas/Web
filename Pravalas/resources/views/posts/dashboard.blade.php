@extends('layouts.footer')

@show
@extends('layouts.MainPageUSER')

@section('MainPageUser')

<div style="width:68%; margin:0 auto; background-color:#F3F3F3;">
    <nav class=" flex items-center">
        <img style="margin:auto" src=" your.png" alt="">
    </nav>
    <div class="container" ; style=" align-items: left; margin-left:10%;">
        <br>
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
        <br>


    </div>
</div>

</body>
@endsection
