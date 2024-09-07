<x-admin.layout>
    <div class="mb-5">
        <a class="bg-white text-black font-amsterdam px-4 p-1 rounded-lg" href="{{ route('payment.method') }}">Home</a>
    </div>
    <div class="my-8 text-black font-josefin">
        {{-- edit form  --}}
        <div class="bg-white/10 shadow-lg p-5 md:p-8 rounded-xl shadow md:max-w-[85%] lg:max-w-[55%]">
            <x-form.header width="35">Edit Payment</x-form.header>
            <x-line class="w-68" />

            <form method="POST" action="{{ route('payment.edit', $payment) }}" class="mt-5 font-bold" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <x-form.field name="payment_name" label="Payment Name" :value="$payment->payment_name" />

                <x-form.field name="logo" label="Payment Logo" type="file" id="paymentLogo" />
                <div class="my-4">
                    <img id="imgPreview" src="{{ $payment->paymentLogo() }}" alt="logo" class="rounded-xl" width="180px">
                </div>

                <x-form.field name="acc_name" label="Account Name" :value="$payment->acc_name" />

                <x-form.field name="acc_no" label="Account Number" :value="$payment->acc_no" />

                <div class="mt-3 text-center">
                    <x-form.button> Update </x-form.button>
                </div>
            </form>
        </div>

    </div>

    @push('scripts')
        <script>
            $("#paymentLogo").on('change', function(event){
                console.log('here is image preview');
                let img = URL.createObjectURL(event.target.files[0]);

                $('#imgPreview').attr('src', '');
                $('#imgPreview').attr('src', img);
            })
        </script>

        @if (session('success'))
        <script>
            Swal.fire({
                title: "Success!",
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>
        @endif

    @endpush


</x-admin.layout>


