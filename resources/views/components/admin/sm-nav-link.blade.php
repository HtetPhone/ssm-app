@props(['active' => false, 'link'])

@if ($active == true)
    <a class="inline-block rounded-xl px-2 py-1 bg-emerald-400 text-white text-lg">
        {{ $slot }}
    </a>
@else
    <a href="{{ $link }}" class="inline-block rounded-xl px-2 py-1 hover:bg-emerald-400 hover:text-white text-lg">
        {{ $slot }}
    </a>
@endif

