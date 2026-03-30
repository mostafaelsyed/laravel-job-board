<x-layout>
    <h1>Comments</h1>
    <ul>
        @foreach ($comments as $comment)
            
                <p>{{ $comment->author }}</p>
                <p>{{ $comment->content }}</p>
                <a href="/blog/{{ $comment->post_id }}" class="text-xl">Post: {{ $comment->post->title }}</a>
           
        @endforeach
    </ul>
</x-layout>