@props(['payment'])

<div class="bg-white rounded-xl p-3 md:p-5 flex justify-start items-start border-2 border-transparent hover:border-black">
    <div class="shrink-0">
        <img src="{{ $payment->paymentLogo() }}" class="rounded-xl shadow-lg w-[80px] h-[80px]" alt="">
    </div>
    <div class="ms-4 text-wrap md:text-nowrap">
        <p class="md:text-xl font-bold">{{ $payment->acc_no }}</p>
        <p class="md:text-md text-gray-600 font-bold mt-2"> {{ $payment->acc_name }} </p>
    </div>
    <div class="ms-auto flex flex-col space-y-3">
            <a class="w-[30px] p-[1px] rounded-full hover:bg-orange-400" href="{{ route('payment.detail', $payment) }}">
                <img src="{{ Vite::asset('resources/images/detail.svg') }}" alt="detail">
            </a>
            <a class="w-[30px] p-[1px] rounded-xl bg-emerald-400 hover:bg-emerald-400/50" href="{{ route('payment.edit', $payment) }}">
                <img  src="{{ Vite::asset('resources/images/edit.svg') }}" alt="edit">
            </a>


            <form id="delForm" method="POST"  action="{{ route('payment.delete', $payment) }}" >
                @csrf
                @method('DELETE')
                <button id="delBtn">
                    <img class="w-[30px] p-[1px] rounded-xl bg-rose-400 hover:bg-rose-400/50 mt-auto" src="{{ Vite::asset('resources/images/delete.svg') }}" alt="delete">
                </button>
            </form>
        </div>
    </div>
