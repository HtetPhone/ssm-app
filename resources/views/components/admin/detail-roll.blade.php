@props(['label', 'value'])
<div class="flex justify-between rounded-full bg-white p-2 md:px-6 font-bold md:text-lg">
    <span>
        {{ $label }}
    </span>
    <span class="text-orange-500 uppercase">
        {{ $value }}
    </span>
</div>
