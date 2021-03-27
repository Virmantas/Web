<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">

                <div>
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="name" id="name" placeholder="Email"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose password"
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg" value="">
                </div>

                <div>
                    <button type="submit" class="bg-red-100 text-white px-4 py-3 rounded 
                    font-medium w-full">Login</button>
                </div>

            </form>
        </div>

    </div>
</body>

</html>
