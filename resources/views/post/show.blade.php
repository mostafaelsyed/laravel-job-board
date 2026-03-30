<x-layout>
    <h1>Blog Posts</h1>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
            <p>By {{ $post->author }}</p>
              <ul>
            @foreach ($post->comments as $comment)
                <li>{{ $comment->author }}: {{ $comment->content }}</li>
            @endforeach
        </ul>
</x-layout>