<x-layout>
   <div class=" rounded-t-xl p-4 md:p-8 lg:px-10">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 lg:grid-cols-3 xl:grid-cols-4">

            @foreach ($payments as $payment)
                <x-payment-card :$payment />
            @endforeach

        </div>
   </div>
</x-layout>
