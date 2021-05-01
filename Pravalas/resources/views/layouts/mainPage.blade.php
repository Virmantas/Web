@extends('layouts.header')

@section('Header')


    <nav class="p-3 bg-white mb-1; ">
        <form>
            <h1 style="border-bottom: 1.5px solid rgb(217, 217, 217)"></h1>
            <div class="Navigation">

                <button formaction="{{ 'help' }}"
                    style="margin-left:1.5%;color:grey;font-size: 20px">Pagalba</button>
                <button formaction="{{ 'about' }}" style="margin-left:1.5%;color:grey;font-size: 20px ">Apie
                    mus</button>
                @auth
                    <button formaction="{{ 'test' }}" style="margin-left:1.5%;color:grey;font-size: 20px ">Mano skelbimai
                    </button>
                    <button formaction="{{ 'insert' }}" style="margin-left:1.5%;color:grey;font-size: 20px ">Įkelti
                        knygą</button>
                @endauth
        </form>
        <div class="dropdown">
            <button class="dropbtn"> Kategorijos</button>
            <div id="Items" class="dropdown-content">
                <ul>
                    <form action="{{ route('findCategory') }}" method="get">
                        <button name="category" value="Drama" type="submit">Drama</button>
                        <br>
                        
                        <button name="category" value="Meilės istorijos" type="submit">Meilės istorijos</button>
                        <button name="category" value="Erotinės knygos" type="submit">Erotinės knygos</button>
                        <button name="category" value="Meilės romanai" type="submit">Meilės romanai</button>
                        <button name="category" value="Tikros istorijos" type="submit">Tikros istorijos</button>
                        <button name="category" value="Meilės istorijos" type="submit">Meilės istorijos</button>
                        <button name="category" value="Erotinės knygos" type="submit">Erotinės knygos</button>
                    </form>
                </ul>
            </div>
        </div>
        </div>
        </div>


        <h1 style=" border-bottom: 1.5px solid rgb(217, 217, 217)"></h1>


    </nav>


    @yield('MainPage')
    </body>
@endsection



</html>
