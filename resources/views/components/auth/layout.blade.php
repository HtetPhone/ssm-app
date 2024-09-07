<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title', 'SSM')
    </title>

    {{-- fonts - marko and new amsterdam  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=New+Amsterdam&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">


    @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>
<body class="bg-black">
    <div class="flex my-10 justify-center items-start min-h-[100vh] px-20">
        {{ $slot }}
    </div>
</body>
</html>
