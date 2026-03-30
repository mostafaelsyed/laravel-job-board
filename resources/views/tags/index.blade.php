<x-layout>
    <h2 class="text-xl">tags</h2>
@if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif
    @foreach ($tags as $tag)
        <p>{{ $tag->title }}</p>
    @endforeach
</x-layout>
