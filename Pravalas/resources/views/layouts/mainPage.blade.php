@extends('layouts.header')

@section('Header')


    <nav class="p-3 bg-white mb-1; ">
        <form> 
        <h1 style="border-bottom: 1.5px solid rgb(217, 217, 217)"></h1>
        <div class="Navigation">
            <button style="margin-left:5%; color:grey;font-size: 20px">Naujai įdėtos knygos</button>
            <button style="margin-left:1.5%;color:grey;font-size: 20px">Knygos</button>
            <button formaction="{{ 'help' }}" style="margin-left:1.5%;color:grey;font-size: 20px">Pagalba</button>
            <button formaction="{{ 'about' }}" style="margin-left:1.5%;color:grey;font-size: 20px ">Apie mus</button>
            
        </div>
        <h1 style="border-bottom: 1.5px solid rgb(217, 217, 217)"></h1>
        </form>
        
    </nav>


    @yield('MainPage')
    </body>
@endsection



</html>
