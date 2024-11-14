@props(['value'])

<div class="sm:mx-auto sm:w-full sm:max-w-sm">
    <img class="mx-auto max-h-28 w-auto" src="https://media.istockphoto.com/id/1057455004/vector/hand-hold-phone-logotype-hand-hold-smartphone.jpg?s=612x612&w=0&k=20&c=-RXiEdROvJMurKjA09aBGn4FJ2_qo_gIRMHdnV92oS4=" alt="Your Company">
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">{{ $value ?? $slot }}</h2>
</div>
