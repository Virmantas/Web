@extends('layouts.footer')

@show
@extends('layouts.mainPage')
@section('MainPage')

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

        
       
        
    </div>
</div>

</body>



@endsection