@props(['title'])

<section class="rounded-lg bg-white shadow">
    <h2 class="border-b px-4 py-3 font-semibold">{{ $title }}</h2>
    <div class="p-4">
        {{ $slot }}
    </div>
</section>
