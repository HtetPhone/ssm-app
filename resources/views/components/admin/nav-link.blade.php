@props(['active' => false, 'link'])

@if ($active == true)
    <a class="inline-block rounded-xl px-4 py-1 bg-white text-emerald-400 text-lg">
        {{ $slot }}
    </a>
@else
    <a href="{{ $link }}" class="inline-block rounded-xl px-4 py-1 hover:bg-white hover:text-emerald-400 text-lg">
        {{ $slot }}
    </a>
@endif

