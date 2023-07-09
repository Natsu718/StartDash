<x-app-layout>
    <x-slot name="header">
        
    </x-slot>
    <body>
        <h1>詳細画面</h1>
        <div>
            <p>{{ $post->date }}</p>
            <p>{{ $post->weather }}</p>
            <p>今日あったこと</p>
            <p>{{ $post->daily }}</p>
            <p>{{ $post->date }}</p>
            <div>
                <img src="{{ $post->image }}" alt="画像が読み込めません。"/>
            </div>
            <p>今日やった宿題</p>
            <p>{{ $post->task }}</p>
            
        </div>
        <div>
            <p class="edit">[<a href="/posts/{{ $post->id }}/edit">編集</a>]</p>
            <a href="/">戻る</a>
        </div>
</x-app-layout>