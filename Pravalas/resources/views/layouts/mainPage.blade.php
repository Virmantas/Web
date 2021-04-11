@extends('layouts.header')

@section('Header')

    <nav class="p-3 bg-white mb-1; ">
        <form>
            <button style="margin-left:5%; color:grey;font-size: 20px">Naujai įdėtos knygos</button>
            <button style="margin-left:1.5%;color:grey;font-size: 20px">Knygos</button>
            <button formaction="{{ 'help' }}" style="margin-left:1.5%;color:grey;font-size: 20px">Pagalba</button>
            <button formaction="{{ 'about' }}" style="margin-left:1.5%;color:grey;font-size: 20px ">Apie
                mus</button>
        </form>
        <h1 style="margin-top:0.2%; border-bottom: 2px solid grey"></h1>
    </nav>


    @yield('MainPage')
    </body>
@endsection



</html>
