<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SSM Admin Panel</title>

    {{-- jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


    {{-- sweet alert2 js --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- fonts - marko  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=New+Amsterdam&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

    @vite(['resources/js/app.js', 'resources/css/app.css'])

</head>
<body class="bg-emerald-400 text-white font-marko">

    <header class="border-b border-white/30">
        <div class="max-w-[90%] mx-auto my-8 flex items-center justify-between">

            <div class="block md:hidden">
                <button id="menu">
                    <img class="w-[30px] rounded-md bg-white p-1" src="{{ Vite::asset('resources/images/menu.svg') }}" alt="menu">
                </button>
            </div>

            <nav class="hidden md:block space-x-4 font-amsterdam tracking-wide flex items-center">
                <x-admin.nav-link link="{{ route('dashboard') }}" :active="request()->is('admin')"> Dashboard </x-admin.nav-link>
                <x-admin.nav-link link="{{ route('payment.method') }}" :active="request()->is('payments')">Payment Methods</x-admin.nav-link>
                <x-admin.nav-link link="{{ route('index') }}"> See The Front Page </x-admin.nav-link>
            </nav>



            @auth
                <div class="flex items-center space-x-3 font-josefin">
                    <p class="font-bold"> {{ auth()->user()->name }} </p>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="inline-block px-2 p-1 flex items-center font-bold bg-red-600 rounded-xl hover:bg-red-600/30 ">
                            <img class="w-[30px]" src="{{ Vite::asset('resources/images/logout.svg') }}" alt=""> <span>Logout</span>
                        </button>
                    </form>
                </div>
            @endauth
        </div>
    </header>

    {{-- sm-nav --}}
    <div id="smNav" class="block md:hidden absolute p-8 top-0 left-[-100%] z-40 w-[70%] h-[100vh] bg-white text-black font-amsterdam transition-all ease-in-out duration-300">
        <div class="flex justify-between">
            <div>
                <h3 class="text-lg">SSM Admin Panel</h3>
                <hr>
            </div>

            <div>
                <button id="close">
                    <img class="w-[30px] rounded-full hover:bg-emerald-500" src="{{ Vite::asset('resources/images/close.svg') }}" alt="close">
                </button>
            </div>
        </div>

        <nav class="flex items-start flex-col my-5 space-y-3">
            <x-admin.sm-nav-link link="{{ route('dashboard') }}" :active="request()->is('admin')"> Dashboard </x-admin.sm-nav-link>
            <x-admin.sm-nav-link link="{{ route('payment.method') }}" :active="request()->is('payments')">Payment Methods</x-admin.sm-nav-link>
            <x-admin.sm-nav-link link="{{ route('index') }}">See The Front Page</x-admin.sm-nav-link>
        </nav>
    </div>

    <main class="max-w-[90%] mx-auto my-8">
        {{ $slot }}
    </main>

    @stack('scripts')

    @if (session('success'))
        <script>
            Swal.fire({
                title: "Success!",
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>
        @endif

        @if (session('delete'))
            <script>
                Swal.fire({
                    title: "Success!",
                    text: "{{ session('delete') }}",
                    icon: "success"
                });
            </script>
        @endif

        <script>
            $('#close').on('click', function() {
                $('#smNav').css('left', '-100%')

            })

            $('#menu').on('click', () => {
                $("#smNav").css('left', '0')
            })
        </script>
</body>
</html>
