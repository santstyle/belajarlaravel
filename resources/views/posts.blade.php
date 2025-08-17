<x-layout :title="$title">

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-grey-300">
            <a href="/posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3-xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
            </a>
            <div class="text-base text-gray-500">
                By <a href="/authors/{{ $post->author->username }}" class="text-gray-900 hover:underline">{{ $post->author->name }}</a>
                in <a href="/categories/{{ $post->category->slug }}" class="text-gray-900 hover:underline">{{ $post->category->name }}</a>
                | 1 Januari 2025
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['body'], 100) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach

</x-layout>
