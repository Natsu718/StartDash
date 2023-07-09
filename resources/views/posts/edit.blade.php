<x-app-layout>
    <x-slot name="header">
        編集画面
    </x-slot>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
            <div>
            <h2>日付</h2>
            <input type="text" name="post[date]" value="{{  $post->date }}">
            </div>
            <div>
            <h2>天気</h2>
                <input type="text" name="post[weather]" value="{{ $post->weather }}"/>
            </div>
            <div>
            <h2>今日あったこと</h2>
                <input type="text" name="post[daily]" value="{{ $post->daily }}"/>
            </div>
            <h2>写真</h2>
            <div class="image">
             <input type="file" name="image"></div>
            </div>
            <div><h2>今日やった宿題</h2>
            <input type="text" name="post[task]" value="{{ $post->task }}"/>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div><a href="/">戻る</a></div>
</x-app-layout>