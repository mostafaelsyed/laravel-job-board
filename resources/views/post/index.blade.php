<x-layout :title="'Blog Posts'">
    <h1>Blog Posts</h1>
    @foreach ($data as $post)
        <h2 class="text-xl">{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
        <p class="text-lg">By : {{ $post->author }}</p>
      
    @endforeach
<div class="flex justify-center mt-4">
    {{ $data->links() }}
</div>
</x-layout>
