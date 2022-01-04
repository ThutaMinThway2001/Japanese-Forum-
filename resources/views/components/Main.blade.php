@props(['categories'])
<main class="tm-main">
    <x-NavbarTop />
    <!-- Search form -->
    <x-Filter />
    {{$slot}}
    <x-Footer />
</main>