@props(['name'])

@if ($name)
    <ul {{ $attributes->merge(['class' => 'text-sm text-red-600 space-y-1']) }}>
        @foreach ((array) $errors->get($name) as $n)
            <li>{{ $n }}</li>
        @endforeach
    </ul>
@endif
