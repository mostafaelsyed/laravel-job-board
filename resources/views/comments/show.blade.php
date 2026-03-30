<x-layout>
    <h1>{{ $comment->author }}</h1>
    <p>{{ $comment->content }}</p>
    <p class="text-xl">Post: {{ $comment->post->title }}</p>
</x-layout>