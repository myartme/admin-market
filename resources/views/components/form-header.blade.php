@props(['value'])

<div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto max-h-28 w-auto" src="{{ Vite::asset('resources/images/phone.jpg') }}" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">{{ $value ?? $slot }}</h2>
</div>
