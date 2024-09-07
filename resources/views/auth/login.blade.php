<x-auth.layout>
    @section('title', 'SSM | Login')

    <div class="mx-auto font-josefin text-lg bg-emerald-600 rounded-xl p-8 md:px-10 md:w-[70%] shadow">
        <x-admin.header>Login Here</x-admin.header>

        <div class="my-4 font-bold">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <x-form.field label="Email" type='email' placehold='Your Email' name='email' />
                <x-form.field label="Password" type='password' name='password' />
                <div>
                    <x-form.button class="text-black">Login</x-form.button>
                </div>
            </form>
        </div>
    </div>
</x-auth.layout>
