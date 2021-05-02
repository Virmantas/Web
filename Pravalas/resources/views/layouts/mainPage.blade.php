@extends('layouts.header')

@section('Header')


    <nav class="p-3 bg-white mb-1; ">
        <form>
            <h1 style="border-bottom: 1.5px solid rgb(217, 217, 217)"></h1>
            <div class="Navigation">

                <button formaction="{{ 'about' }}" style="margin-left:1.5%;color:grey;font-size: 20px ">Apie
                    mus</button>
                <button formaction="{{ 'help' }}"
                    style="margin-left:1.5%;color:grey;font-size: 20px">Pagalba</button>
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
                        <button name="category" value="Grožinė literatūra" type="submit">Grožinė literatūra</button>
                        </br>
                        <button name="category" value="Vaikams" type="submit">Vaikams</button>     
                        <br>             
                        <button name="category" value="Istorija" type="submit">Istorija</button>
                        </br>
                        <button name="category" value="Detektyvai" type="submit">Detektyvai</button>
                        <br>
                        <button name="category" value="Fantastika" type="submit">Fantastika</button>
                        </br>
                        <button name="category" value="Psichologija" type="submit">Psichologija</button>
                        <br>
                        <button name="category" value="Meilės romanai" type="submit">Meilės romanai</button>
                        </br>
                        <button name="category" value="Pomėgiai" type="submit">Pomėgiai</button>
                        <br>
                        <button name="category" value="Biografijos" type="submit">Biografijos</button>
                        </br>
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
