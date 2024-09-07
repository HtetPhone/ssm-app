<x-admin.layout>
    <x-admin.header> Payment Methods </x-admin.header>

    <div class="my-8 text-black font-josefin">
        {{-- create form  --}}
        <div class="bg-white/10 shadow-lg p-5 rounded-xl shadow md:max-w-[85%] lg:max-w-[55%]">
            <x-form.header width="35">Add New Payment</x-form.header>
            <x-line class="w-64" />

            <form method="POST" action="{{ route('payment.store') }}" class="mt-5" enctype="multipart/form-data">
                @csrf

                <x-form.field name="payment_name" label="Payment Name" placehold="Wave Money" />

                <x-form.field name="logo" label="Payment Logo" type="file" id="paymentLogo" />
                <div class="my-2" id="imgPreview"></div>

                <x-form.field name="acc_name" label="Account Name" placehold="Name Here" />

                <x-form.field name="acc_no" label="Account Number" placehold="09xxxxxxx" />

                <div class="mt-3 text-center">
                    <x-form.button> Create </x-form.button>
                </div>
            </form>
        </div>

        {{-- all the payments list here  --}}
        <div class="bg-white/10 shadow-lg p-5 md:p-8 rounded-xl shadow my-8">
            <x-form.header width="29" >All Payments</x-form.header>
            <x-line />
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 my-8 ">
                @foreach ($payments as $payment)
                    <x-admin.card :$payment />
                @endforeach
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $("#paymentLogo").on('change', function(event){
                console.log('here is image preview');
                let img = URL.createObjectURL(event.target.files[0]);
                $('#imgPreview').html('');
                $('#imgPreview').append(`<img src=${img} width="120px" class="rounded-xl" />`)
            })
        </script>

        @vite('resources/js/delete-payment.js')
    @endpush


</x-admin.layout>


