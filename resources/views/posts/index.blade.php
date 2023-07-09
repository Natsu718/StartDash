<x-app-layout>
    <x-slot name="header">
        
    </x-slot>
        <h1>{{ $user->name }}</h1>
        <h2>投稿一覧画面</h2>
        <div>
            @foreach ($posts as $post)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>　
                    {{$post->date}}
                    <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </p>
                </div>
            @endforeach
        </div>
        <div>
            {{ $posts->links() }}
        </div>
</x-app-layout>