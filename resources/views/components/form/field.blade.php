@props(['label', 'type'=>'text', 'placehold' => '', 'name', 'id' => '', 'value' => '' ])

<div class="mb-5 flex flex-col">
    <label class="text-lg font-bold" for=""> {{ $label }} </label>

    @if ($type == 'file')
        <input type="{{ $type }}" id="{{ $id }}" placeholder="{{ $placehold }}" name="{{ $name }}" class="rounded-full bg-white outline-none focus:outline-emerald-400 border p-4 py-2" accept="image/*">
    @else
        <input type="{{ $type }}" placeholder="{{ $placehold }}" name="{{ $name }}" class="rounded-full outline-none focus:outline-emerald-400 border p-4 py-2" value="{{ old($name, $value) }}">
    @endif

    @error($name)
        <p class="text-red-600"> {{ $message }} </p>
    @enderror
</div>
