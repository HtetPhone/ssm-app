<x-admin.layout>
    <div class="mb-5">
        <a class="bg-white text-black font-amsterdam px-4 p-1 rounded-lg" href="{{ route('payment.method') }}">Home</a>
    </div>
    <x-admin.header> Payment Details </x-admin.header>

    <div class="font-josefin bg-white/50 rounded-xl p-5 md:p-8 my-10 text-black md:w-[70%] ">
        <div class="space-y-8">
            <div class="flex items-start justify-between">
                <img src="{{ $payment->paymentLogo() }}" alt="logo" class="w-[200px] md:w-[230px] lg:w-[250px] xl:w-[300px] rounded-xl">
                <div class="flex space-x-4">
                    <a href="{{ route('payment.edit', $payment) }}">
                        <img class="w-[30px] p-[1px] rounded-xl bg-emerald-400 hover:bg-emerald-400/50" src="{{ Vite::asset('resources/images/edit.svg') }}" alt="">
                    </a>


                    <form id="delForm" method="post" action="{{ route('payment.delete', $payment) }}">
                        @csrf
                        @method('DELETE')
                        <button id="delBtn">
                            <img class="w-[30px] p-[1px] rounded-xl bg-rose-400 hover:bg-rose-400/50 mt-auto" src="{{ Vite::asset('resources/images/delete.svg') }}" alt="">
                        </button>
                    </form>
                </div>
            </div>
            <x-admin.detail-roll label="Payment Name" :value="$payment->payment_name" />
            <x-admin.detail-roll label="Account Name" :value="$payment->acc_name" />
            <x-admin.detail-roll label="Account Number" :value="$payment->acc_no" />
        </div>
    </div>

    @push('scripts')
        <script>
            $('#delBtn').on('click', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: "Are you sure to delete?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                        //submit the form
                        $('#delForm').submit();
                    }
                });
            })
        </script>
    @endpush
</x-admin.layout>
