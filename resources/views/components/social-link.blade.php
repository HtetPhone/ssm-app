@props(['link', 'img'])

<a {{ $attributes(['class' => "inline-block max-w-[40px]"]) }} href="{{ $link }}">
    <img src="{{ Vite::asset('resources/images/' . $img) }}" alt="{{ $img }}">
</a>
