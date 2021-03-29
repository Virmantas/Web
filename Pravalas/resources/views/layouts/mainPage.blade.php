@extends('layouts.header')
@section('Header')

    <nav class="p-3 bg-white  mb-1; ">
        <h1 style="margin-top:0.2%; border-bottom: 1px solid lightgray"></h1>
        <div class="Navigation">
            <button style="margin-left:10px; color:grey;font-size: 20px">Naujai įdėtos knygos</button>
            <button style="margin-left:1.5%;color:grey;font-size: 20px">Knygos</button>
            <button style="margin-left:1.5%;color:grey;font-size: 20px">Pagalba</button>
            <button style="margin-left:1.5%;color:grey;font-size: 20px ">Apie mus</button>
        </div>
        <h1 style="margin-top:0.2%; border-bottom: 1px solid lightgray"></h1>

    </nav>
    </div>
    @yield('MainPage')
    </body>
@endsection

</html>
