<x-admin.layout>

    <x-admin.header> Dashboard </x-admin.header>

    <div class="my-8 bg-white/30 shadow-lg p-8 rounded-xl text-black font-josefin font-semibold space-y-8 shadow md:max-w-[85%] lg:max-w-[55%]">
        <div>
            <x-form.header width="35">Add New Payment</x-form.header>
            <x-line class="w-64" />
        </div>

        <div class="md:text-lg space-y-5">
            <x-admin.detail-roll label="Total Payments" :value="$payments->count()" />
            <x-admin.detail-roll label="Total Admin" :value="$users->count()" />
        </div>
    </div>
</x-admin.layout>

