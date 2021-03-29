<!DOCTYPE html>
<html lang="en">

<head style="background-color: red; ">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pravalas</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>

.LogButton{
    box-shadow: 3px 3px 3px -3px rgba(0,0,0,0.75);
    padding:2px 15.6px 2px 15.6px;
    background-color: rgb(165, 7, 7);
    color: white; 
    font-weight:bold;
}
.RegButton{
    box-shadow: 3px 3px 3px -3px rgba(0,0,0,0.75);
    padding:2px 12.5px 2px 12.5px;
    background-color: rgb(165, 7, 7);
    color: white;
}
.Book{
    box-shadow: 3px 3px 3px -3px rgba(0,0,0,0.75);
    width:90px;
    height:50px;
}
.Search{
    box-shadow: 3px 3px 3px -3px rgba(0,0,0,0.75);
    border:3px;
    margin-top:11px;
    padding:8px 85px 8px 15px;
    border-style:solid;
    border-color:rgb(165, 7, 7);
    resize:none;
    color:grey;
    font-style:italic;
}
.SearchButton{
    box-shadow: 3px 3px 3px -3px rgba(0,0,0,0.75);
    width:46.9px;
    height:46.9px;
}
#logo{
    width:70%;
    margin:0 auto;
    text-align:right;
}
.Navigation{
    width:70%;
    margin:0 auto;
}
    </style>

</head>

<body>
    <div id="logo">
        <nav class="p-6 bg-white flex justify-between">
            <ul style="align-items: center">
                <a href="http://127.0.0.1:8000/"> <img src="logo.png" width="270"> </a>
            </ul>


            <ul class="flex items-center">
                <li class="">
                    <textarea class="Search" name="Surasti Knygą" id="" cols="50"
                        rows="1"> Ieškoti knygos pagal jos autorių, pavadinimą.. </textarea>
                    <button style="margin-left:-2%">
                       <img class="SearchButton" src="search.png" alt="">
                    </button>
                </li>
            </ul>
            <ul class="flex items-center">
            
                <button style="margin-left: 44%;">
                <img class="Book" src="book.png" alt="">
                </button>
                <li style="justify-items: flex-end">
                
                <a href="{{ 'login' }}"
                class="LogButton";>
                   Prisijungti
                </a>
                <a href="{{ 'register' }}"
                    class="RegButton";>
                    Registruotis
                </a>
           
                </li>
            </ul>
        </nav>
    </div>
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

</html>
