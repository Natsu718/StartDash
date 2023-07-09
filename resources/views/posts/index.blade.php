<x-app-layout>
    <x-slot name="header">
        みんなの投稿
    </x-slot>
        <h1>{{ $user->name }}</h1>
        <h2>投稿一覧画面</h2>
        <div>
            @foreach ($posts as $post)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>　
                    <a href="/{{ $grade->id }}/{{$classx->id}}/{{$user->id}}/{{$post->id}}">{{ $post->date }}</a>
                    </p>
                </div>
            @endforeach
        </div>
</x-app-layout>