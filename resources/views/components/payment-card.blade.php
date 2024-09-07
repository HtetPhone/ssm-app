@props(['payment'])


<div class="flex justify-start bg-teal-500/80 p-4 md:p-5 rounded-xl border-2 border-transparent hover:border-white transition-colors duration-300 group">
    <div class="flex flex-col shrink-0">
        <p class="font-bold text-xl font-amsterdam"> {{ $payment->payment_name }} </p>
        <div class="mt-4">
            <img src="{{ $payment->paymentLogo() }}" alt="payment-logo" class="rounded-xl w-[100px] h-[100px]">
        </div>
    </div>

    <div class="font-amsterdam ms-5 xl:ms-10">
        <h1 class="text-2xl group-hover:text-black transition-colors duration-300"> {{ $payment->acc_no }} </h1>
        <p class="mt-3 text-lg"> {{ $payment->acc_name }} </p>
    </div>

    <div class="ms-auto self-center shrink-0">
        <button class="cp-btn bg-white rounded-full p-2 border-2 border-transparent hover:bg-cyan-400 hover:border-white transition-colors duration-300" title="Copy to Clickboard">
            <img class="w-[25px] md:w-[30px]" src="{{ Vite::asset('resources/images/copy.svg') }}" alt="copy image">
        </button>
    </div>
</div>
