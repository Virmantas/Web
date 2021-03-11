<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <Header> Pravalas.lt</Header>
            </li>
            <li class="">
                <textarea name="Surasti Knygą" id="" cols="50" rows="1"> Ieškoti knygos</textarea>
            </li>
        </ul>
        <ul class="flex items-center">
            <li>

                <button>Įsiminti knygą</button>
                <button>Prisijungti</button>
                <button>Registruotis</button>

            </li>

        </ul>

    </nav>
    @yield('content')
</body>

</html>
